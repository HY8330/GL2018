<?php
/**
 *
 */
class ClassName extends AnotherClass
{
    $servername ;
    $username;
    $password;
    public static  $conn;
  function __construct(argument)
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
  }
  public connection() {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=scrumdb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
  } // fin cmethode

} // fin class





 ?>
