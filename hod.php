<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";
  $error = "";
  $tabledata = array();
  

	$retrieve_data = "select * from feedback";
	
	$result = $con->query($retrieve_data);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$tabledata[] = $row;
		}
	}
?>


<div class="row">
	<div class="input-field col s12">
		<table>
					<tr>
						<th>Employee Name</th>
						<th>Department</th>
						<th>Training</th>
						<th>Organization</th>
						<th>Date</th>
						<th>Presentation</th>
						<th>Topic</th>
						<th>Level</th>
						<th>Reason</th>
						<th>Future</th>
						<th>Recommended</th>
					</tr>

					<?php  
						foreach ($tabledata as $value) {
							echo "<tr>";
							echo "<td>" . $value['empname'] . "</td>";
							echo "<td>" . $value['dept'] . "</td>";
							echo "<td>" . $value['training'] . "</td>";
							echo "<td>" . $value['org'] ."</td>";
							echo "<td>" . $value['date'] ."</td>";
							echo "<td>" . $value['presentation'] . "</td>";
							echo "<td>" . $value['topic'] . "</td>";
							echo "<td>" . $value['level'] . "</td>";
							echo "<td>" . $value['res'] . "</td>";
							echo "<td>" . $value['future'] ."</td>";
							echo "<td>" . $value['recc'] ."</td>";
							// echo "<td>" ."<input type='button' name='btn' value='review' class='review_form_btn'>". "</tr>";
							echo "<td><button><a href='hod.php?eid=". $value['eid'] ."'>review</a></button></td>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		



<!-- Review Box -->
	<?php if (isset($_GET['eid'])): ?>

	<div id="display" class="lightbox">
		
		<div class="review">
			<form action="hodreview.php?eid=<?= $_GET['eid']?>" method="POST" class="design">
				
				<label class="understand">a) Understanding</label><br>        
					<input type="radio" name="understand" value="Good">Good
					<input type="radio" name="understand" value="Average">Average
					<input type="radio" name="understand" value="Poor">Poor<br><br>
			
				<label class="Job">b) Application at Job:</label><br>
					<input type="radio" name="Job" value="well">Applies Well
					<input type="radio" name="Job" value="eviden">No evidence of application
					<input type="radio" name="Job" value="Lack">Exhibits Lack of understanding
					<input type="radio" name="Job" value="Knowledgeable">Indifferent though Knowledgeable <br/><br/>

				<label class="remarks">c) General Remarks:</label><br>
					<textarea name="remarks" class="txtarea"></textarea><br>
					<input type="submit" name="sub" value="Reigster"/>
			</form>
		</div>
	</div>
</div>


				<?php endif; ?>
<script>
  // $(document).ready(function()
  // {
  //     console.log("working");
  //       $(".lightbox").hide();
  //       $(".review_form_btn").click(function(){
	// 		console.log("button clicked");
  //           $(".lightbox").show();
  //   });
  // })
</script>
