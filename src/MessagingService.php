<?php

namespace Imskyyc\RbxcloudPhp;

class MessagingService {
    public function publishMessage(String $universeId, String $topic, String $token, String $message) 
    {
        $curlHandle = curl_init();

        curl_setopt($curlHandle, CURLOPT_URL, "https://apis.roblox.com/messaging-service/v1/universes/$universeId/topics/$topic");
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array("x-api-key: $token","Content-Type: application/json"));
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, json_encode(array(
            "message" => $message
        )));

        $response = curl_exec($curlHandle);

        curl_close($curlHandle);

        return $response;
    }
}