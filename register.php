<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

$userErr = $nameErr = $profErr = $pswdErr = $emailErr = $cnfrmpswdErr = "" ;

$user = $name = $prof = $pswd = $email = $cnfrmpswd = "";

if (isset($_POST['submit']))  {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = $_POST["name"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed"; 
        }
      }
    
    if (empty($_POST["user"])) {
      $userErr = "user is required";
    } else {
      $user = $_POST["user"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
        $userErr = "only letters and numbers allowed"; 
      }
    }

    if(empty($_POST['professions'])) {
      $profErr = "Profession is required";
    }else {
      $prof = $_POST['professions'];
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = $_POST["email"];
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }
      
    if (empty($_POST["pswd"] )) {
      $pswdErr = "pswd is required";
    } else {
      $pswd = $_POST["pswd"];
    }

    if (empty($_POST["cnfrmpswd"] )) {
        $cnfrmpswdErr = "pswd is required";
      } else {
        $cnfrmpswd = $_POST["cnfrmpswd"];
      }

      if($pswd==$cnfrmpswd)
      {
            $pswd=$_POST["pswd"];
      }else{
            $pswdErr = "Does not match";
      }
  }

    if(empty($user) ||empty($name) || empty($prof) || empty($pswd) ||empty($cnfrmpswd) || empty($email)){

    }
    else
    {  
      $insert_data = "insert into admin(name,username,professions,email,password) values('$name','$user','$prof','$email','$pswd')";
      $con->query($insert_data);
      header("location: login.php");        
    }
 ?>
<div class="maindiv">
  <div class="signupbox">
    <div class="signup">
        <center>
          <h3 class="signup_header">Signup</h3>
        </center>
            <form action="" method ="POST" >
            <div class="row">
                <div class="input-field col s6">
                    <label class="signup_text">Name</label><br>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $name;?>">
                        <span class="form-text text-muted" id="error">* 
                            <?php echo $nameErr;?>
                        </span>
                </div>
                <div class="input-field col s6">
                    <label class="signup_text">Username</label><br>
                    <input type="text" class="form-control" name="user" placeholder="Enter username" value="<?php echo $user;?>">
                        <span class="form-text text-muted" id="error">* 
                            <?php echo $userErr;?>
                        </span>
                </div>
            </div>
                <label for="professions" class="signup_text">Select Designation:</label>
                  <select class="form-control" id="sel1" name="professions">
                    <option value="Faculty">Faculty</option>
                    <option value="HOD">HOD</option>
                  </select>
                  <br>

                <label class="signup_text">EmailId</label><br>
                <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email;?>">
                    <span class="form-text text-muted" id="error">* 
                        <?php echo $emailErr;?>
                    </span>
                <div class="row">
                    <div class="input-field col s6">
                        <label class="signup_text">Password</label><br>
                        <input type="password" class="form-control" name="pswd" placeholder="Enter password" value="<?php echo $pswd;?>">
                                <span class="form-text text-muted" id="error">* 
                                    <?php echo $pswdErr;?>
                                </span>
                    </div>
                    <div class="input-field col s6">
                        <label class="signup_text">Confirm Password</label><br>
                        <input type="password" class="form-control" name="cnfrmpswd" placeholder="Confirm Password" value="<?php echo $cnfrmpswd;?>">
                                <span class="form-text text-muted" id="error">* 
                                    <?php echo $cnfrmpswdErr;?>
                                </span><br>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Register">    
                  </div>
                  <div class="input-field col s6">
                    <button type="button" name="cancel" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='home.php'">Cancel</button>    
                  </div>
                </div>
            </form>
    </div>
  </div> 
</div> 