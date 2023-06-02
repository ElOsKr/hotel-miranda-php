<?php

    include './database/connection.php';

    function getRooms(){
        global $conn;
        $sql = 'select * from rooms';
        $result = $conn->query($sql);
        $rooms = $result->fetchAll();
        return $rooms;
    }

?>