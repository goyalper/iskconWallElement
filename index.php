<?php
include_once "classes/brick.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Iskcon Donation Element-Wall</title>
    <!-- bootstrap scripts start -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- bootstrap scripts ends here -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <h1>Element Wall With brics</h1>

    <?php
  $show = new iskcon();
  $show->connectServer(); 
  $i = 0; 
  $result = $show->showBrics("bricks"); 
  echo "<br />"; 
  while ($row = mysqli_fetch_assoc($result)) { 
    $result_name[] = $row["name"]; 
    $result_status[]= $row["status"]; 
  } 
  // $result =mysqli_fetch_assoc ($show->showBrics("bricks"));
    // print_r( $result_array); // echo $result_array[0];
     ?>

<form action="payment.php" method="post">
<div class="container">
      <div class="row">
      <?php
                  do {
                    ?>
                    <button class="brick col-1 status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>" id="brick_<?php echo $i+1; ?>">
                    <?php echo $result_name[$i]." ".$i+1; $i++; ?>

                    
                  </button>
            <?php
                    } while ($i < 100)
                  ?>
      </div></div>
</form>
    <!-- <form action="payment.php" method="post">
      <div class="wall">
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col-" id="c1">
              <h6>column 1</h6>
              <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php echo $result_name[$i]; $i++; ?>
                    
                  </button>
            <?php
                    } while ($i < 10)
                  ?>
          </div>
          <div class="col-" id="c2">
            <h6>column 2</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 20)
                  ?>
          </div>
          <div class="col-" id="c3">
            <h6>column 3</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 30)
                  ?>
          </div>
          <div class="col-" id="c4">
            <h6>column 4</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 40)
                  ?>
          </div>
          <div class="col-" id="c5">
            <h6>column 5</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 50)
                  ?>
          </div>
          <div class="col-" id="c6">
            <h6>column 6</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 60)
                  ?>
          </div>
          <div class="col-" id="c7">
            <h6>column 7</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 70)
                  ?>
          </div>
          <div class="col-" id="c8">
            <h6>column 8</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 80)
                  ?>
          </div>
          <div class="col-" id="c9">
            <h6>column 9</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 90)
                  ?>
          </div>
          <div class="col-" id="c10">
            <h6>column 10</h6>
            <?php
                  do {
                    ?>
                    <button class="brick status_<?php echo $result_status[$i]; ?>" name="brick_id" value="<?php echo $i+1; ?>">
                    <?php 
                    echo $result_name[$i]; $i++; ?>
                  </button>
            <?php
                    } while ($i < 100)
                  ?>
          </div>
        </div>
      </div>
    </form> -->
    <!-- <div class="brick-class">
    <h1>Make Brics...</h1>
    <form action="classes/brick.php" method="post">
        <input type="text" name="nameB" id="nameB" placeholder="Enter Name Here.."><br>
        <select name="statusB" id="statusB">
            <option value="0">Status</option>
            <option value="1">Purchased</option>
        </select><br>
        <input type="text" name="repeatB" id="repeatB" placeholder="Enter repeat no..."><br>
        <br><input type="submit">
    </form>
    </div>
    <style>
        .brick-class{
            margin: 30px;
            margin-bottom: 100px;
            padding: 100px;
            border: 2px solid royalblue;
        }
        .brick-class input, select{
            margin-top: 15px;
            font-size: 30px;
            padding: 5px;
        }
    </style> -->

    <!-- bootstrap scripts start -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap scripts end -->
    <!-- custom script -->
    <!-- <script>
      function sub() {
        $("form").submit();
      };
      $(".brick").click(function(){

        var eleID = $(".brick").id;
        $("#brick_id").value = eleId;
        sub();

      });
    </script> -->


    <script>
     var button= $(".status_1");
     // Use the prop method to set the disabled property to true
      button.prop("disabled", true);  

    </script>
    <!-- custom script -->

    <?php
  $show->closeServer(); ?>
  </body>
</html>
