<?php 
extract($_POST);
if(isset($update))
{
$dob=$yy."-".$mm."-".$dd;
$hob=implode(",",$hob);

$query="update user set name='$n',mobile='$mob',gender='$gen',hobbies='$hob',dob='$dob' where email='".$_SESSION['user']."'";

mysqli_query($conn,$query);

$err="<font color='blue'>Profie updated successfully !!</font>";
}
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);
?>
<h2 align="center">UPDATE YOUR PROFILE</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
			   <tr>
					<td>NAME :</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>EMAIL :</td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				<tr>
					<td>CONTACT :</td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
                </tr>
				<tr>
				<td>GENDER :</td>
				<Td>
				<input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/> Male
				<input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/> Female
				</td>
				</tr>
				<tr>
					<td>HOBBIES :</td>
					<Td>
					<?php 
					$arrr=explode(",",$res['hobbies']);
					?>
					<input value="reading" <?php if(in_array("reading",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/> Reading books
					<input value="singin" <?php if(in_array("singin",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/> Singing/Listening songs
					<input value="playing" <?php if(in_array("playing",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/> Playing sports/games
					</td>
				</tr>
				<tr>
					<td>DATE OF BIRTH :</td>
					<?php 
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>
					<select class="form-control" style="width:100px;float:left" name="yy">
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2022;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					</select>
					<select class="form-control" style="width:100px;float:left" name="mm">
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					</select>
					<select class="form-control" style="width:100px;float:left" name="dd">
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					</select>
					</td>
				</tr>
				<tr>
                <Td colspan="2" align="center">
                <input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
                <input type="reset" class="btn btn-default" value="Reset"/>
					</td>
				</tr>
			</table>
		</form>
	