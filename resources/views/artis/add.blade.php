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
<h3>Tambah Data Artis</h3>
<form method="post" action="{{ url('/artis') }}">
	@csrf
	<table>
		<tr  class="table-primary">
			<th>NAMA ARTIS</th>
			<td><input type="text" name="nama_artis"></td>
		</tr>
		<tr  class="table-primary">
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN" class="btn  btn-outline-dark"></td>
		</tr> 
	</table>
</form>
</div>
</body>
@endsection