<?php
function logger($log){
  if(!file_exists('log.txt')){
    // For the security purporse locale the log.txt file in another folder (../../log.txt);
    file_put_contents('log.txt');
  }

  $ip = $_SERVER['REMOTE_ADDR']; // CLIENT IP
  date_default_timezone_set('Europe/Amsterdam'); // https://www.php.net/manual/en/function.date-default-timezone-set.php
  $time = date('m/d/y h:iA', time());

  $contents = file_get_contents('log.txt');
  $contents .= "$ip\t$time\t$log\r";

  file_put_contents('log.txt', $contents);
}
?>
