<?php session_start();
if (!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Guide Advertisment</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/guidestyle.css">
</head>

<body>

    <section>
        <article>
            <form action="GuideForm.php" method="post" enctype="multipart/form-data">
                <div>
                    <h1>
                      Add Guide
                  </h1>
                </div>
                
                <div>
                    <label for="Name">Name <span style="color: red; font-size: 20px;">*</span> </label>
                    <input type="text" id="txtTitle" name="txtTitle" placeholder="Enter Your Name" required>
                </div>
                    
                <div>
                    <label for="Description">Description <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" id="txtDescription" name="txtDescription" placeholder="Describe about You">
                </div>
    
                <div>
                    <label for="image">Image Of Yours</label>
                    <input type="file" name="imageFile" required>
                </div>
    
                <div>
                    <label for="category">Category     </label>
                    <select name="lstCategory">
                        <option value="local">Local</option>
                        <option value="foreing">Foreign</option>
                    </select>
                </div>
    
                <div>
                    <label for="contactNumber">Contact Number <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" name="txtContactNumber" placeholder="Your Contact Number" >
                </div>
    
                <label for="chkPublish" class="checkbox">Publish the Advertisement
                    <input type="checkbox" name="chkPublish">
                </label>
    
                <div class="addpost">
                    <button name="btnSubmit">Add Post</button>
                </div>
				
				<div class="addpost">
                    <button name="back"><a href="Account.php">Account</a></button>
                </div>
				
				<?php
					if(isset($_POST["btnSubmit"]))
					{
						$productname = $_POST["txtTitle"];
						$description = $_POST["txtDescription"];
						$contactNumber = $_POST["txtContactNumber"];
						$category = $_POST["lstCategory"];
		
						$image = "uploads/".basename($_FILES["imageFile"]["name"]);
						move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
		
						if (isset($_POST["chkPublish"]))
						{
							$status = 1;
						}
						else
						{
							$status = 0;
						}
		
						$con = mysqli_connect("localhost","root","","finalproject");
		
						if (!$con)
						{
							die("Sorry!!! We are facing technical issue..");
						}
		
						$sql = "INSERT INTO `tblguideadvertisement` (`advertisementID`, `Name`, `description`, `publish`, `imagePath`, `contactNumber`, `category`, `email`) VALUES (NULL, '".$productname."', '".$description."', '".$status."', '".$image."', '".$contactNumber."', '".$category."', '".$_SESSION["username"]."');";
		
						if (mysqli_query($con, $sql) > 0)
						{
							echo "Advertisement uploaded successfully!";
						}
						else
						{
							echo "Oops!! Something went wrong, please select the file again!";
						}
					}
				?>
            </form>
        </article>
    </section>
    
</body>

</html>