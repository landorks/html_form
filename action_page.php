<?php
   var_dump($_POST);
   $fullname='';
   $gender='';
   $country='';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wait_lang_sir";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
$sql = "INSERT INTO Student_Record (id, full_name, gender, country)
VALUES (NULL,'$fullname','$gender','$country')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
