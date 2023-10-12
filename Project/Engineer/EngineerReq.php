<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{   $siteestimate=$_POST['txt_siteestimate'];
	$sitesketchup=$_FILES['txt_sitesketchup']['name'];
	$sitemodel=$_FILES['txt_sitemodel']['name'];
	$tempphoto=$_FILES['txt_sitesketchup']['tmp_name'];
	$tempphoto2=$_FILES['txt_sitemodel']['tmp_name'];
	move_uploaded_file($tempphoto,'../Assets/Files/SketchupGallery/Photo/'.$sitesketchup);
	move_uploaded_file($tempphoto2,'../Assets/Files/SitemodelGallery/Photo/'.$sitemodel);
	$insQry="update tbl_site set site_estimate='".$siteestimate."',site_sketchup='".$sitesketchup."',site_model='".$sitemodel."',site_status=4 where site_id=".$_GET['sid'];
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" width="200" border="1">
    <tr>
      <td width="124">Site Estimate</td>
      <td width="60"><label for="txt_siteestimate"></label>
      <input type="text" name="txt_siteestimate" required="required" id="txt_siteestimate" /></td>
    </tr>
    <tr>
      <td>Site Sketchup</td>
      <td><label for="txt_sitesketchup"></label>
      <input type="file" name="txt_sitesketchup" required="required" id="txt_sitesketchup" /></td>
    </tr>
    <tr>
      <td>Site Model</td>
      <td><label for="txt_sitemodel"></label>
      <input type="file" name="txt_sitemodel" required="required" id="txt_sitemodel" /></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
  </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
?>
</html>