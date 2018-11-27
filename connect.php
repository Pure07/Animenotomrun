<?php

$db_name = "test";

$db_username = "root";

$db_password = "root";

$db_host = "localhost";


mysql_connect($db_host, $db_username, $db_password, $db_name);

mysql_select_db($db_name) or die (mysql_error());




    $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if (mysqli_connect_errno()) {
        die('Failed to connect to the server : '.mysqli_connect_error());
    }




?>