<?php
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST['btn_save']))
{

$cname=$_POST['txt_name'];
$ccontact=$_POST['txt_contact'];
$cmail=$_POST['txt_mail'];
$caddress=$_POST['txt_address'];
$selQryw="update tbl_user set user_name='$cname', user_contact='$ccontact',user_email='$cmail', user_address='$caddress' where user_id=" .$_SESSION['uid'];

$conn->query($selQryw);
}

$selQry = "select * from tbl_user where user_id=".$_SESSION['uid'];
$res = $conn->query($selQry);
$row = $res->fetch_assoc();

?>
<?php
include("Head.php");
?>

<!DOCTYPE html>

<body>
<form name="form1" method="post" action="">
  <table width="458" height="215" border="1">
    <tr>
      <td width="232">CHANGE NAME</td>
      <td width="210"><label for="txt_changename"></label>
      <input type="text" name="txt_name" required="required" id="txt_changename" value="<?php echo $row['user_name']?>"></td>
    </tr>
    <tr>
      <td>CHANGE CONTACT</td>
      <td><label for="txt_changecontact"></label>
      <input type="text" name="txt_contact" required="required" id="txt_changecontact" value="<?php echo $row['user_contact']?>"></td>
    </tr>
    <tr>
      <td>CHANGE EMAIL</td>
      <td><label for="txt_changeemail"></label>
      <input type="email" name="txt_mail" required="required" id="txt_changeemail" value="<?php echo $row['user_email']?>"></td>
    </tr>
    <tr>
      <td>CHANGE ADDRESS</td>
      <td><label for="txt_changeaddress"></label>
      <input type="text" name="txt_address" required="required" id="txt_changeaddress" value="<?php echo $row['user_address']?>"></td>
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