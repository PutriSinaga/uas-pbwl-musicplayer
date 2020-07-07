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
<h3>Edit Data Album</h3>
<form method="post" action="{{ url('/album/'.$row->artis_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr  class="table-primary">
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album" value="{{ $row->nama_album }}"></td>
		</tr>
		<tr  class="table-primary">
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artis_id }}" >{{ $rows->nama_artis }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr  class="table-primary">
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE" class="btn  btn-outline-dark"></td>
		</tr> 
	</table>
</form>
</div>
</body>
@endsection