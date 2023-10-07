<?php
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST['btn_save']))
{

$cname=$_POST['txt_name'];
$ccontact=$_POST['txt_contact'];
$cmail=$_POST['txt_mail'];
$caddress=$_POST['txt_address'];
$selQryw="update tbl_engineer set engineer_name='$cname', engineer_contact='$ccontact',engineer_email='$cmail', engineer_address='$caddress' where engineer _id=" .$_SESSION['eid'];

$conn->query($selQryw);
}

$selQry = "select * from tbl_engineer  where engineer_id=".$_SESSION['eid'];
$res = $conn->query($selQry);
$row = $res->fetch_assoc();

?>
<?php
include("Head.php");
?>
<!DOCTYPE html>

<body>
<form name="form1" method="post" action="">
  <table align="center" width="458" height="215" border="1">
    <tr>
      <td width="232">CHANGE NAME</td>
      <td width="210"><label for="txt_changename"></label>
      <input type="text" name="txt_name" required="required" id="txt_changename" value="<?php echo $row['engineer_name']?>"></td>
    </tr>
    <tr>
      <td>CHANGE CONTACT</td>
      <td><label for="txt_changecontact"></label>
      <input type="text" name="txt_contact" required="required" id="txt_changecontact" value="<?php echo $row['engineer_contact']?>"></td>
    </tr>
    <tr>
      <td>CHANGE EMAIL</td>
      <td><label for="txt_changeemail"></label>
      <input type="email" name="txt_mail" required="required" id="txt_changeemail" value="<?php echo $row['engineer_email']?>"></td>
    </tr>
    <tr>
      <td>CHANGE ADDRESS</td>
      <td><label for="txt_changeaddress"></label>
      <input type="text" name="txt_address" required="required" id="txt_changeaddress" value="<?php echo $row['engineer_address']?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="SAVE"></td>
    </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
?>