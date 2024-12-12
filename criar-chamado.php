<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://enderecodoseuglpi/apirest.php/Ticket",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"input\": {\n    \"name\": \"Título do Chamado\",\n    \"content\": \"Descrição detalhada do chamado.\",\n    \"status\": 1,\n    \"urgency\": 3,\n    \"priority\": 2,\n    \"requester\": {\n      \"id\": 123\n    },\n    \"assignedto\": {\n      \"id\": id\n    }\n  }\n}",
  CURLOPT_HTTPHEADER => [
    "App-Token: tokendoglpi",
    "Authorization: user_token tokendousuario",
    "Content-Type: application/json",
    "Session-Token: sessaodousuario"
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