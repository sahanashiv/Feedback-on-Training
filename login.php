<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

$error = "";

if (isset($_POST['submit'])) {
    
    $pswd = $_POST['pswd'];	
    $email = $_POST['user'];

    if(empty($email) || empty($pswd)) {

        $error = "Please enter the details";
    }
    else {
       
        $hodsearch_data = "select *from admin where email = '$email' and password='$pswd' and professions='HOD'";
        $hodsearch_result = $con->query($hodsearch_data);

        if($hodsearch_result->num_rows > 0) {

            header("location: hod.php");
        }
        else {

            $facsearch_data = "select *from admin where email = '$email'  and password='$pswd' and professions='FACULTY'";
            $facsearch_result = $con->query($facsearch_data);
            
            if($facsearch_result->num_rows > 0)
            {
               header("location: feedback.php");
            }
            else
            {
                $error = "* Incorrect Details";
            }
        }
               
    }
}
?>

<div class="maindiv">
    <div class= "divlightbox">
        <div class="login">
            <center>
                <h2 class="login_header">Login</h2>
            </center>
            <form action="" method ="POST" >
                <div class="row">
                    <div class="input-field col">
                        <label class="login_text">Email</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter email"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col">
                        <label class="login_text">Password</label>
                        <input type="password" name="pswd" class="form-control" placeholder="Enter password"><br>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary sub_btn" value="Login"> 
                    <?php echo "<div class='error'>$error</div>" ?>
            </form>
        </div>

        <div class="rightdiv">
            <p class="text">New to feedback </p>
                <button class="btn btn-primary" style="width:89%;">
                    <a href="register.php" style="color: white;">Register</a>
                </button>  
        </div>
    </div>
</div>