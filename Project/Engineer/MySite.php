<?php
session_start();
include("../Assets/Connection/Connection.php");
?>
<?php
include("Head.php");
if(isset($_GET['sid'])){
	$updQry="update tbl_site set site_status='".$_GET['st']."' where site_id=".$_GET['sid'];
	if($conn->query($updQry)){
	  ?>
	  <script>
		alert('Updated')
		</script>
		<?php
	}
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table width="200" border="1">
    <tr>
      <td>SLno</td>
      <td>Site Details</td>
      <td>Landmark</td>
      <td>Location</td>
      <td>Image</td>
      <td>Plotarea</td>
      <td>User Name</td>
      <td>Status</td>
      <td>Action</td>
    </tr>
    <?php
	$selQry="select * from tbl_site s inner join tbl_place p on p.place_id=s.place_id inner join tbl_district d on p.district_id=d.district_id inner join tbl_user u on u.user_id=s.user_id where site_status>0 and engineer_id=".$_SESSION['eid'];
	$res=$conn->query($selQry);
	$i=0;
	while($row=$res->fetch_assoc())
	{
		?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $row['site_details'] ?></td>
      <td><?php echo $row['site_landmark'] ?></td>
      <td><?php echo $row['district_name'] ,"   ", $row['place_name'] ?></td>
      <td>
	  <a href="../Assets/Files/Request/Photo/<?php echo $row['site_image']?>" target="_blank">View Photo</a>
	  </td>
      <td><?php echo $row['site_plot'] ?></td>
      <td><?php echo $row['user_name'] ?></td>
      <td>
	  <?php
	  
	   if($row['site_status']==1)
	   {
		   echo "Work Approved";
	   }
	   elseif($row['site_status']==3)
	   {
		   echo "Upload Sketch and model";
	   }
	   
	    elseif($row['site_status']==4)
	   {
		   echo "User Decision pending";
	   }
	    elseif($row['site_status']==5)
	   {
		   echo "User Accepted the Sketch and Model";
	   }
	    elseif($row['site_status']==6)
	   {
		   echo "User Rejected the Sketch and Model";
		   echo "<br>Reconsideration Required";
	   }
	    elseif($row['site_status']==7)
	   {
		   echo "Supervisor Assigned";
	   }
	   else if($row['site_status']==34)
	   {
		   echo "Supervisor Finished Work";
	   }
	   ?></td>
      <td>
		<?php
			if($row['site_status']==3 || $row['site_status']==6){
				?>
     <a href="EngineerReq.php?sid=<?php echo $row['site_id']?>">Engineer Requirements </a>
				<?php
			}
			if($row['site_status']==34){
				?>
				<a href="MySite.php?sid=<?php echo $row['site_id']?>&st=35">Finished</a>
				<?php
			}
		?>
      </td>
    </tr>
    
    <?php
	}
	?>
    </table>
    </form>
</body>
<?php
include("Foot.php");
?>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function assignEng(sid){
	
	var eid = document.getElementById('selEng').value;
	alert(sid)
	$.ajax({
		 url:"../Assets/AjaxPages/AjaxAssignEng.php?eid="+eid+"&&sid="+sid,
		 success: function(html){
			 alert(html)
		 }
	 })
}
</script>
</html>