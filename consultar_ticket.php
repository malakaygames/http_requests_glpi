<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://servidordoseuglpi/apirest.php/Ticket/onumerodochamadoglpi?expand_dropdowns=true",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => [
    "App-Token: seutokenglpi",
    "Authorization: user_token seutokenusuario",
    "Content-Type: application/json",
    "Session-Token: sessaodeseutokenusuario"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}