<?php

    include './setup.php';
    include './DB/roomsMethods.php';

    echo $blade->run('index',array('rooms' => $rooms = get4Rooms()))

?>