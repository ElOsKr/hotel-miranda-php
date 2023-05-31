<?php
    function getOffers(){
        include './database/connection.php';
        $sql = 'select * from rooms order by room_offer desc limit 5';
        $result = $conn->query($sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
        return $rooms;
    }

    function getPopulars(){
        include './database/connection.php';
        $sql = 'select * from rooms limit 5';
        $result = $conn->query($sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
        return $rooms;
    }

?>