<?php

    include './database/connection.php';

    function getRooms(){
        global $conn;
        $sql = 'select * from rooms';
        $result = $conn->query($sql);
        $rooms = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rooms;
    }

    function get4Rooms(){
        global $conn;
        $sql = 'select * from rooms limit 4';
        $result = $conn->query($sql);
        $rooms = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rooms;
    }

    function getAvailables($checkin, $checkout){
        global $conn;
        $data = array(':checkIn' => $checkin , ':checkOut' => $checkout);
        $sql = "
        select * from rooms 
        where room_id not in(select room_id from bookings where
                            booking_checkin > :checkIn and booking_checkin < :checkOut or
                            booking_checkout > :checkIn and booking_checkout < :checkOut or
                            booking_checkin > :checkIn and booking_checkout < :checkOut or
                            booking_checkin < :checkIn and booking_checkout > :checkOut
                        )
        ";

        $result = $conn->prepare($sql);
        $result->execute($data);

        $state = $result->rowCount();

        if($state === 0){
            return "No rooms available";
        }else{
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>