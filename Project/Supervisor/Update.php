<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['txt_submit']))
{
	$updatetime=$_POST['txt_time'];
	$updatedetails=$_POST['txt_details'];
	$updateimage=$_FILES['ins_image']['name'];
    $tempphoto=$_FILES['ins_image']['tmp_name'];
	move_uploaded_file($tempphoto,'../Assets/Files/Update/Photo/'.$updateimage);
	$insQry="insert into tbl_update(update_date,update_time,update_details,update_image,site_id) values(curdate(),'".$updatetime."','".$updatedetails."','".$updateimage."','".$_GET['did']."')";
	if($conn->query($insQry))
	{
		?>
    <script>
      alert('Inserted')
      window.location="MySite.php"
      </script>
      <?php
	}
	else
	{
		?>
    <script>
      alert('Failed')
      window.location="MySite.php"
      </script>
      <?php
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
<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="">
  <table width="406" border="1">
    <tr>
      <td>Time</td>
      <td><label for="txt_time"></label>
      <input type="time" required="required" name="txt_time" id="txt_time" /></td>
    </tr>
    <tr>
      <td>Details</td>
      <td><label for="txt_details"></label>
      <textarea name="txt_details" required="required" id="txt_details" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
     <td>Image</td>
    <td><label for="image"></label>
      <input type="file" name="ins_image" id="ins_image"  required="required"  autocomplete="off"/></td>
  </tr>
     <td colspan="2" align="center"><label for="txt_submit"></label>
      <input type="submit" name="txt_submit" id="txt_submit"value="Update" /></td>
    </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
?>
</html>