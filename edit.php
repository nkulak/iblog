<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$content=$_POST['content'];
$query3=mysql_query("update blog set title='$title', content='$content' where id='$id'");
if($query3)
{
header('location:editList.php');
}
}
$query1=mysql_query("select * from blog where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Title:<input type="text" name="title" value="<?php echo $query2['title']; ?>" /><br />
Content:<input type="text" name="content" style="width:700px; height:400px" value="<?php echo $query2['content']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>