<?php
/*** mysql hostname ***/
$hostname = 'panic.edcor.com';

/*** mysql username ***/
$username = 'nick';

/*** mysql password ***/
$password = 'nickpassword';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=nick", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO blog(title, content) VALUES ('$_POST[title]','$_POST[content]')");

    /*** echo the number of affected rows ***/
    echo $count;

    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
