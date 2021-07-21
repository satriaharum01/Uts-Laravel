<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			color: salmon;
			font-family: 'Capriola', sans-serif;
			font-size: 35px;
			
		}

		table th {
			color: dimgray;
			font-family: 'Handlee', cursive;
		}

		table {
			margin-top: 10px;
			text-align: center;
		}

		body {
			font-family:'Handlee', cursive; 
		}
	</style>
</head>

<body>
	<div class="container">
	<h2>Data Played</h2>
	<a  href="<?php echo e(url('played/create')); ?>" class="btn btn-success bg-succes">+ Tambah Data</a>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#D7BDE2">
			<th scope="col">NO</th>
			<th scope="col">JUDUL</th>
			<th scope="col">Track</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr style="background-color: #fFF5EE; color: indianred">
			<td><?php echo e($row->play_id); ?></td>
			<td><?php echo e($row->track->album->artist->artist_name); ?> - <?php echo e($row->track->track_name); ?></td>
			<td>
				<audio controls><source src="<?php echo e(url('public/uploads/track/'. $row->track->track_name)); ?>" type="audio/mpeg" ></audio>
			</td>
			<td>
				<a href="<?php echo e(url('played/' . $row->play_id . '/edit')); ?>" class="btn btn-warning">Edit</a>
				
				<form action="<?php echo e(url('played/' . $row->played)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uts\resources\views/played/index.blade.php ENDPATH**/ ?>