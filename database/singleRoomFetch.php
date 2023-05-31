<?php
    function getRoom($id){
        include './database/connection.php';
        $sql = "select * from rooms where room_id='$id'";
        $result = $conn->query($sql);
        $room = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
        return $room;
    }

    function getRelatedRooms($type){
        include './database/connection.php';
        $sql = "select * from rooms where room_type='$type'";
        $result = $conn->query($sql);
        $room = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
        return $room;
    }

    /*
    include './database/connection.php';
            $data = array(':id' => $id);
            $sql = 'select * from rooms where room_id=:id';
            $result = $conn->prepare($sql);
            $result->execute($data);
            $room = $result->fetch(PDO::FETCH_ASSOC);
            $conn->close();
            return $room;
    */
?>

