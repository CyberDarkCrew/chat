<?php
$filepath = "chatlog.txt";
$msg  = $_POST['n'] . "#" . $_POST['m'] . "#" . date('h:i A')."\n";
file_put_contents($filepath,$msg,FILE_APPEND);

ini_set('display_errors','Off');
?>