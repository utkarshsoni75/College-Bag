<?php
		
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>
	<?php
		include("Navbar.php");
	?>
	<div class="row" style="height: 100vh;width: 100%">

		<div class="container mt-4">
			<h3>previous year papers</h3>
			<?php
				$sub_id = $_GET['sub_id'];
                include("connect_db.php");
                $query="select * from paper where sub_id=".$sub_id;
                $result=mysqli_query($sqli,$query);
				if(mysqli_num_rows($result)>0){
				while($rows=mysqli_fetch_array($result)){

			
			?>
			<div class="col-md-12">
				<div class="card mt-4 p-2">
                    <?php echo ('<center> <a href= '.$rows['link'].'  > '.$rows['text'].' </a></center>') ?>
                    
					
				</div>
			</div>
			<?php
			}
			}

			?>
		</div>
	</div>
	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>