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
<title> view Form </title>
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
 </tr>
 <?php
}
?>
</table>
</form>
</body>
</html>