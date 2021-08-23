<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['srno'];
		$firstname = $_POST['name'];
		$lastname = $_POST['f_name'];
		$gender = $_POST['registerNo'];
		$yrsec = $_POST['yr'];
	
		
		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$stud_no', '$firstname', '$lastname', '$gender', '$yrsec')") or die(mysqli_error());
		
		header('location: student.php');
	}
?>