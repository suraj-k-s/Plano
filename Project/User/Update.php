<?php
session_start();
include("../Assets/Connection/Connection.php");
?>
<?php
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
    $selQry="select * from tbl_update where site_id=".$_GET['dide'];
    $res=$conn->query($selQry);
	$i=0;
	while($row=$res->fetch_assoc())
    {
    ?>
<table width="200" border="1">
    <tr>
      <td>SL No</td>
      <td>Date</td>
      <td>Time</td>
      <td>Details</td>
      <td>Image</td>
</tr>
<tr>
<td><?php echo ++$i ?></td>
<td><?php echo $row['update_date'] ?></td>
<td><?php echo $row['update_time'] ?></td>
<td><?php echo $row['update_details'] ?></td>
<td><img src="../Assets/Files/Update/Photo/<?php echo $row['update_image']?>" height="300" /></td>
<?php

    }
?>
</tr>
</table>
</body>
<?php
include("Foot.php");
?>
</html>