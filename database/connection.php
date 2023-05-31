<pre>
<?php

    require_once './database//db-config.php';

    $host = constant("DB_HOST");
    $user = constant("DB_USER");
    $password = constant("DB_PASSWORD");
    $database = constant("DB_DATABASE");

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
</pre>