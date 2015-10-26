<?php
/*
 *  © CoinDice 
 *  Demo: http://www.btcircle.com/dice
 *  Please do not copy or redistribute.
 *  More licences we sell, more products we develop in the future.  
*/

if (!isset($included_)) exit();

$fp=file('CoinDice.sql',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
$query='';
foreach ($fp as $line) {
  if ($line!='' && strpos($line,'--')===false) {
    $query.=$line;
    if (substr($query,-1)==';') {
      mysql_query($query);
        $query='';
    }
  }
}
?>