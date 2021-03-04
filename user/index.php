<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>
<div class="container">
	<?php 
	if(!session_start())
	{
		session_start()	;
	}
	else
	{
		if($_SESSION['level'] == 1)
		{
			?>
			<div class="row">
				<?php 
				require_once('../dbconnection.php');
				$sqlselect = "select * from house";
				$select=mysqli_query($conn, $sqlselect);
				if($select!=""):
					while ($row = mysqli_fetch_assoc($select)):

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
				endwhile;
			endif;
			?>	
		</div>
	</div>
</div>
<?php require '../footer.php'; ?>
<?php 
}
else 
{
	header('Location: ../index.php');
}

}
?>
