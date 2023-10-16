<?php
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['sid'])){
  $updQry="update tbl_site set site_status='".$_GET['st']."' where site_id=".$_GET['sid'];
  if($conn->query($updQry)){
    ?>
    <script>
      alert('Updated')
      window.location="MySite.php"
      </script>
      <?php
  }
}
if(isset($_GET['did']))
{
	$delQry="update tbl_site set site_status=5 where site_id=".$_GET['did'];
	if($conn->query($delQry))
	{
		 ?>
         <script>
         alert("Updated")
         </script>
         <?php
	}
	else
	 {?>
         <script>
         alert("Failed")
         </script>
         <?php
	 }
}
if(isset($_GET['dido']))
{
	$delQryw="update tbl_site set site_status=6 where site_id=".$_GET['dido'];
	if($conn->query($delQryw))
	{
		 ?>
         <script>
         alert("Updated")
         </script>
         <?php
	}
	else
	 {?>
         <script>
         alert("Failed")
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
  <div class="container">
<table class='table table-responsive' align="center" border="1">
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
      <td>Status</td>
      <td>Action</td>
      <td>Daily Updates</td>
      <td>Payment</td>
    </tr>
    <?php
	$selQry="select * from tbl_site u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on p.district_id=d.district_id where user_id=".$_SESSION['uid'];
 
	
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
      <td><a href='../Assets/Files/Request/Photo/<?php echo $row['site_image']?>' target='_blank'>View Photo</a></td>
      <td><?php echo $row['site_plot'] ?></td>
      <td><?php if( $row['site_estimate']!=0){
		  echo $row['site_estimate'];
	      }?>
      </td>
      <?php if($row['site_status']>=4){?>
      <td><a href="../Assets/Files/SketchupGallery/Photo/<?php echo $row['site_sketchup']?>" target='_blank'>View Sketch</a></td>
      <td><a href="../Assets/Files/SitemodelGallery/Photo/<?php echo $row['site_model']?>" target='_blank'>View Model</a></td>
      <?php
	  }
	  else{
		  echo "<td></td><td></td>";
	  }
	  ?>
      <td>
	  <?php
	   if($row['site_status']==0)
	   {
		   echo "Request Send";
	   }
	   else if($row['site_status']==1){
		   echo "Project Accepted";
	   }
	   else if($row['site_status']==2){
		   echo "Project Rejected";
	   }
	   else if($row['site_status']==3){
		   if($row['site_status']>=3)
	   {
		  $gry="select * from tbl_engineer where engineer_id=".$row['engineer_id'];
      $res3=$conn->query($gry);
      $row2=$res3->fetch_assoc();
      echo "Engineer: ".$row2['engineer_name']." ";
	   }
		   
		   echo "Assigned";
	   }
	   
	   else if($row['site_status']==4){
		   
		  $gry="select * from tbl_engineer where engineer_id=".$row['engineer_id'];
      $res3=$conn->query($gry);
      $row2=$res3->fetch_assoc();
      echo "Engineer: ".$row2['engineer_name']." ";
		   echo " Uploaded The Sketch and Model";
	   }
	   else if($row['site_status']==5){
		   echo "<br> The Sketch and Model:Accepted";
		   echo "<br>Paymet Pending";
		   
	   }
	    else if($row['site_status']==6){
		   echo " Sketch and Model: Rejected ";
		   echo "Under Reconsideration";
		   
	   }
     else if($row['site_status']==7){
      echo "Pay the amount for Planning and Design";
      
    }
    else if($row['site_status']==8){
      echo "Payment Successfull";
    }
    else if($row['site_status']==9){
      echo "Supervisor Assigned:<br>";
    }
    else if($row['site_status']==10){
      echo "Site Preparation Completed<br>";
    }
    else if($row['site_status']==11){
      echo "Pay the amount for Foundation";
    }
    else if($row['site_status']==12){
      echo "Payment Successfull";
    }
    else if($row['site_status']==13){
      echo "Site Preparation Completed<br>";
    }
    else if($row['site_status']==14){
      echo "Pay the amount for Framing";
    }
      $selSUp="select * from tbl_supervisor where supervisor_id=".$row['supervisor_id'];
      $resSup=$conn->query($selSUp);
      if($dataSup=$resSup->fetch_assoc()){
        echo "Name: ".$dataSup['supervisor_name'];
        echo "<br>Contact: ".$dataSup['supervisor_contact'];
      }

		   ?>
		    
      </td>
      <td>
      <?php
	  if($row['site_status']==4)
    {
	  ?>
      <a href="MySite.php?did=<?php echo $row['site_id']?>">Accept</a>
      <a href="MySite.php?dido=<?php echo $row['site_id']?>">Reject</a>
      <?php
    }
	  ?>
      </td>
      <td><a href="Update.php?dide=<?php echo $row['site_id']?>">DAILY UPDATES</a>
      </td>
      <td>
      <?php
    $selQryp="select * from tbl_payment where payment_status=0 and site_id=".$row['site_id'];
    $resp=$conn->query($selQryp);
      if($row['site_status']==7)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=8&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==11)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=12&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==14)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=15&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==17)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=18&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==20)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=21&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==23)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=24&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==26)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=27&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==29)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=30&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==32)
      {
        $rowp=$resp->fetch_assoc();
	echo " <br> Amount To Be Paid :".$rowp['payment_amount'];
	echo " <br> Due Date :".$rowp['payment_duedate'];
      ?>
        <a href="Payment.php?pid=<?php echo $rowp['payment_id']?>&st=33&pt=1&sid=<?php echo $row['site_id']?>">Pay Now</a> 
	<?php
      }
      if($row['site_status']==36)
      {
      ?>
        <a href="MySite.php?sid=<?php echo $row['site_id']?>&st=37">Finished</a>
	<?php
      }
      ?>
      </td>
    </tr>
    
    <?php
	
	}
	?>
</table> 
</div>
</body>
<?php
include("Foot.php");
?>
</html>