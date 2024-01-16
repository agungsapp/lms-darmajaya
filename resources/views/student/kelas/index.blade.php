@extends('student.layouts.main')

@section('content')
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">Daftar modul favorit anda !</h3>
										<h6 class="font-weight-normal mb-0">
												Mulai belajar ...
										</h6>
								</div>
						</div>
				</div>
		</div>
		<div class="row">
				<div class="col-12">
						<div class="input-group">
								<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
										<span class="input-group-text" id="search">
												<i class="icon-search"></i>
										</span>
								</div>
								<input type="text" class="form-control" id="navbar-search-input" placeholder="Cari kelas" aria-label="search"
										aria-describedby="search" />
						</div>
				</div>
		</div>
		<hr>
		<div class="row">
				<div class="col-3">
						<div class="card" style="width: 100%;">
								<img class="card-img-top" src="{{ asset('images') }}/lms/kelas/kelas.jpg" alt="Card image cap">
								<div class="card-body">
										<h5 class="card-title">Mobile Technology | 4TI-P1</h5>
										<p class="card-text">Sulyono, S.kom, M.T.I</p>
										<a href="#" class="btn btn-primary btn-block mt-3">Masuk</a>
								</div>
						</div>
				</div>
		</div>
@endsection
