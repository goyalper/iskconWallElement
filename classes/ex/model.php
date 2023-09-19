<?php
// Define the class addBrick
class addBrick {
  // Declare the properties
  private $brickColor;
  private $brickSize;
  private $brickShape;

  // Define the constructor
  public function __construct($color, $size, $shape) {
    $this->brickColor = $color;
    $this->brickSize = $size;
    $this->brickShape = $shape;
  }

  // Define a method to display the brick details
  public function showBrick() {
    echo "The brick is " . $this->brickColor . ", " . $this->brickSize . ", and " . $this->brickShape . ".<br>";
  }

  // Define a method to connect with the server with security
  public function connectServer($host, $user, $pass, $db) {
    // Create a mysqli object
    $mysqli = new mysqli($host, $user, $pass, $db);

    // Check for connection errors
    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    }

    // Set the character set to utf8
    $mysqli->set_charset("utf8");

    // Return the mysqli object
    return $mysqli;
  }
}

// Create an instance of the class addBrick
$myBrick = new addBrick("red", "large", "square");

// Call the showBrick method
$myBrick->showBrick();

// Call the connectServer method with some parameters
$myServer = $myBrick->connectServer("localhost", "root", "", "test");

// Close the connection
$myServer->close();
?>
