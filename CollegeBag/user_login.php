
<!DOCTYPE html>
	<head>
		<title>
			CollegeBag
		</title>
	</head>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
    <?php 
			include("Navbar.php");

		 ?>
<?php
	session_start();
	include("connect_db.php");
    if(isset($_SESSION['user_valid']) && $_SESSION['user_valid'] && !empty($_SESSION['user_username'])){?>
    
    <form  class="form-group mr-5" method="POST" style="float:right;">
        <button  type="submit" name="logout_user" class="btn btn-primary mt-5 ">Logout</button>
    </form>
    <br/><br/><br/>
    

    <div class="container mt-4" style="height: 100vh">
			<div class="row">
				<div class="col-md-4">
					<h6>Upload Assingments</h6>
					<div class="bg-light">
						<form method="post" class="table-responsive p-3" enctype="multipart/form-data">
							<label for="Subjects">Choose a Suject:</label>
							<select name="Subjects" class="mt-2 form-control" id="sub">
								<option value="Operating Systems">Operating Systems</option>
								<option value="Computer Networks">Computer Networks</option>
								<option value="Discrete Structure">Discrete Structure</option>
								<option value="Digital Logic and Design">Digital Logic and Design</option>
                                <option value="Design and Analysis of Algorithm">Design and Analysis of Algorithm</option>
                                <option value="Engineering Mathematics III">Engineering Mathematics III</option>
                                <option value="Network Analysis">Network Analysis</option>
							</select>
							<input type="text" class="form-control mt-2" name="assgnnum" placeholder="Assingment Number">
							
							<input type="file" class="mt-4 form-control" name="file2" required="" required="">
							<input type="submit" name="upload_assgn" class="mt-4 btn btn-success" value="Upload">
						</form>
					</div>
				</div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Assingment Number</th>
                            <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                                $user_id=$_SESSION['user_id'];
                                include("connect_db.php");
                                $query="select * from assingment where user_id=".$user_id;
                                $result=mysqli_query($sqli,$query);
                                if(mysqli_num_rows($result)>0){
                                while($rows=mysqli_fetch_array($result)){


                                ?>
                                
                                    
                                    
                                    
                                    <tr>
                                        <th scope="row"><?php echo "".$rows['assgn_id'] ?></th>
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
				
			</div>
		</div>
	</div>

<?php
    }
    else{?>


<body>
	<!-- Navbar design HTML code  -->
		

	<!-- Body1 design HTML code    -->
	<div class="container mt-5 mb-5 w-25" style="height: 100vh">
		<div class="row m-5 pt-5">
			
			
			<div class="col-md-12 ">
				<div class="container bg-light p-2  mt-1">
					<div class="card-primary mt-3">
						<div class="card-title">
							<center><h5>user Login </h5></center>
						</div>
						<hr/>
						<div class="card-body">
							<form onsubmit="return valid()" class="form-group" method="POST">
								<input type="text" name="username" class="form-control" placeholder="Login ID" />
								<input type="text" name="password" class="form-control mt-4" placeholder="Password" />
							 	<button type="submit" name="submit_user" class="btn btn-primary mt-5 form-control">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
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





<?php


    }
    if(isset($_POST['logout_user'])){
        unset($_SESSION["user_username"]);
        unset($_SESSION["user_key"]);
        $_SESSION['user_valid'] = false;
        
        
        header('Refresh: 0; URL = index.php');

    }
    if(isset($_POST['submit_user'])){
        $uname=$_POST['username'];
        $password=$_POST['password'];
        if($uname=="" || $password==""){
            echo "<script>alert('Enter the username and password')</script>";
        }
        else{
        $query="Select * from user where username ='$uname' && password='$password';";
        $result=mysqli_query($sqli,$query);
        if(mysqli_affected_rows($sqli)>0){
            $rows=mysqli_fetch_array($result);
            $_SESSION['user_valid'] = true;
            $_SESSION['user_timeout'] = time();
            $_SESSION['user_username'] = $uname;;
            $_SESSION["user_key"]=$uname;
            $_SESSION['user_id'] = $rows['user_id'];
            $user_id=$rows['user_id'];
            header("refresh: 0");
            
            
            
        }
    }
}
if (isset($_POST['upload_assgn'])) {
    include("connect_db.php");
    $uploadOk=0;
    $Subjects=$_POST['Subjects'];
    
    
    $assgnnum=$_POST['assgnnum'];
    

    if (isset($_FILES['file2'])) {
        $fname1=$_FILES['file2']['name'];
        $tmp=$_FILES['file2']['tmp_name'];
        $type=$_FILES["file2"]["type"];
        $size=$_FILES["file2"]["size"];
        $modal="assignment/$fname1";
        
        if($type != "application/pdf"   ) {
            echo "<script>alert('Sorry, only PDF files are allowed.')</script>";
            
            $uploadOk = 0;
        }else{

        if ($size>800000) {
            echo "<script>alert('file size error')</script>";
            
            $uploadOk=0;
            
        }
        else{
            $user_id=$_SESSION['user_id'];
            $x=move_uploaded_file($tmp,"assignment/".$fname1);
            $uploadOk=1;
            $query="Insert into assingment(sub_name,user_id,link,assgn_number) value('$Subjects','$user_id','$modal','$assgnnum');";
            $result=mysqli_query($sqli,$query);
            if(mysqli_affected_rows($sqli)>0){
                header("refresh: 0");
                echo "<script> alert('Done') </script>";
                
            }
        }
    }
    }
        else{
            echo "<script>alert('Please choose a file')</script>";
            $uploadOk=-1;
        }
        
                
    
}
?>
