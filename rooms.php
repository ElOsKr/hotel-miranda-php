<?php

    include './setup.php';
    include './DB/roomsMethods.php';

    global $rooms;

    if(isset($_GET['arrivalDate']) && isset($_GET['departureDate'])){
        $state = getAvailables($_GET['arrivalDate'], $_GET['departureDate']);
        if(!$state){
            $rooms = array("No rooms available between ". $_GET['arrivalDate'] . " and " . $_GET['departureDate'] . ". Displaying all rooms", getRooms());
        }else{
            $rooms = array("Rooms available between ". $_GET['arrivalDate'] . " and " . $_GET['departureDate'] , $state);
        }
    }else{
        $rooms = array('All rooms' , getRooms());
    }

    echo $blade->run('rooms',array('rooms' => $rooms));


?>