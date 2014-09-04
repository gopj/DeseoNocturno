<?php // $user = $this->session->userdata('user'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
	<title>Deseo Nocturno</title>

	<?php echo link_tag( 'css/bootstrap.css' ) ?>
	<?php echo link_tag( 'css/style.css' ) ?>

	<script src="<?=base_url('js/jquery-1.11.1.js')?>"> </script>
	<script src="<?=base_url('js/bootstrap.js')?>"> </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">Deseo Nocturno</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-inverse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Conocenos</a></li>
				
			</ul>
		
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-inverse">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>



<div class="container-dn">
	<?php echo $output; ?>
</div>
</body>
</html>