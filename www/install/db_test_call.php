<?php
/*
 *  © CoinDice 
 *  Demo: http://www.btcircle.com/dice
 *  Please do not copy or redistribute.
 *  More licences we sell, more products we develop in the future.  
*/


if (@!mysql_connect($_GET['db_host'],$_GET['db_user'],$_GET['db_pass']) || @!mysql_select_db($_GET['db_db']))
echo json_encode(array('error'=>'yes'));
else echo json_encode(array('error'=>'no'));

?>