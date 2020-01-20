<?php include "./includes/header.php"?>
<?php require "./database/dataconnect.php";

  $error = "";
  if(isset($_POST['sub'])) {

			$understanding = $_POST["understand"];
			$application = $_POST["Job"];
			$general = $_POST["remarks"];
			$eid=$_GET['eid'];

      if(empty($understanding) || empty($application) || empty($general)) {     
        $error = "Please fill all the details";
      }
      else
      { 
        $insert_data = "update feedback set understanding='$understanding',application='$application',general='$general' where eid=".$eid;
        $res = $con->query($insert_data);
        if(!$res)
        {
          echo "$con->error";
				}
				
				header('location: generatepdf.php?eid='.$eid);	
			}
}
?>
