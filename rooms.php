<?php

    include './setup.php';
    include './database/roomsFetch.php';

    echo $blade->run('rooms',array('rooms' => $rooms = getRooms()));


?>