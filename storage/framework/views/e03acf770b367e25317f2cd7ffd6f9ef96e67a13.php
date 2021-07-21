<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: salmon;
			font-family: 'Capriola', sans-serif;
			font-size: 30px;
		}
		
		.btn {
			color: dimgray;
		}

		label {
			font-family: 'Handlee', cursive; 
			color: dimgray;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">

	<h2>Edit Data Played</h2>
	<form action="<?php echo e(url('/played/' . $rows->play_id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Track</label>:
		<div class="col-sm-5">
			<select name="track_id" class="form-control" style="background-color: salmon; color: white">
				<?php $__currentLoopData = $track; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($row->track_id); ?>"
				<?php if($row->track_id ==$rows->track_id): ?>
				selected
				<?php endif; ?>
				><?php echo e($row->track_name); ?> - <?php echo e($row->album->artist->artist_name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		<!-- 
		<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Album</label>:
		<div class="col-sm-5">
			<input type="text" name="album_id" disable="yes" value="">
		</div>
		<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Artist</label>:
		<div class="col-sm-5">
			<input type="text" name="artist_id" disable="yes" value="">
		</div>
		-->
		</div>

	</table>
			<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="Update" class="btn" style="background-color: #D7BDE2">
			<div>
			</div>
	</form>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uts\resources\views/played/edit.blade.php ENDPATH**/ ?>