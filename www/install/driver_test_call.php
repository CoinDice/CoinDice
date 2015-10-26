<?php
/*
 *  © CoinDice 
 *  Demo: http://www.btcircle.com/dice
 *  Please do not copy or redistribute.
 *  More licences we sell, more products we develop in the future.  
*/


include 'driver_test.php';
$test=new jsonRPCClient('http://'.$_GET['w_user'].':'.$_GET['w_pass'].'@'.$_GET['w_host'].':'.$_GET['w_port'].'/');
@$test_call=$test->getbalance();

echo json_encode(array('result'=>$test_call));

?>