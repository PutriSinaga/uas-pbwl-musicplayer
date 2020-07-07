@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>
<div class="container">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Album<a id="tbh" href="{{ url('album/create') }}">+</a></h3>
	<table  class="table table-hover ">
		<tr class="table-primary">
			<th>ID</th>
			<th>NAMA ALBUM</th>
			<th>NAMA ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->nama_album }}</td>
			<td>{{ $row->artis->nama_artis }}</td>
			<td><a id="btn" href="{{ url('album/'.$row->album_id.'/edit') }}" class="btn btn-outline-dark">Edit</a></td>
			<td><form action="{{ url('/album/'.$row->album_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn" class="btn btn-outline-dark">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection