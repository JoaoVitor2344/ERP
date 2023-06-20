<?php 

function requestGET($url) {
    $url = $_ENV['URL']."/api/$url";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    if($error) {
        return $error;
    } else {
        return json_decode($response);
    }
}

function requestPOST($url, $jsonData) {
    $curl = curl_init();

    $url = $_ENV['URL']."/api/$url";
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ));
    
    $response = curl_exec($curl);
    $error = curl_error($curl);
    
    if ($error) {
        return $error;
    } else {
        return json_decode($response);
    }
    
    // Fechar a sessão cURL
    curl_close($curl);   
}

function requestPUT($url, $jsonData) {
    $curl = curl_init();

    $url = $_ENV['URL']."/api/$url";
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ));
    
    $response = curl_exec($curl);
    $error = curl_error($curl);
    
    if ($error) {
        return $error;
    } else {
        return json_decode($response);
    }
    
    // Fechar a sessão cURL
    curl_close($curl);   
}

?>