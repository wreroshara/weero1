<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">
		body{
			background: #3498db; 
			margin: 0px;
			border: 0px; 
		}
		#header{
			width: 100%;
			height: 160px;
			background: black;
			color: white;

		}
		#sidebar{
			width: 300px;
			height: 400px;
			background: #3498db;
			float: left;

		}
		#data{
			height: 750px;
			background: #2980b9;
			color: white;
			font-size: 20px;


		}
		#adminlogo{
			height: 100px;
			width: 100px;
			background : white; 
			border-radius: 50px;
		}
		
		ul li {
				padding: 20px;
				border-bottom: 2px solid grey;
			}
		ul li:hover{
			background :#e74c3c;
			color: white;
		} 

	</style>

</head>
<body>
	<div id = "header">
		<center>
		<img src="admin_1246350.png" alt="adminlogo" id="adminlogo" ><br><br>This is Admin Panel Please Procced With Caution!
		</center>
	</div>
	<div id = "sidebar">
		<ul>
			<li><a href="add.php">Add Data</a></li>
			<li>Delete Data</li>
			<li>Update Data</li>
			<li>Developer</li>

		</ul>
		
	</div>
	<div id = "data">
		<br>
		<center><h1>Hello!</h1>
			<p>This is the Admin Panel For Dream Mobile Website</p></center>

		
	</div>


</body>
</html>