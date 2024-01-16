@extends('student.layouts.main')
@section('content')
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">Welcome {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h3>
										<h6 class="font-weight-normal mb-0">
												Mulai Belajar
												<span class="text-primary"></span>
										</h6>
								</div>
						</div>
				</div>
		</div>
		<div class="row">
				<div class="col-12 col-lg-6 grid-margin stretch-card">
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
				<div class="col-lg-6 d-none d-lg-block grid-margin transparent">
						<div class="row">
								<div class="col-md-6 stretch-card transparent mb-4">
										<div class="card card-tale">
												<div class="card-body">
														<p class="mb-4">Kelas Anda</p>
														<p class="fs-30 mb-2">2</p>
														{{-- <p>10.00% (30 days)</p> --}}
												</div>
										</div>
								</div>
								<div class="col-md-6 stretch-card transparent mb-4">
										<div class="card card-dark-blue">
												<div class="card-body">
														<p class="mb-4">Total Bookings</p>
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
														<p class="mb-4">Number of Meetings</p>
														<p class="fs-30 mb-2">34040</p>
														<p>2.00% (30 days)</p>
												</div>
										</div>
								</div>
								<div class="col-md-6 stretch-card transparent">
										<div class="card card-light-danger">
												<div class="card-body">
														<p class="mb-4">Number of Clients</p>
														<p class="fs-30 mb-2">47033</p>
														<p>0.22% (30 days)</p>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>


		{{-- search --}}
		<div class="row">
				<div class="col-12">
						<form action="{{ route('student.dashboard.index') }}" method="GET">

								<div class="input-group mb-3">
										<input type="text" class="form-control" name="keyword" placeholder="Cari modul ..."
												aria-label="Cari modul ..." aria-describedby="button-addon2">
										<div class="input-group-append">
												<button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
										</div>
								</div>
						</form>
				</div>
		</div>


		{{-- list modul --}}
		<div class="row">

				@if (empty($mks))
						<div class="col-12 p-4">
								<h5 class="text-secondary">Mohon maaf data modul belum tersedia saat ini.</h5>
						</div>
				@else
						{{-- loop area --}}
						@php
								$cat = ['computer', 'book', 'database', 'board', 'coding', 'cloud'];
						@endphp
						@foreach ($mks as $mk)
								<div class="col-6 col-lg-3">
										{{-- <div class="card mt-3 overflow-hidden shadow">
										<img src="https://source.unsplash.com/1000x600?{{ $cat[$i] }}" alt="" srcset="">
										<div class="card-body bg-transparent" style="min-height: 100px;">
												<h6 class="card-title">Pemrogramman dasar</h6>
												<p class="m-0">Dosen :</p>
												<p class="m-0">Sulyono S.kom</p>
												<a href="#" class="btn btn-sm btn-block btn-primary">Go somewhere</a>
										</div>
								</div> --}}
										<div class="card mt-3 shadow">
												<img src="https://source.unsplash.com/1000x600?{{ $cat[$loop->iteration - 1] }}" class="rounded"
														alt="" srcset="">
												<div class="d-flex flex-column justify-content-between p-2" style="min-height: 130px;">
														<div>
																<div class="d-flex justify-content-between">
																		<h6 class="">{{ $mk->name }}</h6>
																		<i class="ti-bookmark"></i>
																</div>
																<p class="m-0">Dosen :</p>
																<p class="m-0">{{ $mk->dosen->first_name . ' ' . $mk->dosen->last_name }}</p>
														</div>
														<a href="{{ route('student.kelas.show', $mk->kode_mk) }}" class="btn btn-sm btn-block btn-primary">Buka
																modul</a>
												</div>
										</div>
								</div>
						@endforeach
				@endif

		</div>
@endsection
