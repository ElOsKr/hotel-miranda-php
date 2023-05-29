<pre>
<?php

    $conn = new mysqli('localhost', 'root', '', 'mirandahotel');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
</pre>