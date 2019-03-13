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

//Transfer table to HTML
	$sql = "SELECT * FROM general";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>FirstName</th>";
	                echo "<th>LastName</th>";
	                echo "<th>Gender</th>";
	                echo "<th>City</th>";
	                echo "<th>University</th>";
	                echo "<th>Email</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['FirstName'] . "</td>";
	                echo "<td>" . $row['LastName'] . "</td>";
	                echo "<td>" . $row['Gender'] . "</td>";
	                echo "<td>" . $row['City'] . "</td>";
	                echo "<td>" . $row['University'] . "</td>";
	                echo "<td>" . $row['Email'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        // Close result set
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>

</body>
</html>



