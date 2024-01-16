@extends('student.layouts.main')
@section('content')
		<div class="container">
				<div class="row">
						<div class="col-12">
								<img src="https://source.unsplash.com/1000x600?computer" class="img-fluid w-100 rounded-lg" alt=""
										srcset="">
						</div>
						<div class="col-12">
								<div class="mt-5 p-2">
										<div class="d-flex justify-content-between">
												<h4>{{ $mk->name }}</h4>
												<i class="far fa-bookmark text-primary"></i>
												{{-- <i class="fa-solid fa-bookmark text-primary"></i> --}}
										</div>
										<p>Author : {{ $mk->dosen->first_name . ' ' . $mk->dosen->last_name }}</p>

										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque deserunt aut iusto inventore, cupiditate
												repellendus libero ad veritatis esse quas. Obcaecati praesentium doloremque, ducimus nisi tenetur alias ipsa
												libero reprehenderit?</p>
								</div>
						</div>
				</div>

				{{-- accordionya belum selesai --}}


				{{-- section modul --}}
				<div class="row mt-5">
						<div class="col-12">

								@if ($mk->modul->count() > 0)
										{{-- jika modul ada --}}
										<div class="accordion" id="submodul">
												{{-- for loop materi --}}
												@foreach ($mk->modul as $m)
														<div class="card">
																<div class="card-header" id="heading{{ $m->id }}">
																		<h2 class="mb-0">
																				<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
																						data-target="#collapse{{ $m->id }}" aria-expanded="true"
																						aria-controls="collapse{{ $m->id }}">
																						{{ $m->judul }}
																				</button>
																		</h2>
																</div>

																<div id="collapse{{ $m->id }}" class="collapse" aria-labelledby="heading{{ $m->id }}"
																		data-parent="#submodul">
																		<div class="card-body">
																				<div>
																						{!! $m->materi !!}
																				</div>
																		</div>
																</div>
														</div>
												@endforeach

												{{-- end loop materi --}}

												@if ($mk->evaluasi->count() > 0)
														{{-- loop for evaluasi --}}
														@foreach ($mk->evaluasi->where('status', 1) as $e)
																<div class="card">
																		<div class="card-header" id="heading{{ $e->id }}">
																				<h2 class="mb-0">
																						<button class="btn btn-link btn-block collapsed text-left" type="button" data-toggle="collapse"
																								data-target="#collapse{{ $e->id }}" aria-expanded="false"
																								aria-controls="collapse{{ $e->id }}">
																								{{ $e->name }}
																						</button>
																				</h2>
																		</div>
																		<div id="collapse{{ $e->id }}" class="collapse" aria-labelledby="heading{{ $e->id }}"
																				data-parent="#submodul">
																				<div class="card-body px-5">
																						<div>
																								{!! $e->deskripsi !!}
																						</div>
																						<div class="mt-3">
																								<p>Durasi : {{ $e->durasi }}Menit</p>
																								<a href="#" class="btn btn-primary">Lihat Evaluasi</a>
																						</div>
																				</div>
																		</div>
																</div>
														@endforeach
														{{-- loop for evaluasi end --}}
												@endif
										</div>
								@else
										{{-- jika modul tidak ada --}}
										<div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
												<h4 class="text-center">Mohon maaf kelas ini belum memiliki modul.</h4>
												<img src="{{ asset('images/vector/sorry.svg') }}" class="w-50" alt="sorry" srcset="">
										</div>
								@endif
						</div>
				</div>
		</div>
@endsection
