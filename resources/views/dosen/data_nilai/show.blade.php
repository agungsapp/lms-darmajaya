@extends('dosen.layouts.main')
@section('content')
		<div class="row">
				<div class="card w-100">
						<div class="card-body table-responsive">
								<h3>Data evaluasi dalam modul <strong>{{ $mk->name }}</strong></h3>
								<div class="table-responsive">
										<table class="table-hover table">
												<thead>
														<tr>
																<th>No.</th>
																<th>Nama Evaluasi</th>
																<th>Aksi</th>
														</tr>
												</thead>
												<tbody>
														@foreach ($evals as $e)
																<tr>
																		<td>{{ $loop->iteration }}</td>
																		<td>{{ $e->name }}</td>
																		<td>

																				@if ($e->evaluasistudent->count() > 0)
																						<a href="{{ route('dosen.nilai.show.nilai', $e->id) }}" class="btn btn-success">lihat data nilai</a>
																				@else
																						<button class="btn btn-danger" disabled>tidak ada data</button>
																				@endif

																		</td>
																</tr>
														@endforeach
												</tbody>
										</table>
								</div>
						</div>
				</div>
		</div>
@endsection
