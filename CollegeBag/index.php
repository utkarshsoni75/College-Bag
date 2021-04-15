
<?php
	session_start();
	include("connect_db.php");
	if(isset($_POST['submit_admin'])){
		$uname=$_POST['username'];
			$password=$_POST['password'];
			if($uname=="" || $password==""){
				echo "<script>alert('Enter the username and password')</script>";
			}
		else{
			$query="Select * from admin where username ='$uname' && password='$password';";
			$result=mysqli_query($sqli,$query);
			if(mysqli_affected_rows($sqli)>0){
				$_SESSION["key"]=$uname;
				header("Location:adminpage.php");
			}
		}
}
?>
<!DOCTYPE html>
	<head>
		<title >
			College Bag
		</title>
	</head>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>

<body>
	<!-- Navbar design HTML code  -->
		<?php 
			include("Navbar.php");

		 ?>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
	<div class="carousel-inner">
		<div class="carousel-item active">
		<img src="images/asd.jpg" class="d-block w-100" alt="..." height="500">
		</div>
		<div class="carousel-item">
		<img src="images/front1.jpg" class="d-block w-100" alt="..." height="500">
		</div>
		<div class="carousel-item">
		<img src="images/slide1.jpg" class="d-block w-100" alt="..." height="500">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
<style>

span {
  display: inline-block;
}

.blink {
  animation: blink 1s steps(1, end) infinite;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

p.ex1 {
  border: 1px ; 
  padding-top: 25px;
}
</style>
    <body>
	<div  class="p-0" style="width:60vh;margin-left:60vh;">
		<p class="ex1"></p>
			<h4  style="text-align: center;font-family:courier,arial,helvetica;"> Explore</h4>
		<script async src= "https://cse.google.com/cse.js?cx=10dbf2e9b426d4a30">
		</script>
		<div class="gcse-search" ></div>
		</div>
	<br/><br/>

    </body>
	<!-- Body1 design HTML code    -->
	<div class="container mt-2 mb-5" style="height: 60vh">
		<div class="row m-5 pt-5">
			<div class="col-md-12">
				
				<table  cellspacing="20" cellpadding="40" width="100%">
					<tr>
						<th>
							<h5 class="mb-5"> All you need to ACE the exams and be the highflier </h5>
						</th>
<body>
<style>
div2 {
  width: 10000px;
  height: 10px;
  background-color: Violet;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: 1000;
}

@keyframes example {
  0%   {background-color: Gray;}
  25%  {background-color: Tomato;}
  50%  {background-color: DodgerBlue;}
  100% {background-color: MediumSeaGreen;}
}
</style>
</head>
<body>
<div2></div2>
</body>
					</tr>


					<tr>
						<table   cellpadding="5" width="100%">
							<tr>
								<th width="100">
								<a href="Notes.php">Notes</a>	
								</th>
								<th width="100">
								<a href="Videos.php"> Video Lectures </a>	
								</th>
								<th width="50">
								<a href="ExamPaper.php">Exam paper</a>
								</th>
							</tr>
							<tr>
								<td width="100">
									Find the notes.
								</td>
								<td width="100">
									Video lecture links to help you get the indepth knowledge of subject.
								</td>
								<td width="50">
									Find the previous year papers.
								</td>
							</tr>
							</table>
					</tr>
					
				</table>
			</div>
			<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
			
		</div>
	</div>
	<!-- End of body1    -->

	<!-- FOOTER  -->

	<?php  
		include("Footer.php");
	?>

	




	<!-- End of footer --> 
</body>

<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script type="text/javascript">
	
</script>
<html>

