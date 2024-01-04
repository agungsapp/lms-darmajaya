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
										<form action="{{ route('dosen.modul.store') }}" method="POST" class="mt-3">
												@csrf

												{{-- hidden area start --}}
												<input type="hidden" value="{{ $mk->kode_mk }}">
												{{-- hidden area end --}}

												<div class="form-group">
														<label for="nama">Judul</label>
														<input type="text" class="form-control" name="nama" id="nama"
																placeholder="Masukan judul evaluasi ...">
												</div>

												<div class="form-group">
														<label for="durasi">Durasi dalam menit</label>
														<input type="number" class="form-control" name="durasi" id="durasi" placeholder="Contoh : 120">
												</div>

												<div class="form-group">
														<label for="deskripsi">Deskripsi</label>
														<textarea class="form-control" name="deskripsi" id="deskripsi" rows="6"></textarea>
												</div>


												<button type="submit" class="btn btn-primary">Simpan</button>
										</form>
								</div>
						</div>
				</div>
		</div>
@endsection

@push('script')
		<script>
				$('#deskripsi').summernote({
						placeholder: 'Masukan deskripsi evaluasi di sini ...',
						tabsize: 2,
						height: 100
				});
		</script>
@endpush
