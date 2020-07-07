
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Album</h3>
<form method="post" action="<?php echo e(url('/album')); ?>"enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album"></td>
		</tr>
		<tr>
			<th>NAMA ARTIS</th>
			<td>
				<select name="artis_id">
					<?php $__currentLoopData = $lst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->artis_id); ?>"><?php echo e($row->nama_artis); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webquiz1\resources\views/Album/add.blade.php ENDPATH**/ ?>