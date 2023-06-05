<?php

    include './setup.php';
    include './database/roomsFetch.php';

    echo $blade->run('index',array('rooms' => $rooms = get4Rooms()))

?>