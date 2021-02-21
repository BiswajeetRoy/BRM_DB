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
<title> Deletion Form </title>
<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
<h1> Book Record Management </h1>
<form action ="deletion.php" method="post">
<table id="a1">
<tr>
<th> BooK Id </th>
<th> TITLE </th>
<th> PRICE </th>
<th> AUTHOR   </th>
<th> Select to delete </th>
</tr>

<?php
for ($i=1; $i<=$num; $i++)
{
    $row=mysqli_fetch_array($results);
?>
<tr>
 <td><?php echo $row['bookid']; ?> </td>
 <td><?php echo $row['title']; ?> </td>
 <td><?php echo $row['price']; ?> </td>
 <td><?php echo $row['author']; ?> </td>
 <td><input type="checkbox" value="<?php echo $row ['bookid']; ?>"  name="b<?php echo $i; ?>" /> </td>
 </tr>
 <?php
}
?>
<tr>
<td colspan="5"><input type="submit" value ="delete" /> </td>
</tr>
</table>
</form>
</body>
</html>