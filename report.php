<?php

$link=mysqli_connect("localhost","#","#","#");
if(!$link)
{
  die(mysqli_connect_error());
}
$sql_veg="select count(*) as vegcnt from incognito where food='veg'";
$res=mysqli_query($link,$sql_veg);
$result=$res->fetch_assoc();
?>
<table border="1">
  <tr>
    <th>Veg<th>
      <th>  <?php echo $result['vegcnt'] ?>
      </th>
  </tr>
</table>
  <?php
// echo $result['vegcnt'];
  echo "<br>";
$sql_nonveg="select count(*) as cnt from incognito where food='non_veg'";
$res=mysqli_query($link,$sql_nonveg);
$result=$res->fetch_assoc();
?>
<table border="1">
  <tr>
    <th>Non-Veg<th>
      <th>  <?php echo $result['cnt'] ?>
      </th>
  </tr>
</table>
  <?php
// echo $result['cnt'];
// echo "<br>";
$sql="select * from incognito order by college,name";
$c=1;
$res=mysqli_query($link,$sql);
?>
<table border="1">
  <tr>
    <th>s_no</th>
    <th>name</th>
    <th>college</th>
    <th>email</th>
    <th>food</th>
  </tr>
<?php
while($result=$res->fetch_assoc())
{
  echo "<tr>";
  echo "<td>".$c."</td>";
  echo "<td>".$result['name']."</td>";
  echo "<td>".$result['college']."</td>";
  echo "<td>".$result['mail']."</td>";
  echo "<td>".$result['food']."</td>";
  echo "<tr>";
  $c=$c+1;


}

 ?>
