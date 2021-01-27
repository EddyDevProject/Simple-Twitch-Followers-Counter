<?php

$client_id = "YOUR_CLIENT_ID";
$client_secret = "YOUR_CLIENT_SECRET";
$redirect_uri = "YOUR_REDIRECT_URI";

if ($_GET['code'])
{
    $code = $_GET['code'];
    //get access_token
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://id.twitch.tv/oauth2/token?client_id=" . $client_id . "&client_secret=" . $client_secret . "&code=" . $code . "&redirect_uri=" . $redirect_uri . "&grant_type=authorization_code",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $response_decode = json_decode($response, true);

    $access_token = $response_decode['access_token'];

    //token validation
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://id.twitch.tv/oauth2/validate',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $access_token
        ) ,
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $response_decode = json_decode($response, true);
    $user_id = $response_decode['user_id'];
    //followers count
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.twitch.tv/helix/users/follows?to_id=" . $user_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $access_token,
            "Client-id: " . $client_id
        ) ,
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response_decode = json_decode($response, true);
    $followers = $response_decode['total'];
    echo "<center><h1>Followers: $followers</h1></center>";
}
else
{
    echo "Error";
}
