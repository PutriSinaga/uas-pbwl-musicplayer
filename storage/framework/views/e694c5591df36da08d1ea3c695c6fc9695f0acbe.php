
<?php $__env->startSection('content'); ?>
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
<form method="post" action="<?php echo e(url('/artis')); ?>">
	<?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas final\resources\views/artis/add.blade.php ENDPATH**/ ?>