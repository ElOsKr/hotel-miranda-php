<?php
    include './database/connection.php';
    
    function getOffers(){
        global $conn;
        $sql = 'select * from rooms order by room_offer desc limit 5';
        $result = $conn->query($sql);
        $rooms = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rooms;
    }

    function getPopulars(){
        global $conn;
        $sql = 'select * from rooms limit 5';
        $result = $conn->query($sql);
        $rooms = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rooms;
    }

?>