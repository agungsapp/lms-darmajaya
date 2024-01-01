@extends('admin.layouts.main')
@section('content')
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">Welcome Admin</h3>
										<h6 class="font-weight-normal mb-0">
												All systems are running smoothly! You have
										</h6>
								</div>
						</div>
				</div>
		</div>

		<div class="row">
				<div class="col-md-6 grid-margin stretch-card">
						<div class="card tale-bg">
								<div class="card-people mt-auto">
										<img src="{{ asset('images') }}/dashboard/people.svg" alt="people">
										<div class="weather-info">
												<div class="d-flex">
														<div>
																<h2 class="font-weight-normal mb-0">
																		<i class="icon-sun mr-2"></i>31<sup>C</sup>
																</h2>
														</div>
														<div class="ml-2">
																<h4 class="location font-weight-normal">Darmajaya</h4>
																<h6 class="font-weight-normal">Bandar Lampung</h6>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				{{-- section info --}}
				<div class="col-md-6 grid-margin transparent">
						<div class="row">
								<div class="col-md-6 stretch-card transparent mb-4">
										<div class="card card-tale">
												<div class="card-body">
														<p class="mb-4">Jumlah Data Seluruh Kelas</p>
														<p class="fs-30 mb-2">2</p>
														{{-- <p>10.00% (30 days)</p> --}}
												</div>
										</div>
								</div>
								<div class="col-md-6 stretch-card transparent mb-4">
										<div class="card card-dark-blue">
												<div class="card-body">
														<p class="mb-4">Total Dosen</p>
														<p class="fs-30 mb-2">61344</p>
														<p>22.00% (30 days)</p>
												</div>
										</div>
								</div>
						</div>
						<div class="row">
								<div class="col-md-6 mb-lg-0 stretch-card transparent mb-4">
										<div class="card card-light-blue">
												<div class="card-body">
														<p class="mb-4">Jumlah Mahasiswa</p>
														<p class="fs-30 mb-2">34040</p>
														<p>2.00% (30 days)</p>
												</div>
										</div>
								</div>
								<div class="col-md-6 stretch-card transparent">
										<div class="card card-light-danger">
												<div class="card-body">
														<p class="mb-4">Jumlah Mahasiswa Aktif</p>
														<p class="fs-30 mb-2">47033</p>
														<p>0.22% (30 days)</p>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
