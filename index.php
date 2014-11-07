

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {


    /*     * * mysql hostname ** */
    $hostname = 'panic.edcor.com';

    /*     * * mysql username ** */
    $username = 'nick';

    /*     * * mysql password ** */
    $password = 'nickpassword';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=nick", $username, $password);
        /*         * * echo a message saying we have connected ** */
        echo 'Connected to database<br />';

        /*         * * INSERT data ** */
        $stmt = $dbh->prepare("INSERT INTO blog(title, content) VALUES (?,?)");
        $stmt->bindParam(1,$title);
        $stmt->bindParam(2,$value);
        
        $title = $_POST[title];
        $value = $_POST[content];
        $stmt->execute();
        


        /*         * * echo the number of affected rows ** */
        //echo $stmt;

        /*         * * close the database connection ** */
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
<!doctype html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>blog addition</title>
    </head>
    <body>
        <h1>Add to the blog</h1>
      <form method="post">     
          Title: <input type="text" name="title" /><br><br>
          Content: <input type="text" name="content" style="width:700px; height:400px; " /><br><br>

<input type="Submit" /></form>
    </body>
</html>
