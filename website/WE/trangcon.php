<?php 
$servername = "localhost";
$username = "root";
$con = new PDO("mysql:host=$servername; dbname=banpc","$username","");
$sta = $con->query('select * from admin');
?>
<table border="1">
<tr>
<th>ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th> 
<th>Xóa</th> 
<td>thêm</td>
</tr>
<?php
while($row = $sta->fetch()) {
?>
<tr>
<td><?php echo $row['4']; ?></td>
<td><?php echo $row['trun']; ?></td>
<td><?php echo $row['f3']; ?></td>
<td><?php echo $row['f4']; ?></td>
<td><a href="deleteuser.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">Xóa</a></td>
</tr>
<?php 
}
?>
</table>

 ?>