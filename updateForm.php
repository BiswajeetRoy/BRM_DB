<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db ($con,'brm_db');
$q="select * from book";
$results=mysqli_query($con, $q);
$num=mysqli_num_rows($results);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title> update Record </title>
<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
<h1> Book Record Management </h1>
<form action ="updation.php" method="post">
<table id="a1">
<tr>
<th> BooK Id </th>
<th> TITLE </th>
<th> PRICE </th>
<th> AUTHOR   </th>
</tr>

<?php
for ($i=1; $i<=$num; $i++)
{
    $row=mysqli_fetch_array($results);
?>
<tr>
 <td><?php echo $row['bookid']; ?>
<input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row ['bookid']; ?>" /></td>
 <td><input type="text" name="title<?php echo $i; ?>" value ="<?php echo $row['title']; ?>" /> </td>
 <td><input type="text" name="price<?php echo $i; ?>" value ="<?php echo $row['price']; ?>" /> </td>
 <td><input type="text" name="author<?php echo $i; ?>" value ="<?php echo $row['author']; ?>" /> </td>
 </tr>
 <?php
}
?>
<tr>
<td colspan="5">
<input type="submit" value="update" />
</td>
</tr>
</table>
</form>
</body>
</html>