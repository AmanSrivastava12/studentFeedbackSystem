<?php 
echo $_SESSION['faculty_login'];
extract($_POST);
if(isset($save))
{
	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fields first</font>";	
	}
	else
	{
$sql=mysqli_query($conn,"select * from faculty where password='$op' and email='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($sql);
if($r==true)
{
	if($np==$cp)
	{
	$sql=mysqli_query($conn,"update faculty set password='$np' where email='".$_SESSION['faculty_login']."'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New password does not match with Confirm Password </font>";
	}
}
else
{
$err="<font color='red'>Wrong Old Password</font>";
}
}
}
?>
<h2 align="center">UPDATE PASSWORD</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Old Password :</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">New Password :</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Confirm Password :</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	