<?
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<style>
body {
        background-image: images/image001.png;
        }
</style>
<title>Login Admin</title>

<!-- Login Code Was Coded By Rizky21ID -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/index_background.css">
<link rel="stylesheet" href="css/materialize.min.css">
<body class="w3-container" background-image="images/6070417286_be688180aa_b.jpg">
<form method="post" action="aksi_login.php">
<p>&nbsp;</p><center>
<p>&nbsp;</p><center>
<p>&nbsp;</p><center>
<div class="w3-tag w3-round w3-white" style="padding:5px">

  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:300px">
  <div>

  </div>
  <div class="w3-container">
<?php include("kanan.php")?>
</div>
    <div class="w3-center"><br>
      <img src="images/image001.png" alt="Avatar" style="width:40%" class="w3-margin-top">
    </div>

  <div class="w3-container">
  <div class="w3-section">
<!--        <label><b>Username</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="username" placeholder="Enter Username" id="username">

        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password"> -->
        
	<p>
<input class="w3-input" type="text" name="username" placeholder="Enter Username" required>
<label class="w3-label w3-validate">Username</label></p>
<p>
<input class="w3-input" type="password" name="password" placeholder="Enter Password" required>
<label class="w3-label w3-validate">Password</label></p>	
		
        <button class="w3-btn w3-btn-block w3-section">Login</button>
		<!--
		<td><input value="Reset" type="reset" class="w3-btn "/></td>
        <td><input value="Refresh" type="button" onclick="self.history.back ()" class="w3-btn"/> -->
      </div>
    </div>


  </div>
</div>
            
</body>

</html> 
