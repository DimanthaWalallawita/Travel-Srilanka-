<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "finalproject");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>All Tour Guide Informations</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<script>
			function ShowNumber()
			{
				let today = "<?php echo $row["contactNumber"]?>";
				alert("Contact Number is "+today;
			}
		</script>
		
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h1 align="center">OUR TOP TOUR GUIDES</h1><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM tblguideadvertisement ORDER BY advertisementID ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["imagePath"]?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["Name"]?></h4>

						<h4 class="text-danger"><?php echo $row["description"]?></h4>


						<input type="hidden" name="hidden_name" value="<?php echo $row["Name"]?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["description"]?>" />

						<input type="submit" onClick="ShowNumber()" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Contact Now"/>

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h1 align="center">Choose & Contact The Tour Guides</h1>
			<div class="table-responsive">
			</div>
		</div>
	</div>
	<br />
	</body>
</html>