<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
      button2:hover{
        background:#FFD700;
      }
    </style>
</head>
<body>
<?php
require("header.php");
?>
<br><br><br>
<div class = "container">
   <div class = "b1">
    <center>
      <img src = "img/bank.jpg" alt="" style="margin-left:200px;">
    </center>
     </div>
<br>
   <div class = "row">
     <div class = "col-md-4 col-md-6">
       <div id ="ip">
       <img src = "img/us.jpg" alt = " " id = "i1" style="width:220px;margin-left:120px;"> 
     </div>
        <a href="createuser.php" class="button2 btn btn-primary" style="background-color:#f14e4e; width:220px; max-height:100px;font-size:20px;margin-left:120px;">Create User</a>
        </div>

       <div class = "col-md-4 col-md-6">
         <img src = "img/money.png" alt = " " id="i2" style="width:220px;margin-left:120px;">
         <br>
         <a href="transmoney.php" class="button2 btn btn-primary" style="background-color:#f14e4e; width:220px; max-height:100px;font-size:20px; margin-left:120px;">Transfer Money</a>
        </div>

         <div class = "col-md-4 col-md-6">
          <img src = "img/tran.jpg" alt = " " id ="i3" style="width:260px; height:220px; margin-left:120px;">
          <br>
          <a href="something.php" class="button2 btn btn-primary" style="background-color:#f14e4e; width:260px; max-height:100px;font-size:20px; margin-left:120px;">Transaction</a>
        </div>
        </div>
  <br>
  <?php
require("footer.php");
?>
<br><br>
</body>
</html>
