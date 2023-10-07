<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
if(isset($_POST['txt_submit']))
{
	$supervisorname=$_POST['txt_name'];
	$supervisorcontact=$_POST['txt_contact'];
	$supervisoremail=$_POST['txt_email'];
	$supervisorpassword=$_POST['txt_password'];
	$supervisorconfirmpassword=$_POST['txt_confirmpassword'];
	$supervisorgender=$_POST['txt_gender'];
	$supervisoraddress=$_POST['txt_address'];
	$supervisorplaceid=$_POST['txt_place'];
	$supervisorphoto=$_FILES['ins_photo']['name'];
    $tempphoto=$_FILES['ins_photo']['tmp_name'];
	move_uploaded_file($tempphoto,'../Assets/Files/Supervisor/Photo/'.$supervisorphoto);
	if($supervisorconfirmpassword == $supervisorpassword){
	
	$insQry="insert into tbl_supervisor(supervisor_name,supervisor_contact,supervisor_email,supervisor_password,supervisor_gender,supervisor_address,place_id,supervisor_photo) values('".$supervisorname."','".$supervisorcontact."','".$supervisoremail."','".$supervisorpassword."','".$supervisorgender."','".$supervisoraddress."','".$supervisorplaceid."','".$supervisorphoto."')";
	
	
	if($conn->query($insQry))
	{
		echo "Inserted";
	}
	else
	{
		echo "Failed";
	}
}

	else
	{echo "entered password does not match";
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
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table class="table table-bordered">
            <tr>
                <td width="256">Name</td>
                <td><input type="text" class="form-control" name="txt_name" id="txt_name3" required="required" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" class="form-control" name="txt_contact" id="txt_contact" required="required" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="txt_email" id="txt_email" required="required" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" name="txt_password" id="txt_password" required="required" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" class="form-control" name="txt_confirmpassword" id="txt_confirmpassword" required="required" autocomplete="off" /></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="txt_gender" id="btn_malegender" value="MALE" required="required" autocomplete="off" />
                        <label class="form-check-label" for="btn_malegender">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="txt_gender" id="btn_femalegender" value="FEMALE" required="required" autocomplete="off" />
                        <label class="form-check-label" for="btn_femalegender">Female</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea class="form-control" name="txt_address" id="txt_address" rows="5" required></textarea></td>
            </tr>
            <tr>
                <td>District</td>
                <td>
                    <select class="form-select" name="txt_district" id="txt_district" onchange="getPlace(this.value)" required>
                        <option value="">SELECT DISTRICT</option>
                        <?php
                        $selQry = "select * from tbl_district";
                        $res = $conn->query($selQry);
                        while ($row = $res->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $row['district_id'] ?>"><?php echo $row['district_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Place</td>
                <td>
                    <select class="form-select" name="txt_place" id="txt_place">
                        <option value="">---SELECT PLACE---</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" class="form-control" name="ins_photo" id="ins_photo" required="required" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" class="btn btn-primary" name="txt_submit" id="txt_submit" value="Register" />
                </td>
            </tr>
        </table>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-z3Fp0p12mqDEz1LktaI/4Sf+4PnFSeW0O438W8k+Kp2Bf5Sy9b/Tm5Fszr+ypD7F1" crossorigin="anonymous"></script>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
    function getPlace(did) {
        $.ajax({
            url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
            success: function (html) {
                $("#txt_place").html(html);
            }
        })
    }
</script>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>