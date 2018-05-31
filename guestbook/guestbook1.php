<?php
function storeComment ($user_comment){
	$servername = 'localhost';
	$username = 'lakshan';
	$password = '1116';
	$dbname = 'guestbook';
	$msg = '';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->multi_query($sql) === TRUE) {
	$msg = "New record created successfully \n";
}
else{
	$msg = "Error: " . $sql . "----" . $conn->error."<br>";
}

$conn->close();
return $msg;
}
?>