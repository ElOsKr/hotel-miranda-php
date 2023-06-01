<?php

    include './setup.php';
    include './database/singleRoomFetch.php';

    $roomAmenities = [
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

    $roomFetched = getRoom($_GET['id'])[0];

    $roomType = $roomFetched['room_type'];

    $related = getRelatedRooms($roomType);

    echo $blade->run('roomDetails',array('room' => $room = $roomFetched, 'amenities' => $amenities = $roomAmenities, 'relatedRooms' => $relatedRoom = $related))

?>