<?php


    $database   = "panos";
    $user       = "root" ;
    $password   = "secret";
    $host       = "mysql";


    try  {

        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        echo "<p>Database \"{$database}\" is running</p>";

    }
    catch(Exception $e) {

        echo "<p>Connection with \"{$database}\" is down at the moment.</p>";
    }

?>
