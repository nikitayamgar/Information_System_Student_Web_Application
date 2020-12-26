<?php
	require 'config.php';
?>
<?php
				
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mobileno=$_POST['mobileno'];
					$dob=$_POST['dob'];
					$tenperc=$_POST['tenperc'];
					$tenyear=$_POST['tenyear'];
					$twelthperc=$_POST['twelthperc'];
					$twelthyear=$_POST['twelthyear'];
					$degree=$_POST['degree'];
					$degreeyear=$_POST['degreeyear'];
					$gap=$_POST['gap'];
					
							
							$query="select * from student_registration  WHERE email='$email'";
							$query_run=mysqli_query($con,$query);
							
						    if(mysqli_num_rows($query_run)>0)
							{
								//ther is already a user with the same username
								echo '<script type="text/javascript"> alert("Email is already use try to another") </script>';
							}
							else
							{
								//insert value on database
								$query1="insert into student_registration values('','$name','$email','$mobileno','$dob','$tenperc','$tenyear','$twelthperc','$twelthyear','$degree','$degreeyear','$gap')";
								$query_run1=mysqli_query($con,$query1);
								if($query_run1)
								{
									echo '<script type="text/javascript"> alert("Successfull Register") </script>';
								}
							}
				}
				echo "<script> location.replace('../std_register.html'); </script>";
				
?>