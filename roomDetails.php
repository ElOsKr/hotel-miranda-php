<?php

    include './setup.php';
    include './database/singleRoomFetch.php';

    echo $blade->run('roomDetails',array('room' => $room = getRoom($_GET['id'])[0]))

?>