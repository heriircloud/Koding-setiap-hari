<?php
//initial.php
$db_host	= '';//localhost
$db_name	= '';//db_test
$db_user	= '';//root
$db_pass	= '';//password
$hosting 	= '';//www.yourdomain.com
$local 		= '';//localhost

define('DB_HOST', $db_host, TRUE);
define('DB_NAME', $db_name, TRUE);
define('DB_USER', $db_user, TRUE);
define('DB_PASS', $db_pass, TRUE);
define('HOSTING', $hosting, TRUE);
define('LOCAL', $local, TRUE);

//bisa dipisah asal di include/require
//function.php
function database(){
    $root = $_SERVER['HTTP_HOST'];
    if($root == DOMAIN1){
        $host =     DB_HOST;
        $name =     DB_NAME;
        $user =     DB_USER;
        $pass =     DB_PASS;
        $connect = array($host,$name,$user,$pass);
        return $connect;
    }elseif($root == DOMAIN2){
        $host =     '';
        $name =     '';
        $user =     '';
        $pass =     '';
        $connect = array($host,$name,$user,$pass);
        return $connect;
    }else{
        die("con error");
    }
}

function con(){
    $host = database()[0];
    $name = database()[1];
    $user = database()[2];
    $pass = database()[3];

    mysqli_report(MYSQLI_REPORT_STRICT);

    try {
        $con = mysqli_connect($host,$user,$pass,$name);
        $con->query("set character_set_results='utf8'");
        return $con;
    }catch (Exception $e) {
        if (mysqli_connect_errno()) {
            die(" (╯°□°)╯︵ ┻━━━━ ".strrev("Failed to connect to MySQL: " . mysqli_connect_errno())." ━━━━┻"."<hr>". mysqli_connect_error()) ;
        }
    }
}

//contoh cara pake
//function di class user
function register($username,$password){
	$user = mysqli_real_escape_string(con(), $username);
	$pass = mysqli_real_escape_string(con(), $password);

	$query = "call Procedure_Add_User('$user','$pass')";

	if(!mysqli_query(con(),$query)) {
		die('Error: ' . mysqli_error(con()));
	}

	die($query);//Hapus ini jika ingin digunakan

	mysqli_close(con());
	header("location:index.php");
}

$username = "username";
$password = "password";

register($usename,$password);
