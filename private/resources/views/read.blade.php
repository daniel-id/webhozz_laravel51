@extends('template/t_index')
@section('content')

<div class="container">
	
	@if(Session::has('message'))
		<span class="label label-success">{{ Session::get('message') }}</span>
	@endif
	
	<p></p>
	
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kelas</th>
				<th>Action</th>
			</tr>

			<?php $no=1; ?>
			
			@foreach ($siswa as $data)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->nama }}</td>
				<td>{{ $data->alamat}}</td>
				<td>{{ $data->kelas}}</td>
				<td><a href="delete/{{ $data->id }}">Hapus</a>
				 || <a href="edit/{{ $data->id }}">Edit</a></td>
			</tr>
			@endforeach		
		</table>
	</div>
</div>

@stop