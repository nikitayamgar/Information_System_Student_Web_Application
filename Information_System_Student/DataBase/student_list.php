<?php
	require 'config.php';
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="javascript/js.js="></script>

<body class="body">
	<header class="mainheader">
		<img src="images/logo.png">
	<content id="search">
		<form>
			<input type="text" name="search" placeholder="Search anything..." onclick="window.location.href='search.html'">
		</form>
	</content>
	<nav>
		<ul>
			<li><a href="../adminindex.html">Home</a></li>
			<li><a href="../std_register.html">Student Register</a></li>
			<li><a href="../cmp_register.html">Add Company</a></li>
			<li><a href="student_list.php">Student List</a></li>
			<li><a href="company_list.php">Company List</a></li>
			<li><a href="Student_Sorted_list.php">Sort List Student</a></li>
		</ul> 
	</nav>
	
  <title>Student List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.txt
	{
		height:150px;
		width:100%;
		border-radius:10px;
	}
  </style>
  </body>

  <title>Student List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.txt
	{
		height:150px;
		width:100%;
		border-radius:10px;
	}
  </style>
</head>

<div class="container">
  <div class="panel-group">
	<h2 id="title">Student List</h2>
    <div class="panel panel-primary" id="formpage">
      <div class="panel-heading">Student List</div>
		    <div class="panel-body">
<?php
					$query1=mysqli_query($con,"SELECT * FROM student_registration");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Name";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Email";
							echo "</th>";
							
							echo "<th width=120'>";
								echo"Mobile No";
							echo "</th>";
							
							echo "<th width='300'>";
								echo"DOB";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"10th %";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"10th PY";
							echo "</th>";
							echo "<th width='70'>";
								echo"12th/Diploma %";
							echo "</th>";
							echo "<th width='70'>";
								echo"12th/Diploma PY";
							echo "</th>";
							echo "<th width='70'>";
								echo"Degree %";
							echo "</th>";
							echo "<th width='70'>";
								echo"Degree PY";
							echo "</th>";
							
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query1))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['name']."</td>"; 
								echo"<td>".$fetch['email']."</td>";
								echo"<td>".$fetch['mobileno']."</td>";
								echo"<td>".$fetch['dob']."</td>";
								echo"<td>".$fetch['tenperc']."</td>";
								echo"<td>".$fetch['tenyear']."</td>";
								echo"<td>".$fetch['twelthperc']."</td>";
								echo"<td>".$fetch['twelthyear']."</td>";
								echo"<td>".$fetch['degree']."</td>";
								echo"<td>".$fetch['degreeyear']."</td>";
							echo "</tr>";
						}
					echo"</table>";
			?><br><br>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-2">
			</div>
			<div class="col-xs-3">
		</div>
	  </div>
   </div>