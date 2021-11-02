<?php

if(isset($_POST['coinlist'])) {

    foreach ($_POST['coins'] as $select)
    {
      $coin_picked = $select;
    }
  }


function httpping($coin_picked){
    $chgbp = curl_init();
    curl_setopt($chgbp, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chgbp, CURLOPT_URL, "https://api.coingecko.com/api/v3/simple/price?ids={$coin_picked}&vs_currencies=gbp,usd&include_market_cap=false&include_24hr_vol=false&include_24hr_change=false&include_last_updated_at=false");
    $data = curl_exec($chgbp);
    curl_close($chgbp);
    
    $decodedprice = json_decode($data, true);

    
    $decoded_arr = array();
    array_push($decoded_arr, $decodedprice);
    $costgbp = $decoded_arr[0][$coin_picked]["gbp"];
    $costusd = $decoded_arr[0][$coin_picked]["usd"];
    echo "<p id='costy'>" . '£' . "{$costgbp}</p>";
    echo "<p id='costy'>" . '$' . "{$costusd}</p>";
    
}

httpping($coin_picked);

?>