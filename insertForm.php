<!DOCTYPE html>
<html>
<head>
<title> insertion Form </title>
</head>
<body>
<h1> Book Record Management </h1>
<form action="insertion.php" method="POST">
<table> 
<tr>
<th>Title</th>
<td><input type="text" name ="title" require > </td>
</tr>
<tr>
<th>Price</th>
<td><input type="number" name ="price" require /> </td>
</tr>
<tr>
<th>Author</th>
<td><input type="text" name ="author" require /> </td>
</tr>
<tr>
<th></th>
<td><input type="submit" value ="insert" /> </td>
</tr>
</table>
</form>
</body>
</html>