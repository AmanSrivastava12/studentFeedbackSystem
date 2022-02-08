<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];
$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);
if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty!</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";
mysqli_query($conn,$query);
echo "<h2 style='color:green'>Thank you !!</h2>";
}
}
?>
<form method="post">
<fieldset>
<center><u>Student Feedback Form</u></center><br>
<fieldset>
<h3>Please give your answers about the following questions by circling the given grade:</h3><br>
<button type="button" style="font-size:7pt;color:white;background-color:#334d00;border:2px solid #334d00;padding:3px">Strongly Agree 5</button>
<button type="button" style="font-size:7pt;color:white;background-color:#669900;border:2px solid #669900;padding:3px">Agree 4</button>
<button type="button" style="font-size:7pt;color:#000000;background-color:#ffff00;border:2px solid #ffff00;padding:3px">Neutral 3</button>
<button type="button" style="font-size:7pt;color:white;background-color:#ff3333;border:2px solid #ff3333;padding:3px"> Disagree 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:#b30000;border:2px solid #b30000;padding:3px">Strongly Disagree 1</button><br>
<table class="table table-bordered" style="margin-top:50px">
<tr>
<th> Select Faculty :</th>
<td>
<select name="faculty" class="form-control">
<?php
$sql=mysqli_query($conn,"select * from faculty where semester='".$users['semester']."'");
while($r=mysqli_fetch_array($sql))
{
    echo "<option value='".$r['email']."'>".$r['Name']."</option>";
}
?>
</select>
</td>
</tr>
</table>
<h3>COURSE :</h3>
<table class="table table-bordered">
<tr>
<td>Teacher provided the course outline having weekly content plan with list of required text books.</td>  
<td><input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>  
<tr>
<td>Course objectives,learning outcomes and grading criteria are clear to me.</td> 
<td><input type="radio" name="quest2" value="5" required>5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name=" quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>
<tr>
<td>Course integrates throretical course concepts with real world examples.</td> 
<td>
<input type="radio" name="quest3" value="5" required> 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>
</table>
<h3>FACULTY :</h3>
<h5>Standard of teaching -<h5>
 <table  class="table table-bordered" >
<Td>Teacher is punctual,arrives on time and leaves on time.</td>
<td> <input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1
</td>
<tr>
<td>Teacher is good at stimulating the interest in the course content.</td>
<td> 
<input type="radio" name="quest5" value="5" required> 5
<input type="radio" name="quest5" value="4">4
<input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>
<tr>
<td>Teacher is good at explaining the subject matter.</td>
<td>
 <input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3"> 3
<input type="radio" name=" quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>
<tr><td>
Teacher's presentation was clear,loud and easy to understand.</td>
<td> <input type="radio" name="quest7" value="5" required> 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
<tr>
<td>Teacher is good at using innovative teaching methods/ways.</td><td> 
<input type="radio" name="quest8" value="5" required> 5
  <input type="radio" name="quest8" value="4">4
  <input type="radio" name="quest8" value="3">3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1</td>
</tr>
<tr>
<td>Teacher is available and helpful during counseling hours.</td> 
<td><input type="radio" name="quest9" value="5" required>5
  <input type="radio" name="quest9" value="4">4
  <input type="radio" name="quest9" value="3"> 3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1</td>
</tr>
<tr>
<td>Teacher has completed the whole course as per the course outline.</td>
<td>
 <input type="radio" name="quest10" value="5" required> 5
  <input type="radio" name="quest10" value="4">4
  <input type="radio" name="quest10" value="3"> 3
<input type="radio" name="quest10" value="2">2
<input type="radio" name="quest10" value="1">1</td>
</tr>
</table>
<h5>Assessments -</h5>
 <table  class="table table-bordered" >
<tr>
<td>Teacher was always fair and impartial.</td>
<td>
 <input type="radio" name="quest11" value="5" required> 5
  <input type="radio" name="quest11" value="4">4
  <input type="radio" name="quest11" value="3"> 3
<input type="radio" name="quest11" value="2">2
<input type="radio" name="quest11" value="1">1</td>
</tr>
<tr>
<td>Assessments conducted are clearly connected to maximize learning objectives.</td>
<Td>
 <input type="radio" name="quest12" value="5" required> 5
  <input type="radio" name="quest12" value="4">4
  <input type="radio" name="quest12" value="3"> 3
<input type="radio" name="quest12" value="2">2
<input type="radio" name="quest12" value="1">1</td>
</tr>
</table>
<h3>COMMENTS :<h3>
<h5>What you liked about the course:<h5><br><br>
<center>
<textarea name="quest13" rows="5" cols="115" id="comments" style="font-family:sans-serif;font-size:1.2em;">
</textarea></center><br><br>
<h5>What you disliked about the course:<h5><br><br>
<center>
<textarea name="quest14" rows="5" cols="115" id="comments" style="font-family:sans-serif;font-size:1.2em;">
</textarea></center>
<p align="center"><button type="submit" style="font-size:10pt;color:white;background-color:#004d00;border:1px solid #000000;padding:7px" name="sub">SUBMIT</button></p>
</form>
</fieldset>
</div>
</div> 
</div>
</div>
</form>