<?php

//$config = include 'config.php';
$config = include 'config-local.php';
$dbh = new PDO("mysql:host=" . $config['host'] . ";dbname=nick", $config['username'], $config['password']);
$sth = $dbh->prepare('select id, title from blog');
$sth->execute();
$posts = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
    <body>
        <table>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach($posts as $post):?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td><a href='edit.php?id=<?= $post['id'] ?>'>Edit</a></td>
                <td><a href='delete.php?id=<?= $post['id'] ?>'>Delete</a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>