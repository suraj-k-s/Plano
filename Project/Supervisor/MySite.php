<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['sid'])){
  $updQry="update tbl_site set site_status='".$_GET['st']."' where site_id=".$_GET['sid'];
  if($conn->query($updQry)){
    ?>
    <script>
      alert('Updated')
      window.location="MySite.php";
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
<table align="center" width="200" border="1">
    <tr>
      <td>SLno</td>
      <td>Site ID</td>
      <td>Site Details</td>
      <td>Landmark</td>
      <td>Location</td>
      <td>Image</td>
      <td>Plotarea</td>
      <td>Site Estimate</td>
      <td>Site Sketchup</td>
      <td>Site Model</td>
      <td>Action</td>
    </tr>
    <?php
	$selQry="select * from tbl_site u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on p.district_id=d.district_id where supervisor_id=".$_SESSION['sid'];
	
	$res=$conn->query($selQry);
	$i=0;
	while($row=$res->fetch_assoc())
	{
		?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $row['site_id'] ?></td>
      <td><?php echo $row['site_details'] ?></td>
      <td><?php echo $row['site_landmark'] ?></td>
      <td><?php echo $row['district_name'] ," ,  ", $row['place_name'] ?></td>
      <td><a href="../Assets/Files/Request/Photo/<?php echo $row['site_image']?>" download>Download</a></td>
      <td><?php echo $row['site_plot'] ?></td>
      <td><?php if( $row['site_estimate']!=0){
		  echo $row['site_estimate'];
	      }?>
      </td>
      <?php if($row['site_status']>=4){?>
      <td><a href="../Assets/Files/SketchupGallery/Photo/<?php echo $row['site_sketchup']?>" download>Download</a></td>
      <td><a href="../Assets/Files/SitemodelGallery/Photo/<?php echo $row['site_model']?>" download>Download</a></td>
      <?php
	  }
	  else{
		  echo "<td></td><td></td>";
	  }
	  ?>
    <td> 
    <a href="Update.php?did=<?php echo $row['site_id']?>">Update</a><br>
    <?php
    if($row['site_status']==9){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=10">Site Preparation Completed
</a><br>
      <?php
    }
    else if($row['site_status']==10){
      echo "Hold the work until payment is complete";
    }
    else if($row['site_status']==12){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=13">Foundation Completed
</a><br>
      <?php
    }
    else if($row['site_status']==15){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=16">Framing Completed
</a><br>
      <?php
    }
    else if($row['site_status']==18){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=19">Rough Electrical, Plumbing, and HVAC
 Completed
</a><br>
      <?php
    }
    else if($row['site_status']==21){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=22">Interior Finishes
 Completed
</a><br>
      <?php
    }
    else if($row['site_status']==24){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=25">Final Electrical, Plumbing, and HVAC
Completed
</a><br>
      <?php
    }
    else if($row['site_status']==27){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=28">Landscaping and Exterior Work
Completed
</a><br>
      <?php
    }
    else if($row['site_status']==30){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=31">Cleaning and Punch List
Completed
</a><br>
      <?php
    }
    else if($row['site_status']==33){
      ?>
    <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=34">Finished
</a><br>
      <?php
    }
    ?>
    </td>
    </tr>
    <?php
	}
	?>  
  </table>
</body>
<?php
include("Foot.php");
?>
</html>