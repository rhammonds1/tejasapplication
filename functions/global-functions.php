<?php
session_start();

/* Global Variables */
define('accessDenied', 'accessDenied.php');
define('adminLandingPage', 'admin.php');
define('loginWithError', 'login.php?msg=loginerror');

define('DB_HOST', 's02.everleap.com');
define('DB_NAME', 'DB_2238_tejas');
define('DB_USER', 'DB_2238_tejas_user');
define('DB_PASSWORD', 'password1');

if (!$hasAccess) {
	header("Location: ".$GLOBALS['DB_HOST']); /* Redirect browser to access denine page */  
}

function mssql_insert_id() { 
    $id = 0; 
    $res = mssql_query("SELECT @@identity AS id"); 
    if ($row = mssql_fetch_array($res, MSSQL_ASSOC)) { 
        $id = $row["id"]; 
    } 
    return $id; 
}

function queryG0 ($sSQL) {

	/* dB connection information */
	$server = $GLOBALS['DB_HOST'];
	$user = $GLOBALS['DB_USER'];
	$pass = $GLOBALS['DB_PASSWORD'];
	$db = $GLOBALS['DB_NAME'];

	$dbhandle = mssql_connect($server, $user, $pass) or die("Couldn't connect to SQL Server on $server"); 
	$selected = mssql_select_db($db, $dbhandle) or die("Couldn't open database $db"); 	
	$result = mssql_query($sSQL);
	
	if (!$result) {
		return false;
	} else {	

		if (strpos($sSQL,'INSERT') !== false) {	
			$newID = mssql_insert_id();
			return $newID;
		} else {
			return $result;
		}
		
	}
	
	mssql_close($con);

}

function login($email,$password) {
	/* query db and set session variables, as necessary */
	
	$theQuery = "SELECT * FROM users WHERE email = '".$email."' AND userpassword = '".$password."'";
	$theData = queryG0($theQuery);
	
	if (!mssql_num_rows($theData)) {
		echo 'No records found';
	} else {
		while ($row = mssql_fetch_array($query)) {
			$thisEmail = $row['username'];
			$thisPassword = $row['userpassword'];
			$thisID = $row['id'];
			$thisAccessLevel = $row['accesslevel'];
		}
		
		if ($email == $thisEmail && $password == $thisPassword) {
		
			createSessionVariables($thisID, $thisAccessLevel);
			/* Redirect to admin landing page */
			header("Location: ".$GLOBALS['adminLandingPage']);
			
		} else {
			
			clearSessionVariables();
			/* Redirect to login with error msg */
			header("Location: ".$GLOBALS['loginWithError']);
			
		}
	}	
}

function createSessionVariables($userID, $accessLevel) {
	setSession("K12UserID", $userID);
	setSession("K12AccessLevel", $accessLevel);		
}

function clearSessionVariables() {
	unset($_SESSION['K12UserID']);
	unset($_SESSION['K12AccessLevel']);
}


function setSession($sessionName, $Value) {
	$_SESSION[$sessionName] = $Value;
}


function authorizeAccessToPage($requiredLevel) {
	if(isset($_SESSION['K12AccessLevel'])) {	
		if($_SESSION['K12AccessLevel'] >= $requiredLevel) {
			return 1;
		} else {
			return 0;		
		}
	}
}

function isLoggedIn() {
	if(isset($_SESSION['K12UserID'])) {
		return 1;
	} else {
		return 0;		
	}
}


?>