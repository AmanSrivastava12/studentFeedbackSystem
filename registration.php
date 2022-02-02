<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];

//encrypt your password
$pass=md5($p);

$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);

$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";
}
}
?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		        <table class="table table-bordered" style="margin-bottom:50px">
	            <caption><h2 align="center">Registration Form</h2></caption>
	            <Tr>
		            <Td colspan="2"><?php echo @$err;?></Td>
	            </Tr>
				<tr>
					<td>NAME :</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>EMAIL :</td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				<tr>
					<td>PASSWORD :</td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				<tr>
					<td>CONTACT :</td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				<tr>
					<td>PROGRAMME NAME :</td>
					<Td><select name="pro" class="form-control" required>
					<option>BBA</option>
					<option>BCA</option>
					<option>B.Tech</option>
					<option>MBA</option>
					<option>MCA</option>
					<option>M.Tech</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>SEMESTER :</td>
					<Td><select name="sem" class="form-control" required>
					<option>I</option>
					<option>II</option>
					<option>III</option>
					<option>IV</option>
					<option>V</option>
					<option>VI</option>
					<option>VII</option>
					<option>VIII</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>GENDER :</td>
					<td>
				<input type="radio" name="gen" value="m"/> Male 
				<input type="radio" name="gen" value="f"/> Female 
					</td>
				</tr>
				<tr>
					<td>HOBBIES :</td>
					<Td>
					<input value="reading" type="checkbox" name="hob[]"/> Reading books
					<input value="singin" type="checkbox" name="hob[]"/> Singing/Listening songs
					<input value="playing" type="checkbox" name="hob[]"/> Playing sports/games
					</td>
				</tr>
				<tr>
					<td>PROFILE PICTURE :</td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr>
				<tr>
					<td>DATE OF BIRTH :</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					</select>
					</td>
				</tr>
			<tr>
					<Td colspan="2" align="center">
                    <input type="submit" value="Save" class="btn btn-info" name="save"/>
                    <input type="reset" value="Reset" class="btn btn-info"/>
			        </td>
			</tr>
			</table>
	    </form>
		</div>
		    <div class="col-sm-2"></div>
		    </div>
	</body>
</html>