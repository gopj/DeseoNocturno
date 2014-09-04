<?php // $user = $this->session->userdata('user'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
	<title>Deseo Nocturno</title>

	<?php echo link_tag( 'css/bootstrap.min.css' ) ?>
	<?php echo link_tag( 'css/jquery.dataTables.min.css' ) ?>
	<?php echo link_tag( 'css/style.css' ) ?>

	<script src="<?=base_url('js/jquery-1.11.1.js')?>"> </script>
	<script src="<?=base_url('js/bootstrap.min.js')?>"> </script>
	<script src="<?=base_url('js/jquery.dataTables.js')?>"> </script>

	
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
				<li><a href="#">Login</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<ul class="nav nav-pills nav-stacked" style="width: 260px;">
	<?php if ($this->uri->segment(2) == "") { ?>
		<li class="active">
	<?php } else { ?>
		<li class="inactive">
	<?php } ?>
			<a href="<?= base_url() . 'admin'; ?>">
				<span class="badge pull-right"></span>
				Admin Home
			</a>
		</li>
	<?php if ($this->uri->segment(2) == "sites") { ?>
		<li class="active">
	<?php } else { ?>
		<li class="inactive">
	<?php } ?>
			<a href="<?= base_url() . 'admin/sites'; ?>">
				<span class="badge pull-right"></span>
				Sites
			</a>
		</li>
</ul>



<div class="container-dna">
	<?php echo $output; ?>
</div>
</body>
</html>