<?php include "./includes/header.php"?>
<?php require "./database/dataconnect.php";

  $error = "";
  $reterive_data = "select * from feedback order by eid DESC limit 1";
  $store = $con->query($reterive_data);
  $rslt = $store->fetch_assoc();
  // print_r($rslt);
  if(isset($_POST['submit'])) {

    $exec = $_POST["presentation"];
    $topic = $_POST["topic"];
    $level = $_POST["level"];
    $res = $_POST["res"];
    $future = $_POST["future"];
    $recc=$_POST["recc"];
      
      if(empty($exec) || empty($topic) || empty($level) || empty($res) || empty($future)||empty($recc)) {     
        $error = "Please fill all the details";
      }
      else
      {
        
        $insert_data = "update feedback set presentation='$exec',topic='$topic',level='$level',res='$res' ,future='$future',recc='$recc' where eid=".$rslt['eid'];
        $res = $con->query($insert_data);
        if(!$res)
        {
          echo "$con->error";
        }
        echo "<script type=\"text/javascript\">window.alert('Data Entered');
        window.location.href = './home.php';</script>";
      }   
}
?>
<div class="maindiv">
    <div class="nxtlightbox">
      <center>
          <label class="heading"> Presentation by Faculty</label>
      </center>
      <div class="nxtwindow">
            <form action="" method="POST">
              
              <label class="nxtwnd_text">Excellent:</label>
                <span class="radio_btn">
                  <input type="radio" name="presentation" value="Good"> Good
                </span>
                <span class="radio_btn">
                  <input type="radio" name="presentation" value="Average"> Average
                </span>
                <span class="radio_btn">
                  <input type="radio" name="presentation" value="Poor"> Poor
                </span>
                <span class="radio_btn"> 
                  <input type="radio" name="presentation" value="very poor"> Very Poor
                </span>
                <br>

              <label class="nxtwnd_text">Coverage of topic: </label><br>
                <textarea name="topic" class="txtarea"></textarea><br>

              <label class="nxtwnd_text">Your level of understaning</label>
                <span class="radio_btn">
                  <input type="radio" name="level" value="Good"> Good
                </span>
                <span class="radio_btn">
                  <input type="radio" name="level" value="Average"> Average
                </span>
                <span class="radio_btn">
                <input type="radio" name="level" value="Poor"> Poor
                </span>
                
              <span class="nxtwnd_text">(Specify briefly reasons)<br></span>
              <textarea name="res" class="nxtwnd_text"></textarea><br>

              <label class="nxtwnd_text">Do you want such programs in future:</label>
              <span class="radio_btn">
                <input type="radio" name="future" value="Yes"> Yes
              </span>
              <span class="radio_btn">
                <input type="radio" class="nxtwnd_text" name="future" value="Poor"> No
              </span>
                <br>

              <label class ="nxtwnd_text">if Yes, what topics would you recommend?</label><br>
              <textarea name="recc" class="txtarea"></textarea><br><br>
              
              <input type="submit" class="btn btn-primary nxt-btn" name="submit" value="Submit">
            
            </form>      
      </div>
  </div>
</div>