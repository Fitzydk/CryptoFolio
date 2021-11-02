<?php

$coinremove = lcfirst($_GET['coinremove']);
$usr = $_COOKIE['user'];

$completed = false;

$coinupper = ucfirst($coinremove);
$DELETE = '"' . "<option value='{$coinremove}'>{$coinupper}</option>" . '"' . "|";

$data = file("cred/{$usr}/preflist.txt");

$out = array();
if($coinremove != null){

    foreach($data as $line) {
        if(trim($line) != $DELETE) {
            $out[] = $line;
        }
    }

    $fp = fopen("cred/{$usr}/preflist.txt", "w");
    flock($fp, LOCK_EX);
    foreach($out as $line) {
        fwrite($fp, $line);
    }
    flock($fp, LOCK_UN);
    fclose($fp); 
    $completed = true;
}
    if($completed == true) {
        echo '<script>' . 'window.location.href = "index.php";' . '</script>';
    }
?>