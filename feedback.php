<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

  $error = "";
  if(isset($_POST['submit'])) {

    $ename = $_POST["empname"];
    $dept = $_POST["dept"];
    $training = $_POST["training"];
    $org = $_POST["org"];
    $date = $_POST["date"];
      
      if(empty($ename) || empty($dept) || empty($training) || empty($org) || empty($date)) {     
        $error = "Please fill all the details";
      }
      else
      {
        $insert_data = "insert into feedback(empname,dept,training,org,date) values('$ename','$dept','$training','$org','$date')";
        $con->query($insert_data);
        header("location: nxtwindow.php");
      }   
  }
?>
<div class="maindiv">  
  <div class="fblightbox">
    <h2 style="margin-bottom: 1.5rem;">
      <center>
        <span class="fbheadtag">FEEDBACK ON TRAINING<span>   
      </center>
    </h2>
    <div class="feedback">
      <form action="" method="POST">        
        <label class="feedback_text">Name of the Employee:</label>
          <input type="text" name="empname"><br>
        
        <label class="feedback_text">Department:</label>
          <input type="text" name="dept"><br>
        
        <label class="feedback_text">Name of the Training program:</label>
          <input type="text" name="training"><br>
        
        <label class="feedback_text">Organization in which training is udertaken:</label>
          <textarea name="org" >Enter text here..</textarea><br>
        
        <label class="feedback_text">Date of Training:</label>
          <input type="date" name="date"><br>
         <br> 
        <input type="submit" name="submit" class="btn btn-primary fb-btn" style="width:20%;" value="Next" onclick="Next()">
          <?php 
          //  if(!empty($error))
          echo "<div>$error</div>" ?>
      </form>
    </div>
  </div>
</div>