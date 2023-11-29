@extends('dosen.layouts.main')
@section('content')
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">Data Kelas</h3>
										<h6 class="font-weight-normal mb-0">
												daftar data seluruh modul yang anda miliki.
										</h6>
								</div>
						</div>
				</div>
		</div>
		<div class="row mb-3">
				<div class="card w-100">
						<div class="card-body p-4">
								<form action="{{ route('dosen.data-kelas.store') }}" method="POST" class="row">
										@csrf


										<div class="col-6">
												<div class="form-group">
														<label for="kode">Kode : </label>
														<input type="text" class="form-control" id="kode" name="kode" value="{{ $kodemk }}"
																readonly>
												</div>
												<div class="form-group">
														<label for="dosen">Dosen pengajar : </label>
														<input type="hidden" name="id_dosen" value="{{ Auth::user()->id }}">
														<input type="text" class="form-control" id="dosen" name="dosen"
																value="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" readonly>
												</div>
												<div class="form-group">
														<label for="name">Nama Mata Kuliah : </label>
														<input type="text" class="form-control" id="name" name="name" required>
												</div>
										</div>
										<div class="col-6">
												{{-- <div class="form-group">
														<label for="kelas">Hari :</label>
														<select class="custom-select" name="kelas">
																<option selected value="">-- pilih kelas --</option>
																<option value="1">P1</option>
																<option value="2">P2</option>
																<option value="3">P3</option>
																<option value="4">P4</option>
																<option value="5">P5</option>
														</select>
												</div> --}}
												{{-- <div class="form-group">
														<label for="hari">Hari :</label>
														<select class="custom-select" name="hari">
																<option selected value="">-- pilih hari --</option>
																@foreach ($hari as $h)
																		<option value="{{ $h->id }}">{{ $h->name }}</option>
																@endforeach
														</select>
												</div> --}}

												{{-- <div class="form-group">
														<label for="jam">Jam :</label>
														<select class="custom-select" name="jam">
																<option selected value="">-- pilih jam --</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
														</select>
												</div> --}}
										</div>
										<button type="submit" class="btn btn-primary">Simpan</button>

								</form>
						</div>
				</div>
		</div>
		<div class="row">
				<div class="card w-100">
						<div class="card-body table-responsive">
								<table class="table-hover table">
										<thead>
												<tr>
														<th>No.</th>
														<th>Kode</th>
														<th>Nama</th>
														<th>Dibuat</th>
												</tr>
										</thead>
										<tbody>
												@foreach ($mks as $mk)
														<tr>
																<td>{{ $loop->iteration }}</td>
																<td>{{ $mk->kode_mk }}</td>
																<td>{{ $mk->name }}</td>
																<td>{{ $mk->created_at }}</td>

														</tr>
												@endforeach
										</tbody>
								</table>
						</div>
				</div>
		</div>
@endsection


@push('script')
		<script>
				$(document).ready(function() {

						let kode = $('#kode').val();


				})
		</script>
@endpush
