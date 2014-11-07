<html>
<body>
<?php
include('config.php');
$query1=mysql_query("select id, title, content from blog");
echo "<table><tr><td>ID</td><td>Title</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['title']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>Delete</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>