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
	<h2>Input Data Artist</h2>
			<form method="post" action="<?php echo e(url('/artist')); ?>">
			<?php echo csrf_field(); ?>
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Nama Artist</label>:
					<div class="col-sm-5">
							<input type="text" name="artist_name" class=" form-control" id="inputEmail3"style="color: white; background-color: salmon">
					</div>
					</div>
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: #D7BDE2 " >Save</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uts\resources\views/artist/add.blade.php ENDPATH**/ ?>