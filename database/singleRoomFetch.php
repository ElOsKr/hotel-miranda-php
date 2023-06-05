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
?>

