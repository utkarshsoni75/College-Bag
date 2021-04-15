<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<style>
mark { 
  background-color: green;
  color: black;
}
</style>
<body>
	<?php
		include("Navbar.php");
	?>
	<div class="row p-4" style="width: 100%;height: auto;">
		<div class="col-md-4">
		<div class="card p-5">
			<div class="card-img-top">
				<img src="picture/dev.png" width="100" height="100">
			</div>
			<h5 class="card-text"><marquee behavior="scroll" direction="left">Ashish Kaushal</marquee></h5>
			<br/>
			<p>Computer Science Engineering</p>
			<p>Indian Institute of Information Technology Bhopal</p>
			
		</div>
		</div>
		<div class="col-md-4">
		<div class="card p-5">
			<div class="card-img-top">
				<img src="picture/dev.png" width="100" height="100">
			</div>
			<h5 class="card-text"><marquee behavior="scroll" direction="left">Utkarsh Soni</marquee></h5>
			<p>Computer Science Engineering</p>
			<p>Indian Institute of Information Technology Bhopal</p>
			
		</div>
		</div>
		<div class="col-md-4">
		<div class="card p-5">
			<div class="card-img-top">
				<img src="picture/admission.png" width="100" height="100">
			</div>
			<h5 class="card-text"><marquee behavior="scroll" direction="left">Amandeep Singh</marquee></h5>
			<p>Computer Science Engineering</p>
			<p>Indian Institute of Information Technology Bhopal</p>
		</div>
		</div>
		<div class="col-md-4">
		<div class="card p-5">
			<div class="card-img-top">
				<img src="picture/dev.png" width="100" height="100">
			</div>
			<h5 class="card-text"><marquee behavior="scroll" direction="left">Archit Sahu</marquee></h5>
			<p>Computer Science Engineering</p>
			<p>Indian Institute of Information Technology Bhopal</p>
		</div>
		</div>
	</div>

	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>