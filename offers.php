<?php

include './setup.php';
include './database/offersFetch.php';

$amenities = [
    "security" => "Smart Security",
    "team" => "Expert Team", 
    "support" => "24/7 online support",
    "key" => "Strong locker",
    "towels" => "Towels",
    "bed" => "Single Bed",
    "shower" => "Shower",
    "kitchen" => "Kitchen",
    "wifi" => "High Speed Wifi",
    "shop" => "Shop Near",
    "grocery" => "Grocery",
    "cleaning" => "Cleaning",
    "breakfast" => "Breakfast",
    "air" => "Air Conditioner",
];

echo $blade->run('offers',array('offers' => $offers = getOffers(),'populars' => $populars = getPopulars(),'amenities' => $amenities));

?>