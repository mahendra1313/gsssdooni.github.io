<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$stud_id = $_POST['stud_id'];
		$stud_no = $_POST['srno'];
		$firstname = $_POST['name'];
		$lastname = $_POST['f_name'];
		$gender = $_POST['registerNo'];
		$yrsec = $_POST['yr'];
		
		mysqli_query($conn, "UPDATE `student` SET `srno` = '$stud_no', `name` = '$firstname', `f_name` = '$lastname', `registerNo` = '$gender', `yr` = '$yrsec' WHERE `stud_id` = '$stud_id'");
		
		echo "<script>alert('Successfully updated!')</script>";
		echo "<script>window.location = 'student.php'</script>";
	}
?>