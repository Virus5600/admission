
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
	include("connect.php");
	include("encrypt_url.php");
	switch($_REQUEST["type"])
	{
		case "in":
			session_start();
			$decrypt = decryptCookie(mysql_escape_string($_REQUEST["userid"]));
			unset($_SESSION['useraccess']);
			$_SESSION['useraccess'] = $decrypt;
			setcookie ('useraccess',$decrypt, null,-1);

			/*$decrypt2 = decryptCookie(mysql_escape_string($_REQUEST["username"]));
			unset($_SESSION['username']);
			$_SESSION['username'] = $decrypt2;
			setcookie ('username',$decrypt2, null,-1);*/
			
			echo "<script>window.location='mainpage.php';</script>";
		break;
		case "out":
		    // setcookie("useraccess", "", time()-60*60*2);
			unset($_SESSION['useraccess']);
			setcookie ('useraccess', "", null,-1);
			
			session_unset(); 
			session_destroy(); 
		break;
	}
?>

<body>
</body>
</html>