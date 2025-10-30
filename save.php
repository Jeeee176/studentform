<?php
	include 'db_connect.php';

		$id = $_POST['id'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$course = $_POST['course'];
		$section = $_POST['section'];
		$first = $_POST['first_grading'];
		$second = $_POST['second_grading'];
		$third = $_POST['third_grading'];
		$fourth = $_POST['fourth_grading'];

		$first_sem = ($first + $second) / 2;
		$second_sem = ($third + $fourth) / 2;
		$final = ($first_sem + $second_sem) / 2;


		if ($final <= 74.49) $remark = "5.0";
		elseif ($final <= 77.99) $remark = "3.0";
		elseif ($final <= 80.99) $remark = "2.75";
		elseif ($final <= 83.99) $remark = "2.5";
		elseif ($final <= 86.99) $remark = "2.25";
		elseif ($final <= 89.99) $remark = "2.0";
		elseif ($final <= 92.99) $remark = "1.75";
		elseif ($final <= 95.99) $remark = "1.5";
		elseif ($final <= 98.99) $remark = "1.25";
		else $remark = "1.0";

		$sql = "INSERT INTO students 
			(id, lastname, firstname, middlename, course, section, first_grading, second_grading, first_sem_average, third_grading, fourth_grading, second_sem_average, final_average, remarks)
		VALUES 
			('$id','$lastname','$firstname','$middlename','$course','$section','$first','$second','$first_sem','$third','$fourth','$second_sem','$final','$remark')";

		if ($conn->query($sql) === TRUE) {
  			header("Location: index.php");
		} else {
  			echo "Error: " . $conn->error;
		}
?>
