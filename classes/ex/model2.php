<?php
// Define the class FormData
class FormData {
  // Declare the properties
  private $name;
  private $email;
  private $message;

  // Define the constructor
  public function __construct($name, $email, $message) {
    $this->name = $name;
    $this->email = $email;
    $this->message = $message;
  }

  // Define a method to add data to the database
  public function addData($host, $user, $pass, $db, $table) {
    // Create a mysqli object
    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check for connection errors
    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    }else {
        echo "<br> Connection Established <br>";
    }

    $mysqli->set_charset("utf8");

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO $table (name, email, message) VALUES (?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sss",$this->name, $this->email, $this->message);

    // Execute the statement
    if ($stmt->execute()) {
      echo "Data added successfully.<br>";
    } else {
      echo "Error: " . $stmt->error . "<br>";
    }

    // Close the statement and the connection
    $stmt->close();
    $mysqli->close();
  }
}

// Get the data from the form using $_POST superglobal
// $name = $_POST["name"];
// $email = $_POST["email"];
// $message = $_POST["message"];
$name = "name";
$email ="email";
$message = "message";

// Create an instance of the class FormData
$myData = new FormData($name, $email, $message);

$r=0;
$repeat=10;
// Call the addData method with some parameters
while($r<$repeat){
$myData->addData("localhost", "root", "", "test", "test1");
$r++;
}
?>
