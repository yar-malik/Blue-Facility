<?php
$con=mysqli_connect("flanche.com","amamym","lp9LlxTtoo", "therebels");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO FoundItem (Name, Description, UserID)
VALUES
('$_POST[itemname]', '$_POST[description]', '1')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "1 record added!";

mysqli_close($con);
?> 