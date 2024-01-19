@extends('student.layouts.main')
@section('content')
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<table id="card-evaluasi" cellpading=10>
												<tbody>
														<tr>
																<td>Nama</td>
																<td>:</td>
																<td class="capitalize">{{ $eval->name }}</td>
														</tr>
														<tr>
																<td>Durasi</td>
																<td>:</td>
																<td>{{ $eval->durasi }} Menit</td>
														</tr>
												</tbody>
										</table>

								</div>
						</div>
				</div>
		</div>
		<div class="row mt-3">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<div>
												{!! $eval->deskripsi !!}
										</div>
								</div>
						</div>
				</div>
		</div>

		{{-- section soal --}}
		<div class="row">
				<div class="col-12">
						<form action="{{ route('student.evaluasi.koreksi') }}" method="post">
								@csrf

								<input type="hidden" name="id_evaluasi" value="{{ $eval->id }}">

								@foreach ($soal as $index => $s)
										<div class="card mt-3">
												<div class="card-body">
														<h5>{{ $s->soal }}</h5>
														<div>
																<input type="radio" id="opsi_a_{{ $index }}" name="jawaban[{{ $s->id }}]"
																		value="{{ $s->opsi_a }}">
																<label for="opsi_a_{{ $index }}">{{ $s->opsi_a }}</label>
														</div>
														<div>
																<input type="radio" id="opsi_b_{{ $index }}" name="jawaban[{{ $s->id }}]"
																		value="{{ $s->opsi_b }}">
																<label for="opsi_b_{{ $index }}">{{ $s->opsi_b }}</label>
														</div>
														<div>
																<input type="radio" id="opsi_c_{{ $index }}" name="jawaban[{{ $s->id }}]"
																		value="{{ $s->opsi_c }}">
																<label for="opsi_c_{{ $index }}">{{ $s->opsi_c }}</label>
														</div>
														<div>
																<input type="radio" id="opsi_d_{{ $index }}" name="jawaban[{{ $s->id }}]"
																		value="{{ $s->opsi_d }}">
																<label for="opsi_d_{{ $index }}">{{ $s->opsi_d }}</label>
														</div>
														<div>
																<input type="radio" id="opsi_e_{{ $index }}" name="jawaban[{{ $s->id }}]"
																		value="{{ $s->opsi_e }}">
																<label for="opsi_e_{{ $index }}">{{ $s->opsi_e }}</label>
														</div>
												</div>
										</div>
								@endforeach

								<div class="card mt-3">
										<div class="card-body">
												<button type="submit" class="btn btn-primary">Selesai</button>
										</div>
								</div>

						</form>
						{{-- end form --}}
				</div>
		</div>
@endsection

@push('css')
		<style>
				#card-evaluasi tbody tr td {
						padding: 10px;
				}

				#card-evaluasi tbody tr td:nth-child(1) {
						/* Style untuk td pertama */
						width: 10%;
						text-align: start;
				}

				#card-evaluasi tbody tr td:nth-child(2) {
						/* Style untuk td kedua */
						width: 2%;
						text-align: start;
				}

				#card-evaluasi tbody tr td:nth-child(3) {
						/* Style untuk td ketiga */
						width: 88%;
						text-align: start;
				}
		</style>
@endpush
