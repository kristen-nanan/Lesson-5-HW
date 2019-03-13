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

//Insert query
$sql2 = "INSERT INTO general (FirstName, LastName, Gender, City, University, Email) VALUES ('Greta', 'Fischer', 'Female','Munich', 'University of Hagen', 'gfischer@gmail.com')";
if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

?>

</body>
</html>



