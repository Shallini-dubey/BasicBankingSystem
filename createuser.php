<?php
require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TFS Bank</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
 require("header.php");
 ?>
 <br><br>
 <body style="background-color : #ADFF2F;">
 <h2 class="text-center pt-4" style="color:black;">Create a User</h2>

 <div class="container">
  <div class="screen">
   <div class="screen-header">
   	<div class="screen-header-right">
   	   <div class="screen-header-ellipsis"></div>
         <div class="screen-header-ellipsis"></div>
           <div class="screen-header-ellipsis"></div>
       </div>
     </div>
              <div class="screen-body">
               <div class="screen-body-item left">
                <img class="img-fluid" src="img/us.jpg" style="border: none; border-radius: 50%;">
               </div>

                   <div class="screen-body-item">
                      <form class="app-form" method="post" action="user_script.php">
                         <div class="app-form-group">
                           <input class="app-form-control" placeholder="Name" type="text" name="name" required>
                          </div>

                        <div class="app-form-group">
                           <input class="app-form-control" placeholder="Email" type="email" name="email" required>
                          </div>

                         <div class="app-form-group">
                           <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
                          </div>
                          <br>
                           <div class="app-form-group button">
                             <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                            </div>
                           </form>
                          </div>
                         </div>
                       </div>
  
 </div>
 <br><br>
 <?php
 require("footer.php");
 ?>
</body>
</html>