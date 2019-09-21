<?php include "config.php"; ?>
<?php require_auth();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Server Control System</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="toshiba20.ahmed@gmail.com">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="scripts.js"></script>
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="mytitle">
					<h3 class="text-center">
						Server control system
					</h3>
				</div>	
			</div>
							
		</div>	
		<div class="row">
			<div class="col-md-12">

				<div class="row">



				</div>
				<div class="jumbotron">
					<h2>
						Current server infotmation:
					</h2>
					<script>
						getDroplet();
					</script>
					<div class="mydiv" id="myDiv"></div>
					<div calss="row">
						
							<a class="btn btn-success btn-large" id="start" href="#">Start</a>
						
						
							<a class="btn btn-danger btn-large" id="dsetroy" href="#">Destroy</a>
						
						
							<a class="btn btn-primary btn-large" id="recheck" href="#">Recheck</a>
							<a class="btn btn-info btn-large" id="rerun" href="#">Rerun</a>

					</div>

				</div>
				<h3 class="text-left">
						Latest server Output:
					</h3>
				<code id="mycode">
					<?php include 'code.php'; ?>

				</code>			
			</div>
		</div>
	</div>

</body>

</html>