<?php

namespace Imskyyc\RbxcloudPhp;

class GameService {
    public static function getPlaceDetails(String $placeId) 
    {
        $curlHandle = curl_init();

        curl_setopt($curlHandle, CURLOPT_URL, "https://games.roblox.com/multiget-place-details?placeIds=$placeId");
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlHandle);

        curl_close($curlHandle);

        return $response;
    }
}