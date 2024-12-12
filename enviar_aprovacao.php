<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://enderecodoseuglpi/apirest.php/TicketValidation/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n    \"input\": {\n        \"tickets_id\": \"numerodochamado\",\n        \"users_id_validate\": \"iddousuario\",\n        \"comment_submission\": \"Ticket aprovado pelo grupo de técnicos.\"\n    }\n}\n",
  CURLOPT_HTTPHEADER => [
    "App-Token: tokendoseuglpi",
    "Authorization: user_token tokendoseuusuario",
    "Content-Type: application/json",
    "Session-Token: sesssaodoseuusuario"
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