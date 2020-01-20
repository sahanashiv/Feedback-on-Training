<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Training</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="./styles/home.css">
</head>
<style>
body{
    background-image: url(./Images/backgroundimg.jpg);
    object-fit: cover;
    height: 100vh;
    width: 100%;
    background-size: cover !important;
}
</style>

<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="header">
  <div class="navbar-brand-left" id="leftimg" href="#"><img src="Images/brand.png" class="img-responsive"></div>
  <div class="head_body"><span class="navbar-text">RAMAIAH INSTITUE OF TECHNOLOGY</span></div>
  <ul class="navbar-nav">
  </ul>
</nav>

<div class="main-container">
  <div class="container float-left" >
    <img src="Images/hod.png" class="rounded-circle hodimg" width="236" height="236">
    <input type="submit" name="submit" class="btn btn-primary homebtn" value="HOD Login" onclick="myhodlogin()">
  </div>
  <div class="container float-right">
    <img src="Images/hod.png" class="rounded-circle hodimg" width="236" height="236">
    <input type="submit" name="submit" class="btn btn-primary homebtn" value="FACULTY Login" onclick="mylogin()">
  </div>
</div>
<script>
function mylogin() {
  location.replace("login.php");
}
function myhodlogin() {
    location.replace("login.php");
}
</script>
</body>
</html>

