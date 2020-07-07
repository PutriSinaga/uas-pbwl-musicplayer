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
<h3>Tambah Data Album</h3>
<form method="post" action="{{ url('/album') }}"enctype="multipart/form-data">
	@csrf
	<table>
		<tr  class="table-primary">
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album" ></td>
		</tr>
		<tr  class="table-primary">
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id" >
					@foreach($lst as $row)
					<option value="{{ $row->artis_id }}">{{ $row->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr  class="table-primary">
			<td></td>
			<td><input id="btn" type="submit" value="SIMPAN" class="btn  btn-outline-dark"></td>
		</tr> 
	</table>
</form>
</div>
</body>
@endsection