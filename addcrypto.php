<?php
$namecr = lcfirst($_GET['addcrypt']);
$goodname = ucfirst($namecr);
$usr = $_COOKIE['user'];
$myfile = fopen("cred/{$usr}/preflist.txt", "a");

if($namecr != null){
    fwrite($myfile, '"');
    fwrite($myfile, "<option value='");
    fwrite($myfile, $namecr);
    fwrite($myfile, "'>");
    fwrite($myfile, $goodname);
    fwrite($myfile, "</option>");
    fwrite($myfile, '"');
    fwrite($myfile, "|");
    fwrite($myfile, "\n");
    fclose($myfile);
}

$userlist = file ("cred/{$usr}/preflist.txt");

$cryptoarray = array();

$completed = false;

foreach ($userlist as $crypt) {
    $crypt_details = explode('|', $crypt);
    array_push($cryptoarray, $crypt_details);
}

$arrayLength = count($cryptoarray);
$i = 0;
while( $i < $arrayLength){
    if ($cryptoarray[$i] == $cryptoarray[$i+1]){
        unset($cryptoarray[$i+1]);
        $i++;
        echo $cryptoarray[$i];
    }
    else{
        echo $cryptoarray[$i][0];
        $i++;
    }
}

if($i == $arrayLength && $namecr != null){
    $completed = true;
}

if($completed == true) {
    echo '<script>' . 'window.location.href = "index.php";' . '</script>';
}

?>