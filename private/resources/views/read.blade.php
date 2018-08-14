@extends('template/t_index')
@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-3">
			@if(Session::has('message'))
				<p class="alert alert-success"><i class="fa fa-check"></i>{{ Session::get('message') }}</p>
			@endif
		</div>

		<div class="col-md-9">
		
			<button type="button" class="btn btn-default" onclick="window.location='{{ url("/") }}'">
				<i class="fa fa-plus"></i> Tambah
			</button>
			<button type="button" class="btn btn-default" onclick="window.location='{{ url("/") }}'">
				<i class="fa fa-plus"></i> Kembali
			</button>
			<br>&nbsp

			<p></p>
			
			<div class="table-responsive">
				<table border="1" class="table table-bordered" width="100%">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Kelas</th>
						<th>No. HP</th>
						<th>Email</th>
						<th>Action</th>
					</tr>

					<?php $no=1; ?>
					
					@foreach ($siswa as $data)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $data->nama }}</td>
						<td>{{ $data->alamat }}</td>
						<td>{{ $data->kelas }}</td>
						<td>{{ $data->no_hp }}</td>
						<td>{{ $data->email }}</td>
						<td><a href="delete/{{ $data->id }}">Hapus</a>
						 || <a href="edit/{{ $data->id }}">Edit</a></td>
					</tr>
					@endforeach		
				</table>
			</div>
		</div>
	</div>

@stop