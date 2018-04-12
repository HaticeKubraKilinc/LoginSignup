<?php
header ('connect-type text/html; charset=UTF-8');
//CONNECT to database
include "connect.php";
//getting values
// $email = $_POST['email'];
// $password = $_POST['password'];


//query 
// $sorgu = "INSERT INTO users (email, password) VALUES ('{$email}','{$password}')";
// if (mysqli_query($connection, $sorgu)) {
// 	$response['hata'] = 'basarili';
// 	$response['mesaj'] = 'kayit basariyla tamamlandi';

// }else {
// 	$response['hata'] = 'hatali';
// 	$response['hata'] = 'hata' . $sorgu ;

// }
// echo json_encode($response);
// mysqli_close($connection);

// This SQL statement selects ALL from the table 'projectService'
$sql = "SELECT * FROM  giris";
 
// Check if there are results
if ($result = mysqli_query($con, $sql))
{
	// If so, then create a results array and a temporary one
	// to hold the data
	$resultArray = array();
	$tempArray = array();
 
	// Loop through each row in the result set
	while($row = $result->fetch_object())
	{
		// Add each row into our results array
		$tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
 
	// Finally, encode the array to JSON and output the results
	echo json_encode($resultArray);
}
 
// Close connections
mysqli_close($con);

?>