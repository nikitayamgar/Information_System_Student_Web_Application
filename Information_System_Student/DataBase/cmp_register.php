<?php
	require 'config.php';
?>
<?php
				
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$type=$_POST['type'];
					$experiance=$_POST['experiance'];
					$tenth=$_POST['tenth'];
					$diploma=$_POST['diploma'];
					$degree=$_POST['degree'];
					$language=$_POST['language'];
					$passport=$_POST['passport'];
					$address=$_POST['address'];
					$photo=$_POST['photo'];
					
						
								//insert value on database
								$query="insert into company_info values('','$name','$type','$experiance','$tenth','$diploma','$degree','$language','$passport','$address','$photo')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> alert("Successfull Register") </script>';
								}
				}
				echo "<script> location.replace('../cmp_register.html'); </script>";
				
?>