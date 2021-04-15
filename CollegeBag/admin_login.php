<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>

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
				
				$_SESSION['admin_valid'] = true;
				$_SESSION['admin_timeout'] = time();
				$_SESSION['admin_username'] = $uname;;
				$_SESSION["admin_key"]=$uname;
				$_SESSION['admin_id'] = $rows['user_id'];
				
				
				header("refresh: 0");
				
			}
		}
}
if(isset($_POST['logout_admin'])){
	unset($_SESSION["admin_username"]);
	unset($_SESSION["admin_key"]);
	$_SESSION['admin_valid'] = false;
	
	
	header('Refresh: 0; URL = index.php');

}
if(isset($_SESSION['admin_valid']) && $_SESSION['admin_valid'] && !empty($_SESSION['admin_username'])){?>


<body>
	<?php
		include("Navbar.php");
	?>
	<form  class="form-group mr-5" method="POST" style="float:right;">
        <button  type="submit" name="logout_admin" class="btn btn-primary mt-5 ">Logout</button>
    </form>
    <br/><br/><br/>
	
	<div class="container mt-4" >
			<div class="row">
				<div class="col-md-4">
					<h6>Add Notes</h6>
					<div class="bg-light">
						<form method="post" class="table-responsive p-3" enctype="multipart/form-data">
							<label for="Subjects">Choose a Subject:</label>
							<select name="Subjects" class="mt-2  form-control" id="sub">
								<option value="1">Operating Systems</option>
								<option value="2">Computer Networks</option>
								<option value="3">Discrete Structure</option>
								<option value="4">Digital Logic and Design</option>
								<option value="5">Design and Analysis of Algorithm</option>
								<option value="6">Principles of Programming Language - C++</option>
								<option value="7">Engineering Mathematics III</option>
								<option value="8">Network Analysis</option>
								<option value="9">Electronic Devices and Circuits</option>
								<option value="10">Signals and Systems</option>
							</select>
							<input type="text" class="form-control mt-2" name="title" placeholder="Add title">
							
							<input type="file" class="mt-4 form-control" name="file1" required="" required="">
							<input type="submit" name="upload_notes" class="mt-4 btn btn-success" value="Upload">
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<h6>Add Video link</h6>
					<div class="bg-light">
						<form method="post" class="table-responsive p-3">

							
							<label for="Subjects">Choose a suject:</label>
							<select name="Subjects " class="mt-2  form-control" id="sub">
							<option value="1">Operating Systems</option>
								<option value="2">Computer Networks</option>
								<option value="3">Discrete Structure</option>
								<option value="4">Digital Logic and Design</option>
								<option value="5">Design and Analysis of Algorithm</option>
								<option value="6">Principles of Programming Language - C++</option>
								<option value="7">Engineering Mathematics III</option>
								<option value="8">Network Analysis</option>
								<option value="9">Electronic Devices and Circuits</option>
								<option value="10">Signals and Systems</option>
							</select>
							<textarea name="link" class="mt-4 form-control" placeholder="Video Link"></textarea>
							<input type="text" class="form-control mt-2" name="title" placeholder="Add title">

							<input type="submit" name="submit_video" class="mt-4 btn btn-success" name="post_button" value="Add">
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<h6>Add Previous year papers</h6>
					<div class="bg-light">
						<form method="post" class="embed-responsive p-3" enctype="multipart/form-data">
							<label  for="Subjects">Choose a Subject:</label>
							<select class="mt-2  form-control" name="Subjects " id="sub">
							<option value="1">Operating Systems</option>
								<option value="2">Computer Networks</option>
								<option value="3">Discrete Structure</option>
								<option value="4">Digital Logic and Design</option>
								<option value="5">Design and Analysis of Algorithm</option>
								<option value="6">Principles of Programming Language - C++</option>
								<option value="7">Engineering Mathematics III</option>
								<option value="8">Network Analysis</option>
								<option value="9">Electronic Devices and Circuits</option>
								<option value="10">Signals and Systems</option>
							</select>
							<input type="text" class="form-control mt-2" name="title" placeholder="Add title">
							
							<input type="file" class="mt-4 form-control" name="file2" required="" required="">
							<input type="submit" name="upload_paper" class="mt-4 btn btn-success" value="Upload">
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<h6>Attendance</h6>
					<div class="bg-light">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeWcsnqsgtlQHf9xYMhixaGKqU8z9rG-z3zwxbRP63HWkOxfQ/viewform?embedded=true" width="340" height="749" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h2 class="ml-5"> Assingments: </h2>
	<div class="container mt-5" style="height: 100vh">

	<table class="table">
                        <thead class="thead-dark">
                            <tr>
                            
							<th scope="col">Student ID</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Assingment Number</th>
                            <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                                
                                include("connect_db.php");
                                $query="select * from assingment ";
                                $result=mysqli_query($sqli,$query);
                                if(mysqli_num_rows($result)>0){
                                while($rows=mysqli_fetch_array($result)){


                                ?>
                                
                                    
                                    
                                    
                                    <tr>
										
                                        <th scope="row"><?php echo "18U020".$rows['user_id'] ?></th>
                                        <td><?php echo "".$rows['sub_name'] ?></td>
                                        <td><?php echo "".$rows['assgn_number'] ?></td>
                                        <td><?php echo ('<center> <a href= '.$rows['link'].'  >'.$rows['link'].'  </a></center>') ?></td>
                                        
                                        
                                    </tr>
                                <?php
                }
                }

                ?>
                        
                            

                            
                        </tbody>
                        </table>
	</div>



	

</body>

</html>
<?php
}

else{


?>




<!DOCTYPE html>
	<head>
		<title>
			CollegeBag
		</title>
	</head>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>

<body>
	<!-- Navbar design HTML code  -->
		<?php 
			include("Navbar.php");

		 ?>


	<!-- Body1 design HTML code    -->
	<div class="container mt-5 mb-5 w-25" style="height: 100vh">
		<div class="row m-5 pt-5">
			
			
			<div class="col-md-12 ">
				<div class="container bg-light p-2  mt-1">
					<div class="card-primary mt-3">
						<div class="card-title">
							<center><h5>Admin </h5></center>
						</div>
						<hr/>
						<div class="card-body">
							<form onsubmit="return valid()" class="form-group" method="POST">
								<input type="text" name="username" class="form-control" placeholder="Login ID" />
								<input type="text" name="password" class="form-control mt-4" placeholder="Password" />
							 	<button type="submit" name="submit_admin" class="btn btn-primary mt-5 form-control">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of body1    -->

	<!-- FOOTER  -->

	

	




	<!-- End of footer --> 
</body>

<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script type="text/javascript">
	
</script>
<html>

<?php

}

include("Footer.php");




?>



<?php
		
		

		if(isset($_POST['submit_video'])){
			include("connect_db.php");

			$Subjects=$_POST['Subjects'];
			$link=$_POST['link'];
			$title=$_POST['title'];

			if($link!="" || $title!=""){
				$query="Insert into video(sub_id,link,text) value('$Subjects','$link','$title');";
				$result=mysqli_query($sqli,$query);
				if(mysqli_affected_rows($sqli)>0){
					echo "<script> alert('Done') </script>";
				}
			}
			else{
				echo "<script> alert('Fill all blocks') </script>";
			}
		}
		
		if (isset($_POST['upload_notes'])) {
			include("connect_db.php");
			$uploadOk=0;
			$Subjects=$_POST['Subjects'];
			
			$title=$_POST['title'];

			if ( !isset($_FILES['file1']) || ($_FILES['file1']['error'] == UPLOAD_ERR_NO_FILE)) {
				
				echo "<script>alert('Please choose a file')</script>";
				$uploadOk=-1;
				
			}
				else{
				$fname1=$_FILES['file1']['name'];
				$tmp=$_FILES['file1']['tmp_name'];
				$type=$_FILES["file1"]["type"];
				$size=$_FILES["file1"]["size"];
				$modal="notes/$fname1";
				
				if($type != "application/pdf"  ) {
					echo "<script>alert('Sorry, only PDF files are allowed.')</script>";
					
					$uploadOk = 0;
				}else{

				if ($size>800000) {
					echo "<script>alert('file size error')</script>";
					
					$uploadOk=0;
					
				}
				else{
					$x=move_uploaded_file($tmp,"notes/".$fname1);
					$uploadOk=1;
					$query="Insert into notes(sub_id,link,text) value('$Subjects','$modal','$title');";
					$result=mysqli_query($sqli,$query);
					if(mysqli_affected_rows($sqli)>0){
						echo "<script> alert('Done') </script>";
					}
				}
			}
					
				}
				if ($uploadOk==1) {
					echo "<script>alert('file uploaded succesfully')</script>";
				}
				else if($uploadOk==0){
					echo "<script>alert('file init failed')</script>";
				}
						
			
		}
		if (isset($_POST['upload_paper'])) {
			include("connect_db.php");
			$uploadOk=0;
			$Subjects=$_POST['Subjects'];
			
			$title=$_POST['title'];

			if (isset($_FILES['file2'])) {
				$fname1=$_FILES['file2']['name'];
				$tmp=$_FILES['file2']['tmp_name'];
				$type=$_FILES["file2"]["type"];
				$size=$_FILES["file2"]["size"];
				$modal="papers/$fname1";
				
				if($type != "application/pdf" && $type != "image/png" && $type != "image/jpeg"  ) {
					echo "<script>alert('Sorry, only PDF files are allowed.')</script>";
					
					$uploadOk = 0;
				}else{

				if ($size>800000) {
					echo "<script>alert('file size error')</script>";
					
					$uploadOk=0;
					
				}
				else{
					$x=move_uploaded_file($tmp,"papers/".$fname1);
					$uploadOk=1;
					$query="Insert into paper(sub_id,link,text) value('$Subjects','$modal','$title');";
					$result=mysqli_query($sqli,$query);
					if(mysqli_affected_rows($sqli)>0){
						echo "<script> alert('Done') </script>";
					}
				}
			}
			}
				else{
					echo "<script>alert('Please choose a file')</script>";
					$uploadOk=-1;
				}
				if ($uploadOk==1) {
					echo "<script>alert('file uploaded succesfully')</script>";
				}
				else if($uploadOk==0){
					echo "<script>alert('file init failed')</script>";
				}
						
			
		}
		
					
		
?>

<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

