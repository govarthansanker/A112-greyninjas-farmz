<?php
// session_start();
// initializing variables
//$phoneno = "";
//$password    = "";
// connect to the database
 $db_name = "id12496001_plants";  
        $mysql_user = "id12496001_root";  
        $mysql_pass = "aravind7";  
        $server_name = "localhost";  
    $db= mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
// REGISTER USER
if (isset($_POST['reg_user']))
	{
  // receive all input values from the form
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  
  $sql="SELECT * from users where phoneno ='$phoneno' and password = '$password'";
  $result = mysqli_query($db,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check))
  {
    echo 0;
  }
  else
  {
    echo 1;
  }
	}
// ...
?>