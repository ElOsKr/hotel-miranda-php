<?php

    include './database/connection.php';

    function getRoom($id){
        global $conn;
        $data = array(':id' => $id);
        $sql = "select * from rooms where room_id=:id";
        $result = $conn->prepare($sql);
        $result->execute($data);
        $room = $result->fetchAll(PDO::FETCH_ASSOC);
        return $room;
    }

    function getRelatedRooms($type){
        global $conn;
        $data = array(':type' => $type);
        $sql = "select * from rooms where room_type=:type";
        $result = $conn->prepare($sql);
        $result->execute($data);
        $room = $result->fetchAll(PDO::FETCH_ASSOC);
        return $room;
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
            return null;
        }else{
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>

