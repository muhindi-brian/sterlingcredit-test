<?php
$endpoint = 'https://backgen.net/api/v1/users/info';
$data = array(
    'fullname' => 'Brian Muhindi Mwangi',
    'email' => 'brianmuhindi.job@gmail.com',
    'technical_skills' => 'Nodejs, MERN Stack, Python',
    'soft_skills' => 'consistency, listening skills, empathy'
);
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsImlhdCI6MTY4MjQ5MjU1NywiZXhwIjoxNjgzMDk3MzU3fQ.Dm1CHdcvC9_wDcZswR8xsAdHHqc9c55ivEeCU9Qk_E4'
);

$curl = curl_init($endpoint);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

echo "Response code: $status_code\n";
echo "Response body: $response\n";
?>
