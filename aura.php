<?php
if(isset($_POST['selectPos'])&&isset($_POST['UName'])&&isset($_POST['cno'])&&isset($_POST['Email'])&&isset($_POST['mess']))
{
	
	
	$FirstName =  $_POST['UName'];
	$Model = $_POST['selectPos'];
	$ContactNo =$_POST['cno'];
	$Email = $_POST['Email'];
	$Message=$_POST['mess'];

	if(!empty($Model)&&!empty($FirstName)&&!empty($ContactNo)&&!empty($Email)&&!empty($Message))
	{

		$conn=mysqli_connect('localhost','root','');
		mysqli_select_db($conn,'carsale');

		$query = "INSERT INTO carde VALUES ('$Model','$FirstName','$ContactNo','$Email','$Message')";

		mysqli_query($conn,$query);
		
		  

		header('Location: pa1.html');
	}
	else
	{
	
	echo "Enter All  * Fields <br> <br><br>" ;
	}
}

?>
