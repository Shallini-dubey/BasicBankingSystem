<!DOCTYPE html>
<html>
<head>
	<title>TSF BANK</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
    tbody{
    	background:#32CD32;
    }
    button {
            transition: 1.5s;
            background-color:#FF7F50;
            color:#FFFFFF;
        }

        button:hover {
            background-color:#90EE90;
            transform: scale(1.1);
            color:#FFD700;
        }
    </style>
</head>
<body style="background: #90EE90;">

<?php
require("connect.php");
$sql = "select * from users";
$res = mysqli_query($con,$sql);
?>
<div class="container">
	<?php 
	require("header.php");
	?>
	<br><br>
	<h2 class="text-center"><b>Transfer Money</b></h2>
	<div class="table-responsive">
	 <table class="table table-bordered table-striped table-condensed table-hover">
	  <thead style="background:#CD5C5C;">
	  	<tr>
	  	  <th class="text-center">ID</th>
	  	  <th class="text-center">Name</th>
	  	  <th class="text-center">Email</th>
	  	  <th class="text-center">Operation</th>
	  </thead>
	 	<tbody>
	 		<?php
	 		 while ($rows = mysqli_fetch_assoc($res))
	 		  {
	 		  ?>
	 		<tr>
	 		 <td class="text-center"><?php echo $rows['id']?></td>
	 		 <td class ="text-center"><?php echo $rows['name']?></td>
	 		 <td class = "text-center"><?php echo $rows['email']?></td>
 			 <td class = "text-center"><a href="userdetails.php?id=<?php echo $rows['id'];?>"><button type ="button" class="btn">Transfer</a></button>
 			 </td>
	 		</tr>
	 		<?php
	 	}
	 	?>
	 	</tbody>
	 </table>
 </div>
 <?php
 require("footer.php");
 ?>
</body>
</html>