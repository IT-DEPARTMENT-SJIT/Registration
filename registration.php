<?php

$name=$_POST['name'];
$college=$_POST['college'];
$mail=$_POST['mail'];
$food=$_POST['food'];

$link=mysqli_connect("localhost","admin","admin","reg_details");
if(!($link))
{
  die(mysqli_connect_error());
}
$sql="insert into incognito values(' ','$name','$college','$mail','$food')";
if(mysqli_query($link,$sql))
{
    // $msg='Registered Succefully';
    // echo "<script>alert('$msg');</script>";
   // echo "<script> location.href='index.html'; </script>";
    // include 'index.html';
    // echo "<p>Registered Succefully</p>";
    // echo "<script>console.log('successnn')</script>";
    // echo "<script> lol(); </script>";
    //  </script>";
    echo "<p>Success</p>";
    echo "<a href='index.html'>home</a>";

}
else {
  // $msg='Data storing error';
  // echo "<script>alert('$msg');</script>";
  // echo "<script> location.href='index.html'; </script>";
  echo "<p>Error</p>";

}
mysqli_close($link);
 ?>
