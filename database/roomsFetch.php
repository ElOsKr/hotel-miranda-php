<?php
    function getRooms(){
        include './database/connection.php';
        $sql = 'select * from rooms';
        $result = $conn->query($sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
        return $rooms;
    }

?>