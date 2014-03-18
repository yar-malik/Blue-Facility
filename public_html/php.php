

<?php
//Just checking if any field has been left empty or not
// define variables and initialize with empty values
$objectnameErr = $detailsErr="";
$objectname = $details= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["objectname"])) {
        $objectnameErr = "Missing";
		 echo "Missing objectname!\n";
		 echo" ";
    }
    else {
        $username = $_POST["objectname"];
    }
    
    if (empty($_POST["details"])) {
        $detailsErr= "Missing";
		 echo "Missing details!\n";
		 echo " ";
    }
    else {
        $details= $_POST["details"];
    }
}
	
?>