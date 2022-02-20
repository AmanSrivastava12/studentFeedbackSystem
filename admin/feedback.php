<?php 
$q=mysqli_query($conn,"select * from feedback");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No records found ! </h3>";
}
else
{
?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	if(a)
    {
        window.location.href='delete_feedback.php?id='+id;
    }
}
</script>	
<div class="row">
	<div class="col-sm-12" style="color:#000000;">
		<h1 align="center" >Feedback given by Students -</h1>
	</div>
</div>
<div class="row">
<div class="col-sm-12">
<table class="table table-bordered">
	<thead >
	<tr class="success">
		<th>Sr.No</th>
		<th>Student</th>
		<th>Teacher</th>
		<th>Q.1</th>
		<th>Q.2</th>
		<th>Q.3</th>
		<th>Q.4</th>
		<th>Q.5</th>
		<th>Q.6</th>
		<th>Q.7</th>
		<th>Q.8</th>
		<th>Q.9</th>
		<th>Q.10</th>
		<th>Q.11</th>
		<th>Q.12</th>
		<th>Q.13</th>
		<th>Q.14</th>
		</tr>
		</thead>
		<?php
		$i=1;
	    while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		?>
</table>
</div>
</div>
<?php }?>