<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_POST['btn_update']))
{
    $selQry = "select * from tbl_user where user_id=" . $_SESSION['uid'];
    $res = $conn->query($selQry);
    $row = $res->fetch_assoc();
    
    $OLD=$_POST['txt_oldpass'];
    $NEW=$_POST['txt_newpass'];
    $CRM=$_POST['txt_confirmpass'];
    if($row['user_password']==$OLD){
      
       if($NEW==$CRM){
      
        $insQR="update tbl_user set user_password='$NEW' where user_id='". $_SESSION['uid']."'";
        $res = $conn->query($insQR);


       
       }
       else{
        echo "Invalid New Password";
       }
	     }
       else{
        echo "Invalid current Password";
       }


    }
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
<form id="form1" name="form1" method="post" action="">
  <table width="431" border="1">
    <tr>
      <td width="246">OLD PASSWORD</td>
      <td width="169"><label for="txt_oldpass"></label>
      <input type="password" name="txt_oldpass" id="txt_oldpass" required="required" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /></td>
    </tr>
    <tr>
      <td>NEW PASSWORD</td>
      <td><label for="txt_newpass"></label>
      <input type="password" name="txt_newpass" id="txt_newpass" required="required" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /></td>
    </tr>
    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><label for="txt_confirmpass"></label>
      <input type="password" name="txt_confirmpass" id="txt_confirmpass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="btn_update"></label>
      <input type="submit" name="btn_update" id="btn_update" value="UPDATE" /></td>
    </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
?>
</html>