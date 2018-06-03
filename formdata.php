<?php
         $dbhost = 'localhost:3302';
         $dbuser = 'root';
         $dbpass = 'root';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
?>