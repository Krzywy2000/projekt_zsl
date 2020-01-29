<?php
    session_start();
	
	if ((!isset($_POST['user'])) || (!isset($_POST['password'])))
	{
		header('Location: ../../index.php');
		exit();
	}

	require_once "db_connect.php";

	$connect = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	else
	{
		$login = $_POST['user'];
		$password = $_POST['password'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
		if ($result = @$connect->query(
		sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
		mysqli_real_escape_string($connect,$login),
		mysqli_real_escape_string($connect,$password))))
		{
			$ilu_userow = $result->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$row = $result->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['access'] = $row['access'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['surname'] = $row['surname'];
				$_SESSION['ip'] = $row['ip'];
				
				unset($_SESSION['blad']);
				$result->free_result();

				$date = date("Y-m-d");
				mysqli_query("UPDATE users SET last_login = '$ip' WHERE id = '$_SESSION[id]'");
				
				if($_SESSION['access'] == 'admin')
				{
					header('Location: ../../index_admin.php');
				}
				
				if($_SESSION['access'] == 'uczen')
				{
					header('Location: ../../index_student.php');
				}
				
			} 
			else 
			{
				header('Location: ../../index.php');
			}
			
		}
		
		$connect->close();
	}
?>