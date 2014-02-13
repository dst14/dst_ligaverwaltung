<?php
/**
 * Created by PhpStorm.
 * User: dst14
 * Date: 06.02.14
 * Time: 13:28
 */

function getLngLat($address="Germany+Gießen") {
    $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Germany";
    $fetchlatlng = curl_init();
    curl_setopt($fetchlatlng, CURLOPT_URL, $url);
    curl_setopt($fetchlatlng, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($fetchlatlng);
    curl_close($fetchlatlng);
    $latlng = json_decode($response);
    echo $lat = $latlng>results[0]->geometry->location->lat;
    echo "<br />";
    echo $long = $latlng->results[0]->geometry->location->lng;
}

echo getLngLat();

?>