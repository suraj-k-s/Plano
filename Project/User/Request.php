<?php
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['txt_submit']))
{
	$sitedetails=$_POST['txt_sitedetails'];
	$sitelandmark=$_POST['txt_landmark'];
	$userplaceid=$_POST['txt_place'];
	$userphoto=$_FILES['ins_photo']['name'];
    $tempphoto=$_FILES['ins_photo']['tmp_name'];
	$plotarea=$_POST['txt_plot'];
	move_uploaded_file($tempphoto,'../Assets/Files/Request/Photo/'.$userphoto);
	$insQry="insert into tbl_site(site_details,site_landmark,place_id,site_image,site_plot,user_id,request_date) values('".$sitedetails."','".$sitelandmark."','".$userplaceid."','".$userphoto."','".$plotarea."','".$_SESSION['uid']."',curdate())";
	
	if($conn->query($insQry))
	{
		?>
    <script>
      alert('Request Send Succcessfully')
      window.location="MySite.php"
      </script>
    <?php
	}
	else
	{
		?>
    <script>
      alert('Request Failed')
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
  <table align="center" width="304" border="1">
    <tr>
      <td width="114">Site Details</td>
      <td width="174"><label for="txt_site"></label>
        <label for="txt_sitedetails"></label>
      <textarea name="txt_sitedetails" id="txt_sitedetails" cols="45" rows="5" required="required" ></textarea></td>
    </tr>
    <tr>
      <td>Landmark</td>
      <td><label for="txt_landmark"></label>
      <input type="text" name="txt_landmark" id="txt_landmark" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="txt_district"></label>
      <select name="txt_district" id="txt_district" onchange="getPlace(this.value)" required >
      <option value="">SELECT DISTRICT</option>
      <?php
	  $selQry="select * from tbl_district";
	  $res= $conn->query($selQry);
	  while($row =$res->fetch_assoc()){
	  ?>
      <option value="<?php echo $row['district_id']?>"><?php echo $row['district_name']?></option>
      <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txt_place"></label>
      <select name="txt_place" id="txt_place">
      <option value="">---SELECT PLACE---</option>
      <td>
      </select></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><label for="photo"></label>
      <input type="file" name="ins_photo" id="ins_photo" required="required" /></td>
    </tr>
    <tr>
      <td>Plot Area</td>
      <td><label for="txt_plot"></label>
      <input type="text" name="txt_plot" id="txt_plot" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="txt_submit"></label>
      <input type="submit" name="txt_submit" id="txt_submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
 function getPlace(did){
	 $.ajax({
		 url:"../Assets/AjaxPages/AjaxPlace.php?did="+did,
		 success: function(html){
			 $("#txt_place").html(html);
		 }
	 })
 }
 </script>
</body>
<?php
include("Foot.php");
?>
</html>