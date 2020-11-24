<?php
include 'connect.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$error = "";
		if(!empty($_POST['username'])){
			$username = strip_tags($_POST['username']);
		}else{
			$error = "Please enter a username";
		}
		if(!empty($_POST['password'])){
			$password = $_POST['password'];
		}else{
			$error = "Please enter a correct password";
		}
		if($error == ""){
			$query = "SELECT name, username FROM users WHERE(username = '$username' AND password = md5('$password'))";
			$result = @mysqli_query($db, $query);
			if(@mysqli_num_rows($result) == 1){
				session_start();
				$_SESSION = mysqli_fetch_array($result,MYSQLI_ASSOC);
				header("location: /home");
				exit();
				mysqli_free_result($result);
				mysqli_close($db);
			}else{
				print "Your username or password is incorrect";
			}
		}
		print $error;
	}?>