<?php

$usr = $_COOKIE['user'];

$handle = "cred/{$usr}/preflist.txt";

$fp = fopen($handle, "rb");

$readString = fread($fp, filesize($handle));

echo $readString;

fclose($fp);

?>