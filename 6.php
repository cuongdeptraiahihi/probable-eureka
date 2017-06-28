<?php
 
/* == ID tài khoản muốn tăng share == */
$id = '461935730811744';
/* == Token tài khoản chứa page == */
$token = 'EAAAAAYsX7TsBANchHvIXbAbAwEBhkZBWs3Ep7LIYhpDvesEEKtc8ONrJuMMFiHfxqjSZCnZBAPfEHpaqxLhacxGRZBZBfnSYkMbnpmxZABQ8EC1ZALpXXnzEDh18orLNeQZAzGMiN9G2oP5NZBxXyZAGQOqlwHAQepbJZCZA6kU4nnLCU5HMGch6MvxxxZCxPOBssK02CB3fxG20NVQZDZD';
$accounts = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token=' . $token),true);
 
foreach ($accounts['data'] as $data) {
    //echo $data['access_token'] . '<br/>';
    echo '<font color="blue">'.cURL('https://graph.facebook.com/' . $id . '/sharedposts?method=post&access_token='.$data['access_token']) . '<br/><br/><br/>';
}
 
/* == Hàm get == */
function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
 
?>
 