
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

    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM blog";
    foreach ($dbh->query($sql) as $row)
        {
        print $row['title'] .' - '. $row['content'] . '<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>

<?= $username ?>

