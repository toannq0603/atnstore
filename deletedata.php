<!DOCTYPE html>
<!-- saved from url=(0078)https://www.w3schools.com/w3css/tryw3css_templates_interior_design.htm#contact -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="image/w3.css">
<link rel="stylesheet" href="image/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head><body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index: 3; width: 300px; font-weight: bold; display: none;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>ATN<br>ToyStore</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="viewdata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database View</a> 
    <a href="insertdata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Insert</a> 
    <a href="updatedata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Update</a> 
    <a href="deletedata.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Database Delete</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>ATN toyStore</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor: pointer; display: none;" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>ATN toySTORE</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Delete Database</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  
<!-- Delete -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Delete Database</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want to delete some function!</p>
    <form name="DeleteData" action="deletedata.php" method="POST" target="_blank">
      <div class="w3-section">
        <label>Store ID</label>
        <input class="w3-input w3-border" type="text" name="storeid" required="">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Delete</button>
    </form>  
  </div>

<!-- End page content -->


    <?php
      if (empty(getenv("DATABASE_URL"))){
        echo '<p>The DB does not exist</p>';
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
      }
      else{
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-54-221-212-126.compute-1.amazonaws.com;port=5432;user=izocmgwpkfcpxq;password=
f8d783b470b6f7b1904fee5464f605225893f357c07d25359e4b8ac22f1078f1;dbname=ddfu3emrcml2vm",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
        ));
      }  

      $sql = "DELETE FROM asm2 WHERE storeid = '$_POST[storeid]'";
      $stmt = $pdo->prepare($sql);
      if (is_null($_POST[accountant]) == FALSE){
        if($stmt->execute() == TRUE){
          echo "Record deleted successfully.";
        } else {
          echo "Error deleting record: ";
        }
      }
      ?>
  </div>









<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>


</body></html>