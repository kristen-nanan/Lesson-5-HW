<!DOCTYPE html>
<html>
<body>

<?php
//Link
$link = mysqli_connect("localhost", "root", "root", "user information");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Update query
$sql3 = "UPDATE general SET City = 'Amsterdam' WHERE LastName = 'Sicily';";
if(mysqli_query($link, $sql3)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sq3. " . mysqli_error($link);
}

?>

</body>
</html>



