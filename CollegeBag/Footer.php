<div class="row bg-light"  style="width: 101%;" >
		<div class="col-md-12">
			<div class="container">
		<div class="row mt-3">
			<div class="col-md-5">
			<h4>About us</h4>
			<p class="text-justify">Collegebag is the Academic Portal. It was started out by our group with an aim to provide a holistic solution to all student needs, those that are encountered during these four crucial years of college. In short - We aim to make the life of every Student simpler & turn these four years into a smoother ride!</p>
			
		</div>
		<div class="col-md-4">
			<h4>Contact us</h4>
			<p>Location Bhopal. MP</p>
			
			<p>Call us +91 7894561230</p>
			
			
		</div>
		<div class="col-md-3">
			<h4>Top contributor</h4>
			<?php
			include('connect_db.php');
			$query="Select * from top_contributor";
			$result=mysqli_query($sqli,$query);
			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)) {
					
				
			?>
			<p><?php  echo "".$row['username']; ?></p>
			<?php
				}
			}
			?>
			
		</div>
		</div>
		
		
	</div>

			</div>
	
		</div>
		