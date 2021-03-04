<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>
<div class="container">
	<div class="row">
		<?php
		require_once('../dbconnection.php');
		if(isset($_GET['search'])){
			$search_value=$_GET["search"];
			//echo $search_value; 
			$sql="SELECT * FROM house WHERE address LIKE '%{$search_value}%'";
			$result = mysqli_query($conn, $sql);
			foreach ($result as $row) {
				?>
				<div class="col-lg-6">
					<div class="drawing-box">
						<img src="<?php echo 'http://localhost/Rental/admin/'."dataimg/".$row['image'] ; ?>" >
						<div class="content">
							<h3>Address: <?php echo $row["address"]; ?></h3>
							<div class="row">
								<div class="col-lg-6">
									<div class="list-items">
										<ul>
											<li>
												<b>Owner Name:</b> <?php echo $row["owner_name"]; ?>
											</li>
											<li>
												<b>Phone Number:</b> <?php echo $row["number"]; ?>
											</li>
											<li>
												<b>Email Address:</b> <?php echo $row["email"]; ?>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="list-items">
										<ul>
											<li>
												<b>Amount:</b> <?php echo $row["amount"]; ?>
											</li>
											<li>
												<b>Available Room:</b> <?php echo $row["available_room"]; ?>
											</li>
											<li>
												<b>Room Size:</b> <?php echo $row["room_size"]; ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<p><b>Description:</b> <?php echo $row["description"]; ?>
						</p>
					</div>
				</div>
			</div>	
			<?php
		}
	}
	?>
</div>
</div>
</div>
<?php require '../footer.php'; ?>