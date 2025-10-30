<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Record System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f6fff8;
      margin: 0;
      padding: 0;
    }
    h2 {
      text-align: center;
      color: #2e7d32;
    }
    form {
      background: #ffffff;
      width: 350px;
      margin: 20px auto;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border: 2px solid #a5d6a7;
    }
    input {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      border: 1px solid #a5d6a7;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #43a047;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #2e7d32;
    }
    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #c8e6c9;
      text-align: center;
      padding: 6px;
    }
    th {
      background-color: #2e7d32;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #e8f5e9;
    }
    .delete-btn {
      background-color: #e53935;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 3px 6px;
      cursor: pointer;
    }
    .delete-btn:hover {
      background-color: #c62828;
    }
  </style>
</head>
<body>

	<h2>Add New Student Record</h2>
		<form method="POST" action="save.php">
  			<input type="text" name="id" placeholder="Enter ID" required>
  			<input type="text" name="lastname" placeholder="Enter Last Name" required>
  			<input type="text" name="firstname" placeholder="Enter First Name" required>
  			<input type="text" name="middlename" placeholder="Enter Middle Name">
 			<input type="text" name="course" placeholder="Enter Course" required>
			<input type="text" name="section" placeholder="Enter Section" required>
  			<input type="number" step="0.01" name="first_grading" placeholder="1st Grading" required>
  			<input type="number" step="0.01" name="second_grading" placeholder="2nd Grading" required>
  			<input type="number" step="0.01" name="third_grading" placeholder="3rd Grading" required>
  			<input type="number" step="0.01" name="fourth_grading" placeholder="4th Grading" required>
  			<button type="submit">Submit</button>
		</form>

	<h2>Student Records</h2>
		<table>
  			<tr>
    				<th>ID</th>
    				<th>Last</th>
    				<th>First</th>
    				<th>Middle</th>
    				<th>Course</th>
    				<th>Section</th>
    				<th>1st</th>
    				<th>2nd</th>
    				<th>1st Sem Ave</th>
    				<th>3rd</th>
    				<th>4th</th>
    				<th>2nd Sem Ave</th>
    				<th>Final Ave</th>
    				<th>Remarks</th>
    				<th>Action</th>
  			</tr>


			<?php
				$result = $conn->query("SELECT * FROM students");
					while ($row = $result->fetch_assoc()) {
  						echo "<tr>
    							<td>{$row['id']}</td>
    							<td>{$row['lastname']}</td>
    							<td>{$row['firstname']}</td>
    							<td>{$row['middlename']}</td>
    							<td>{$row['course']}</td>
    							<td>{$row['section']}</td>
    							<td>{$row['first_grading']}</td>
    							<td>{$row['second_grading']}</td>
    							<td>{$row['first_sem_average']}</td>
    							<td>{$row['third_grading']}</td>
    							<td>{$row['fourth_grading']}</td>
    							<td>{$row['second_sem_average']}</td>
    							<td>{$row['final_average']}</td>
    							<td>{$row['remarks']}</td>
    							<td><a href='delete.php?id={$row['id']}'><button class='delete-btn'>Delete</button></a></td>
  						</tr>";
				}
			?>


		</table>
</body>
</html>
