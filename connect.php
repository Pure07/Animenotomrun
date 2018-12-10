<?php

$db_name = "id3973330_lolicon";

$db_username = "id3973330_root1234";

$db_password = "root1234";

$db_host = "files.000webhost.com";


mysql_connect($db_host, $db_username, $db_password, $db_name);

mysql_select_db($db_name) or die (mysql_error());




    $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if (mysqli_connect_errno()) {
        die('Failed to connect to the server : '.mysqli_connect_error());
    }




?>
