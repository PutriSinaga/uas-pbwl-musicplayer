@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Track</h3>
<form method="post" action="{{ url('/track') }}" enctype="multipart/form-data">
	@csrf
	<table>
		<tr class="table-primary">
			<th>JUDUL</th>
			<td><input type="text" name="nama_track"></td>
		</tr>
		<tr class="table-primary">
			<th>ALBUM & ARTIS</th>
			<td>
				<select name="album_id">
					@foreach($lst as $row)
					<option value="{{ $row->album_id }}">{{ $row->nama_album }} - {{ $row->artis->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr class="table-primary">
			<th>FILE</th>
			<td><input type="file" name="file"></td>
		</tr>
		<tr class="table-primary">
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN" class="btn  btn-outline-dark"></td>
		</tr> 
	</table>
</form>
</div>
@endsection