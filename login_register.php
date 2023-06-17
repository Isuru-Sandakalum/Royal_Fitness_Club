
<?php
	
require('./connection.php');
session_start();

#for login
if(isset($_POST['login'])){
	$query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
	$result=mysqli_query($con,$query);

	if($result)
	{
		if(mysqli_num_rows($result)==1)
		{

			$result_fetch=mysqli_fetch_assoc($result);
			if(($_POST['password'] == $result_fetch['password']))
			{
				#if password matched
				$_SESSION['logged_in']=true;
				$_SESSION['username']=$result_fetch['username'];
				header("location:./index.php");

			}
			else{
				#if not matched
				echo"
				<script> 
				alert('incorrect password');
				window.location.href ='./index.php';
				</script>";	
			}
		}	

		else
		{
			echo"
			<script> 
			alert('email or Username Not Registered');
			window.location.href = './index.php';
			</script>";		
		}

	}
	else
	{
		echo"
		<script> 
		alert('cannnot run query');
		window.location.href = 'index.php';
		</script>";	
	}

}

#for registration
if(isset($_POST['register'])){
	$user_exist_query="SELECT * FROM `registered_users` WHERE `username`= '$_POST[username]' OR `email`='$_POST[email]'";
	$result=mysqli_query($con,$user_exist_query);

	if($result){
		if(mysqli_num_rows($result)>0){ 
			$result_fetch=mysqli_fetch_assoc($result);
			if($result_fetch['username']==$_POST['username'])
			{	
				echo"
				<script>
				alert('$result_fetch[username] - User name has already taken');
				window.location = './index.php';
				</script>"; 	
			}
			else
			{
				echo"
				<script> 
				alert('$result_fetch[email] - email has already taken');
				window.location.href = './index.php';
				</script>"; 	
			}
		}
		else #names and email has not use below one will run and insert data
		{	
			//$password=password_hash($_POST['password'],PASSWORD_BCRYPT);
			$query="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `Password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')"; 
			if(mysqli_query($con,$query))
			{
				#if data insert successfully
				echo"
				<script> 
				alert('Registration successfull');
				window.location.href = './index.php';
				</script>"; 
			}
			else
			{
				#if data cannot add
				echo"
				<script> 
				alert('cannnot run query');
				window.location.href = 'index.php';
				</script>"; 
			}
			 
		}
		
		
	}

	else
	{
		echo"
		<script> 
		alert('cannnot run query');
		window.location.href = 'index.php';
		</script>"; 	
	}	
}

	

?>