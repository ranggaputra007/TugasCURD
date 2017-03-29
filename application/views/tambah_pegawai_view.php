<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Title</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url('pegawai') ?>">Biodata Pegawai</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open('pegawai/create'); ?>
								<legend>Tambah Data Pegawai</legend>
								<?php echo validation_errors(); ?>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Input field" >

									<label for="">nip</label>
									<input type="text" class="form-control" id="nip" name="nip" placeholder="Input field" >

									<label for="">tanggal lahir</label>
									 
        								<input class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="YYYY/MM/DD" type="text"/>
              

									<label for="">alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input field" >

								</div>
							
								
							
								<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap-datepicker3.css"/>

        <script>
	$(document).ready(function(){
		var date_input=$('input[name="tanggalLahir"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
	</body>
</html>