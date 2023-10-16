<?php
session_start();
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
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
<div class="container mt-4">
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SLno</th>
                <th>Site Details</th>
                <th>Location</th>
                <th>Image</th>
                <th>Plotarea</th>
                <th>User Name</th>
                <th>Engineer</th>
                <th>Supervisor</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selQry = "select * from tbl_site s inner join tbl_place p on p.place_id=s.place_id inner join tbl_district d on p.district_id=d.district_id inner join tbl_user u on u.user_id=s.user_id where site_status>0 ";
            $res = $conn->query($selQry);
            $i = 0;
            while ($row = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $row['site_details'] ?></td>
                    <td><?php echo $row['site_landmark']."<br>". $row['district_name'] . ", " . $row['place_name'] ?></td>
                    <td><img src="../Assets/Files/Request/Photo/<?php echo $row['site_image'] ?>" height="300" /></td>
                    <td><?php echo $row['site_plot'] ?></td>
                    <td><?php echo $row['user_name'] ?></td>
                    <td>
                        <?php
                        if ($row['site_status'] >= 3) {
                            $gry = "select * from tbl_engineer where engineer_id=" . $row['engineer_id'];
                            $res3 = $conn->query($gry);
                            $row2 = $res3->fetch_assoc();
                            echo $row2['engineer_name'];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['site_status'] > 8) {
                            $gryo = "select * from tbl_supervisor where supervisor_id=" . $row['supervisor_id'];
                            $reso3 = $conn->query($gryo);
                            $rowo2 = $reso3->fetch_assoc();
                            echo $rowo2['supervisor_name'];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['site_status'] == 1) {
                            echo "<br>Work Approved<br>";
                        } else if ($row['site_status'] == 2) {
                            echo "Work Declined";
                        }
                        if ($row['site_status'] == 3) {
                            echo "Engineer Assigned";
                        }
                        if ($row['site_status'] == 4) {
                            echo "Sketch and Model Pending.. ";
                        }
                        if ($row['site_status'] == 5) {
                            echo " User Accepted Sketch and Model<br> Payment Pending";
                        }
                        if ($row['site_status'] == 6) {
                            echo " User Rejected Sketch and Model";
                        }
                        if ($row['site_status'] == 7) {
                            echo "Payment Request Send";
                        }
                        if ($row['site_status'] == 8) {
                            echo "Payment COmplete. Assign SUpervisor";
                        }
                        if ($row['site_status'] == 10) {
                            echo "Site Preparation COmpleted";
                        }
                        if ($row['site_status'] == 11) {
                            echo "Payment Request Send";
                        }
                        if ($row['site_status'] == 12) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 13) {
                            echo "Foundation COmpleted";
                        }
                        if ($row['site_status'] == 14) {
                            echo "Payment Request Send";
                        }
                        if ($row['site_status'] == 15) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 16) {
                            echo "Framimng COmpleted";
                        }
                        if ($row['site_status'] == 18) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 19) {
                            echo "Rough Electrical, Plumbing, and HVAC
                            COmpleted";
                        }
                        if ($row['site_status'] == 21) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 22) {
                            echo "Interior Finishes
                            COmpleted";
                        }
                        if ($row['site_status'] == 24) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 25) {
                            echo "Final Electrical, Plumbing, and HVAC
                            COmpleted";
                        }
                        if ($row['site_status'] == 27) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 28) {
                            echo "Landscaping and Exterior Work
                            COmpleted";
                        }
                        if ($row['site_status'] == 30) {
                            echo "Payment COmplete";
                        }
                        if ($row['site_status'] == 31) {
                            echo "Final Electrical, Plumbing, and HVAC
                            COmpleted";
                        }
                        if ($row['site_status'] == 33) {
                            echo "Payment COmplete";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['site_status'] == 1) {
                            $selQRy1 = "select * from tbl_engineer";
                            $res1 = $conn->query($selQRy1);
                            $i = 0;
                            ?>
                            <select name="selEng" id="selEng">
                                <option value="">Select Engineer</option>
                                <?php
                                while ($row1 = $res1->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row1['engineer_id'] ?>"><?php echo $row1['engineer_name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <button type="button" onclick="assignEng(<?php echo $row['site_id'] ?>)">Assign</button>
                            <?php
                        }
                        if ($row['site_status'] == 5) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=7">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 8) {
                            $selQRy2 = "select * from tbl_supervisor";
                            $res2 = $conn->query($selQRy2);
                            $i = 0;
                            ?>
                            <select name="selSup" id="selSup">
                                <option value="">Select Supervisor</option>
                                <?php
                                while ($row2 = $res2->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row2['supervisor_id'] ?>"><?php echo $row2['supervisor_name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <button type="button" onclick="assignSup(<?php echo $row['site_id'] ?>)">Assign</button>
                            <?php
                        }
                        if ($row['site_status'] == 10) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=11">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 13) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=14">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 16) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=17">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 19) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=20">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 22) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=23">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 25) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=26">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 28) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=29">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 31) {
                            ?>
                            <a href="PaymentReq.php?dida=<?php echo $row['site_id'] ?>&st=32">Payment Request</a>
                            <?php
                        }
                        if ($row['site_status'] == 35) {
                            ?>
                            <a href="Site.php?sid=<?php echo $row['site_id']?>&st=36">Finished</a>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-z3Fp0p12mqDEz1LktaI/4Sf+4PnFSeW0O438W8k+Kp2Bf5Sy9b/Tm5Fszr+ypD7F1" crossorigin="anonymous"></script>
</body>


<script src="../Assets/JQ/jQuery.js"></script>
<script>
function assignEng(sid){
	
	var eid = document.getElementById('selEng').value;
	
	$.ajax({
		 url:"../Assets/AjaxPages/AjaxAssignEng.php?eid="+eid+"&&sid="+sid,
		 success: function(html){
			 alert(html)
			 window.location="Site.php"
		 }
	 })
}
function assignSup(site){
	
	var supid = document.getElementById('selSup').value;
	
	$.ajax({
		 url:"../Assets/AjaxPages/AjaxAssignSup.php?supid="+supid+"&&site="+site,
		 success: function(html){
			 alert(html)
			 window.location="Site.php"
		 }
	 })
}
</script>
<?php
include('Foot.php');
ob_flush();
?>
</html>