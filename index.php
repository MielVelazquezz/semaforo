<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semáforo</title>
</head>
<body>
    
<?php

$url = 'https://niloweb.com.br/transit-room/api/reg_endpoint.php';

$cUrl = curl_init();

curl_setopt($cUrl, CURLOPT_URL, $url);
curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cUrl);

$data = json_decode($response, true);

function defineCor($res) {

    switch ($res) {

        case 'L':
            return 'green'; 
        case 'B':
            return 'red'; 
        case 'A':
            return 'yellow'; 
        default:
            return 'black'; 

    }

}

foreach ($data as $entry) {

    $cor = defineCor($entry['res']);
    
    echo 
    "<body style='background-color: $cor; 
    width: 100%;
    height: 100vh; 
    display: flex;  
    justify-content: center; 
    align-items: center; 
    text-align: center;
    overflow-x: hidden;
    '>
    </body";
}

?>
</body>
</html>