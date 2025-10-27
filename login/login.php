<?php

define('INCLUDE_CHECK',true);

// Определяем путь к корневой папке
$dir = dirname(__DIR__) . '/';

// Единое подключение всех систем
require_once $dir.'config/system_init.php';

// Инициализируем систему логина
initializeLoginSystem();

if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe'])
{
	// If you are logged in, but you don't have the tzRemember cookie (browser restart)
	// and you have not checked the rememberMe checkbox:

	$_SESSION = array();
	session_destroy();
	
	// Destroy the session
}


if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();
	$redicet = $_SERVER['HTTP_REFERER'];
	header("Location: $redicet");
	exit;
}

if($_POST['submit']=='Login')
{
	// Checking whether the Login form has been submitted
	
	$err = array();
	// Will hold our errors
	
	
	if(!$_POST['username'] || !$_POST['password'])
		$err[] = 'Все поля должны быть заполнены';
	
	if(!count($err))
	{
		$_POST['username'] = trim($_POST['username']);
		$_POST['password'] = trim($_POST['password']);
		$_POST['rememberMe'] = (int)$_POST['rememberMe'];
		
		// Безопасная обработка данных с использованием prepared statements
		$usrnm = mysqli_real_escape_string($con, $_POST['username']);
		$psswrd = md5($_POST['password']);
		
		$sql = "SELECT * FROM `tz_members` WHERE `usr`=? AND `pass`=?";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $usrnm, $psswrd);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_array($result);
		mysqli_stmt_close($stmt);
		

		if($row['usr'])
		{
			// If everything is OK login
			
			$_SESSION['usr']=$row['usr'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['rememberMe'] = $_POST['rememberMe'];
			
			// Store some data in the session
			
			setcookie('tzRemember',$_POST['rememberMe']);
		}
		else { $err[]= 'Неправильно введён логин или пароль';}
	}
	
	if($err)
	$_SESSION['msg']['login-err'] = implode('<br />',$err);
	// Save the error messages in the session

	$redicet = $_SERVER['HTTP_REFERER'];
	header("Location: $redicet");
	exit;
}
else if($_POST['submit']=='Register')
{
	// If the Register form has been submitted
	
	$err = array();
	
	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>32)
	{
		$err[]='Логин должен быть от 3 до 32 символов';
	}
	
	if(preg_match('/[^a-z0-9\-\_\.]+/i',$_POST['username']))
	{
		$err[]='Введённый логин содержит недопустимые символы';
	}
	
	if(!checkEmail($_POST['email']))
	{
		$err[]='Неверно введён e-mail';
	}
	
	if(!count($err))
	{
		// If there are no errors
		
		$pass = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6);
		// Generate a random password
		
		$_POST['email'] = mysqli_real_escape_string($con, $_POST['email']);
		$_POST['username'] = mysqli_real_escape_string($con, $_POST['username']);
		// Escape the input data
		
		
		mysqli_query($con, "	INSERT INTO tz_members(usr,pass,email,regIP,dt)
						VALUES(
						
							'".$_POST['username']."',
							'".md5($pass)."',
							'".$_POST['email']."',
							'".$_SERVER['REMOTE_ADDR']."',
							NOW()
							
						)");
		
		if(mysqli_affected_rows($con)==1)
		{
			send_mail(	'support@hockeynation.su',
						$_POST['email'],
						'Registration System Demo - Your New Password',
						'Your password is: '.$pass);

			$_SESSION['msg']['reg-success']='Мы отправили ваш пароль на указанную почту!';
		}
		else $err[]='"Указанный логин уже занят"';
	}

	if(count($err))
	{
		$_SESSION['msg']['reg-err'] = implode('<br />',$err);
	}	
	$redicet = $_SERVER['HTTP_REFERER'];
	header("Location: $redicet");
	exit;
}

?>