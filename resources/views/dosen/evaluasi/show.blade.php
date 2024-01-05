@extends('dosen.layouts.main')
@section('content')
		{{-- info section --}}
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">buat evaluasi pada mata kuliah <strong
														class="text-primary">{{ $mk->name }}</strong></h3>
										<h6 class="font-weight-normal mb-0">

										</h6>
								</div>
						</div>
				</div>
		</div>

		{{-- create section --}}
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<h3>Tambah evaluasi baru</h3>
										<form action="{{ route('dosen.evaluasi.store') }}" method="POST" class="mt-3">
												@csrf

												{{-- hidden area start --}}
												<input type="hidden" name="kode_mk" value="{{ $mk->kode_mk }}">
												{{-- hidden area end --}}

												<div class="form-group">
														<label for="name">Judul</label>
														<input type="text" class="form-control" name="name" id="name"
																placeholder="Masukan judul evaluasi ...">
												</div>

												<div class="form-group">
														<label for="durasi">Durasi dalam menit</label>
														<input type="number" class="form-control" name="durasi" id="durasi" placeholder="Contoh : 120">
												</div>

												<div class="form-group">
														<label for="deskripsi">Deskripsi</label>
														<textarea class="form-control deskripsi" name="deskripsi" id="deskripsi" rows="6"></textarea>
												</div>


												<button type="submit" class="btn btn-primary">Simpan</button>
										</form>
								</div>
						</div>
				</div>
		</div>



		<div class="row mt-5">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<p class="title-table">Evaluasi tersedia</p>
										<div class="table-responsive">
												<table class="table">
														<thead>
																<tr>
																		<th scope="col">#</th>
																		<th scope="col">Nama</th>
																		<th scope="col">Durasi</th>
																		<th scope="col">Aksi</th>
																</tr>
														</thead>
														<tbody>
																@if (empty($eval))
																		<tr>
																				<td colspan="4">-- Data belum ada --</td>
																		</tr>
																@else
																		@foreach ($eval as $e)
																				<tr>
																						<th scope="row">{{ $loop->iteration }}</th>
																						<td>{{ $e->name }}</td>
																						<td>{{ $e->durasi }} Menit</td>
																						<td>

																								<a href="{{ route('dosen.evaluasi.edit', $e->id) }}" class="btn btn-warning">Edit</a>
																								<a href="{{ route('dosen.evaluasi.create-modul', $e->id) }}" class="btn btn-primary">Lihat
																										Soal</a>

																						</td>
																				</tr>
																		@endforeach
																@endif
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection

@push('script')
		<script>
				$(document).ready(function() {
						$('.deskripsi').summernote({
								placeholder: 'Masukan deskripsi evaluasi di sini ...',
								tabsize: 2,
								height: 200,
								toolbar: [
										// Menambahkan grup toolbar yang diinginkan
										['style', ['bold', 'italic', 'underline', 'clear']],
										['font', ['strikethrough', 'superscript', 'subscript']],
										['fontsize', ['fontsize']],
										['color', ['color']],
										['para', ['ul', 'ol', 'paragraph']],
										['height', ['height']],
										// Menonaktifkan fitur insertImage dan insertVideo
										// ['insert', ['link', 'picture', 'video']], // Baris ini biasanya mengaktifkan fitur gambar dan video
								]
						});




				})
		</script>
@endpush
