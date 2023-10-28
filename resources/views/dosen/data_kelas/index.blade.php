@extends('dosen.layouts.main')
@section('content')
		<div class="row">
				<div class="col-md-12 grid-margin">
						<div class="row">
								<div class="col-12 col-xl-8 mb-xl-0 mb-4">
										<h3 class="font-weight-bold">Data Kelas</h3>
										<h6 class="font-weight-normal mb-0">
												daftar data seluruh data kelas yang anda miliki.
										</h6>
								</div>
						</div>
				</div>
		</div>
		<div class="row mb-3">
				<div class="card w-100">
						<div class="card-body p-4">
								<form class="row">
										@csrf
										<div class="col-6">
												<div class="form-group">
														<label for="kode">Kode : </label>
														<input type="text" class="form-control" id="kode" name="kode" readonly>
												</div>
												<div class="form-group">
														<label for="dosen">Dosen pengajar : </label>
														<input type="text" class="form-control" id="dosen" name="dosen" readonly>
												</div>
												<div class="form-group">
														<label for="nama">Nama Mata Kuliah : </label>
														<input type="text" class="form-control" id="nama" name="nama">
												</div>
										</div>
										<div class="col-6">
												<div class="form-group">
														<label for="kelas">Hari :</label>
														<select class="custom-select" name="kelas">
																<option selected value="">-- pilih kelas --</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
														</select>
												</div>
												<div class="form-group">
														<label for="hari">Hari :</label>
														<select class="custom-select" name="hari">
																<option selected value="">-- pilih hari --</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
														</select>
												</div>

												<div class="form-group">
														<label for="jam">Jam :</label>
														<select class="custom-select" name="jam">
																<option selected value="">-- pilih jam --</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
														</select>
												</div>
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
														<th>User</th>
														<th>Product</th>
														<th>Sale</th>
														<th>Status</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Jacob</td>
														<td>Photoshop</td>
														<td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
														<td><label class="badge badge-danger">Pending</label></td>
												</tr>
										</tbody>
								</table>
						</div>
				</div>
		</div>
@endsection
