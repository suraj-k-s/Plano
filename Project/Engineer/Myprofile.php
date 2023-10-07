<?php
include("../Assets/Connection/Connection.php");
session_start();
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
<table align="center" width="200" border="1">
<tr>
<td>Name</td>
<td>Contact</td>
<td>Email</td>
<td>Gender</td>
<td>Address</td>
<td>District</td>
<td>Place</td>
<td>Photo</td>
</tr>
<?php
$selQry="select * from tbl_engineer u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on p.district_id=d.district_id where engineer_id=".$_SESSION['eid'];
$res=$conn->query($selQry);
$row=$res->fetch_assoc();
?>
     <tr>
      <td><?php echo $row['engineer_name'] ?></td>
      <td><?php echo $row['engineer_contact'] ?></td>
      <td><?php echo $row['engineer_email'] ?></td>
      <td><?php echo $row['engineer_gender'] ?></td>
      <td><?php echo $row['engineer_address'] ?></td>
      <td><?php echo $row['district_name'] ?></td>
      <td><?php echo $row['place_name'] ?></td>
      <td><img src="../Assets/Files/Engineer/Photo/<?php echo $row['engineer_photo']?>" height="300" /></td>

     
    </tr>


</table>
</body>
<?php
include("Foot.php");
?>
</html>