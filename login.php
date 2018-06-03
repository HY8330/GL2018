<?php
$servername = "localhost";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=users", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 

    // on récupere les valeurs des champs username et pass de la requette post 
    $user  = $_POST['user'];
    $password  = $_POST['password'];
    $user = stripcslashes($user);
    $password = stripcslashes($password);
////$conn->exec("use login");

//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

//mysql_select_db("login");

    $result = $conn->query("select * from login where user = '$user' and password = '$password' and droit_acces='1' ") or die("failed to query data base".mysql_error());
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row['user'] == $user && $row['password'] == $password){
        //echo "username:".$username;
        //echo "password:".$password; 
     
     header("Location:index.php");
      //  echo " bienvenu"
    }else{
       // echo "mot de pass incorrect";
        header("Location:/login/indx.php?error=01");
    }

   } 
     catch(PDOException $e)
    
    { 

    echo "Connection failed:" . $e->getMessage();
    
    }
?>
