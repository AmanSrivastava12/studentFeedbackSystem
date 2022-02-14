<h1 align="center" ><a href="">Admin Dashboard</a></h1>
<?php 
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:black'>Total Number of Faculties: $rows</h2>";	
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:black'>Total Number of Students : $r1</h2>";	
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Number of feedbacks given by users : $r2</h2>";
?>