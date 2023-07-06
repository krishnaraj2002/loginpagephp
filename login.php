<?php
session_start();

$conn=mysqli_connect("localhost","root","","krishna");
if($conn)
{
    echo "DataBase Connected";
}
else
{
    echo "DataBase Not Connected";
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data): string
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login1.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login1.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM data WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) !== 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['uname'] = $row['user_name'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login1.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: login1.php?error=Incorrect User name or password");
	        exit();
		}
	}

}else{
	header("Location: login.html");
	exit();
}