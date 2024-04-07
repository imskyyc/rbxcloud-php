<?php

namespace Imskyyc\RbxcloudPhp;

class GameService {
    public static function getPlaceDetails(String $placeId, String $userCookie) 
    {
        $curlHandle = curl_init();

        curl_setopt($curlHandle, CURLOPT_URL, "https://games.roblox.com/v1/games/multiget-place-details?placeIds=$placeId");
        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, "Cookie: .ROBLOSECURITY=$userCookie");
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlHandle);

        curl_close($curlHandle);

        return $response;
    }
}