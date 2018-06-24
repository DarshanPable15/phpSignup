<html>
<head><title> Display.php </title></head>
<body bgcolor="aabbcc">
<?php
var_dump($_REQUEST);
$fname=$_POST['fname'];
 
$lname=$_POST['lname'];
 
$psswd=$_POST['psswd'];
 
$db = mysqli_connect('localhost','darshan','k48vQgqqBovzyMUQ','phpcon');
 
$query= 'insert into data values("'.$fname.'","'.$lname.'","'.$psswd.'")';
$enter= mysqli_query($db,$query);
 
$query='SELECT fname,lname from data';
$result=mysqli_query($db,$query);
?>
 
<h3> Page to display the stored data </h3>
 
<table border="1">
<tr>
<th> FNAME </th>
<th> LNAME </th>
</tr>
 
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<td><?php echo $array[0];?></td>
<td><?php echo $array[1];?></td>
</tr>
<?php endwhile; ?>
<?php mysqli_free_result($result); ?>
<?php mysqli_close($db); ?>
</table>
</body>
</html>