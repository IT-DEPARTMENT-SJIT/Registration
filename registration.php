<?php

$name=$_POST['name'];
$college=$_POST['college'];
$mail=$_POST['mail'];
$food=$_POST['food'];

$link=mysqli_connect("localhost","#","#","#");
if(!($link))
{
  die(mysqli_connect_error());
}
$sql="insert into incognito values(' ','$name','$college','$mail','$food')";
if(mysqli_query($link,$sql))
{
    echo "<p>Success</p>";
    echo "<a href='index.html'>home</a>";

}
else {
  
  echo "<p>Error</p>";

}
mysqli_close($link);
 ?>
