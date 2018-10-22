<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin_1246350.png">
<h3> Welcome to Admin Panel </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add Updates </a></li>
	<li><a href="delete.php" target="_blank"> Delete Update </a></li>
	<li><a href="update.php" target="_blank"> Update Post </a></li>
	<li><a href="nosgene.php" target="_blank"> Developer </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
    include 'connection.php';
	
	error_reporting(0); 
	
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["id"]. "<br>" . "  Name: " . $row["name"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["pass"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>
<!--
     
 -->
</body>
</html>