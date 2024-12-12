<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://enderecoseuglpi/apirest.php/user",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n    \"input\": {\n        \"name\": \"id\",\n        \"realname\": \"Sobrenome\",\n        \"firstname\": \"Nome\",\n        \"password\": \"senha_segura123\",\n        \"email\": \"email@dominio.com\",\n        \"phone\": \"123456789\",\n        \"locations_id\": 1,\n        \"profiles_id\": 2\n    }\n}\n",
  CURLOPT_HTTPHEADER => [
    "App-Token: tokendoseuglpi",
    "Authorization: user_token tokendoseuusuario",
    "Content-Type: application/json",
    "Session-Token: sessaodoseusuario"
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