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

    if(!isset($_GET['id'])){
        header("Location: rooms");
        die();
    }

    $roomFetched = getRoom($_GET['id'])[0];

    $roomType = $roomFetched['room_type'];

    $related = getRelatedRooms($roomType);

    global $availability;

    $availability = null;

    if(isset($_POST['checkIn']) && isset($_POST['checkOut'])){

        global $availability;

        if($_POST['checkIn']>$_POST['checkOut']){
            $availability = "check date error";
        }else{
            $availables = getAvailables($_POST['checkIn'],$_POST['checkOut']);

            if(($availables)){
                foreach($availables as $key => $val){
                    if($val['room_id']===$_GET['id']){
                        $availability = "available";
                        break;
                    }
                }
            }else{
                $availability = "not available";
            }            
        }
    }

    echo $blade->run('roomDetails',array('room' => $room = $roomFetched, 'amenities' => $amenities = $roomAmenities, 'relatedRooms' => $relatedRoom = $related, 'availability' => $availability))

?>