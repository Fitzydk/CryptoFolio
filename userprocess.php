<?php

if(isset($_COOKIE['user']))
{
  header("location: index.php");
}

$username = $_GET['username'];
$password = $_GET['password'];
$usr_pass = array();
array_push($usr_pass, $username, $password);


function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

if($username != ""){
    if($password != ""){
        mkdir("cred/" . $username);
        $myfile = fopen("cred/login.txt", "a");
        $preflist = fopen("cred/$username/preflist.txt", "a");
        $defaultlist = file ("Default/defaultpref.txt");

        fwrite($myfile, $username);
        fwrite($myfile, "|". $password);
        fwrite($myfile, "|");
        fwrite($myfile, "\n");
        fclose($myfile);

        $cryptoarray = array();

        foreach ($defaultlist as $crypt) {
            $crypt_details = explode('|', $crypt);
            array_push($cryptoarray, $crypt_details);
        }
        
        $arrayLength = count($cryptoarray);
        $i = 0;
        while( $i < $arrayLength){
            console_log($cryptoarray);
            fwrite($preflist, $cryptoarray[$i][0]);
            fwrite($preflist, "|");
            fwrite($preflist, "\n");
            $i++;
        }
        fclose($preflist);



        setcookie("user", $username, time() + (86400 * 30), "/");
}
}


header("location: index.php")

?>