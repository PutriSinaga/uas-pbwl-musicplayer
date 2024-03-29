@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artis') }}">
	@csrf
	<h3>Daftar Artis<a id="tbh" href="{{ url('artis/create') }}">+</a></h3>
		<table  class="table table-hover ">
		<tr class="table-primary">
			<th>ID</th>
			<th>NAMA ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->artis_id }}</td>
			<td>{{ $row->nama_artis }}</td>
			<td><a id="btn"  href="{{ url('artis/'.$row->artis_id.'/edit') }}" class="btn btn-outline-dark">Edit</a></td>
			<td><form action="{{ url('/artis/'.$row->artis_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn" class="btn btn-outline-dark">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection