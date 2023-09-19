<?php
class iskcon{
// database variables
// brick_id databse column name
    public $brick_id = "Brick_id";
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "iskcon_payment";
    private $name;
    private $status;
    private $repeat;
    private $mysqli;
    // private $query;
    // private $result;
    // private $row;

    // public function __construct($name, $status, $repeat) {
    //     $this->name = $name;
    //     $this->status = $status;
    //     $this->repeat = $repeat;
    //   }
      public function showValue() {
        echo "Name : " . $this->name . ", Status is : " . $this->status . ", and repeats are : " . $this->repeat . ".<br>";
      }
      public function connectServer() {
        // Create a mysqli object

        $mysqli = new mysqli($this->server, $this->username, $this->password, $this->database);
    
        // Check for connection errors
        if ($mysqli->connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli->connect_error;
          exit();
        }else{
            // echo "Connected Susscefully !!!";
        }

        // Set the character set to utf8
        $mysqli->set_charset("utf8");

        $this->mysqli= $mysqli;
    
        // Return the mysqli object
        return $mysqli;
        
      }

      public function addData($table){
        $name=$this->name;
        $status=$this->status;
        $mysqli= $this->mysqli;

        $repeat=$this->repeat;
        $r=0;


        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
          }else {
              echo "<br> Connection Established <br>";
          }

          $mysqli->set_charset("utf8");


          while($r<$repeat){
          // Prepare the SQL statement
          $stmt = $mysqli->prepare("INSERT INTO $table (name, status) VALUES (?, ?)");
      
          // Bind the parameters
          $stmt->bind_param("ss",$name, $status);
      
          // Execute the statement
          if ($stmt->execute()) {
            echo "<br>Data added successfully.<br>";
          } else {
            echo "Error: " . $stmt->error . "<br>";
          }
      
          // Close the statement and the connection
          $stmt->close();

          
          echo "Line :- ". $r + 1 ."  Added successfully !!! ";
          $r++;

        }  
    }


    public function showBrics($table){
        
      $mysqli= $this->mysqli;

        // Check connection
        if ($mysqli->connect_error) {
            
            die("Connection failed: " . $mysqli->connect_error);
        }
            // echo "Connection Established in show()...";
      
            
        $query = "SELECT name,status FROM ".$table;
        
        
        $results = mysqli_query ($mysqli, $query);

        return $results;  
    }

    public function purchase($brick_id_CNAME, $brick_id_no, $brick_name, $brick_status, $brick_table, $payee_name, $email, $phone, $address, $user_table){
      $brick_id_no;
      $mysqli= $this->mysqli;
      // $brick_status=0;


      // $timestamp = "current_timestamp()";
      // echo "<h1> $brick_id_CNAME </h1>";
      // echo "<h1> $brick_id_no </h1>";

       // Prepare the SQL statement
       $stmt = $mysqli->prepare("INSERT INTO $user_table (full_name, email, phone, address) VALUES (?, ?, ?, ?)");
      //  current_timestamp()
       // Bind the parameters
       $stmt->bind_param("ssss",$payee_name, $email, $phone, $address);
   
       // Execute the statement
       if ($stmt->execute()) {
        $stmt->close();

        $stmt2 = $mysqli->prepare("UPDATE $brick_table SET name = ?, status = ?  WHERE $brick_id_CNAME = $brick_id_no");
        $stmt2->bind_param("ss",$brick_name, $brick_status);

        if ($stmt2->execute()) {
          $stmt2->close();
          echo "<h1>Thanks $payee_name For Your Donation...</h1>";
          echo "<h1>.....Lord Krishna Bless Youh.....</h1>";
        }else{
         echo "Error: Something Goes Wrong !!!" . $stmt2->error . "<br>";
        }

       } else {
         echo "Error: Something Goes Wrong !!!" . $stmt->error . "<br>";
       }
   
       // Close the statement and the connection
       


    }

      public function closeServer(){
        if($this->mysqli->close()==true){
            // echo "<br>Successfully Exited From Database ... <br>";
        }else{
            echo "<br>Something Goes wrong<br>";
        }


      }



}




// $name= $_POST["nameB"];
// $status= $_POST["statusB"];
// $repeat= $_POST["repeatB"];
// $table="bricks";

// echo $name;
// echo $status;
// echo $repeat;

// $brick = new iskcon($name, $status, $repeat);
// $brick->showValue();
// $brick->connectServer();
// $brick->addData($table);
// $brick->closeServer();


//     $server = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "iskcon_payment";

// // Connect to your database
// $mysqli = new mysqli($server, $username, $password, $database);

// Check connection
// if ($mysqli->connect_error) {
//     die("Connection failed: " . $mysqli->connect_error);
// }

// // Query to select all data from your table
// $query = "SELECT * FROM devotees";

// // Execute the query
// $result = $mysqli->query($query);

// // Check if there are any results
// if ($result->num_rows > 0) {
//     // Output data of each row
//     while($row = $result->fetch_assoc()) {
//         foreach($row as $column => $value) {
//             echo $column . ": " . $value . "<br>";
//         }
//         echo "<br>";
//     }
// } else {
//     echo "0 results";
// }

// // Close the connection
// $mysqli->close();














?>