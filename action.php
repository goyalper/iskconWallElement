<?php
include 'classes/brick.php';

$brick_name = $_POST['brick-name'];
$fname = $_POST['brick-name']." ".$_POST['payee-name'] ;
$email = $_POST['payee-email'];
$phone = $_POST['payee-phone'];
$addr = $_POST['payee-addr'];

$brick_id_no = $_POST['payment_id'];
$brick_id_CNAME = "Brick_id";
$brick_status=1;
$brick_table="bricks";
$user_table="devotees";

// purchase($brick_id_no, $brick_name, $brick_status, $brick_table, $payee_name, $email, $phone, $address, $user_table)

$radheRadhe = new iskcon();
$radheRadhe->connectServer(); 
$radheRadhe->purchase($brick_id_CNAME, $brick_id_no, $brick_name, $brick_status, $brick_table, $fname, $email, $phone, $addr, $user_table);





$radheRadhe->closeServer(); 

?>
