<?php
include "config/koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php?module=log1");
}
?>
<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<title>GatePass Administration System</title>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:00 GMT -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-teal.css">
 <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:250px;">
  <a href="#" class="w3-border-bottom w3-large"><img src="images/image001.png" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-text-teal w3-hide-large w3-closenav w3-large">Close &times;</a>
  <a href="?module=home" class="w3-light-grey w3-medium"><img src='images/home.png' width='30px' heigth='30px'>  Home</a>		
  <a href="?module=petugas"><img src='images/petugas.png' width='30px' heigth='30px'>    Petugas</a>		
  <div class="w3-accordion">
	<a onclick="myFunc('Demo3')" href="javascript:void(0)"><img src='images/2000px-Car_with_Driver-Silhouette.svg.png' width='30px' heigth='30px'>  Kendaraan <i class="fa fa-caret-down"></i></a>
    <div id="Demo3" class="w3-accordion-content w3-animate-left w3-padding">
      <a href="?module=jenis">Jenis Kendaraan</a>
      <a href="?module=pemilik">Pemilik</a>	
      <a href="?module=kendaraan">Kendaraan</a>
	  </div>
	  </div>
  <a href="?module=lokasi"><img src='images/15-512.png' width='30px' heigth='30px'>  Lokasi</a>		
  <a href="?module=kategori"><img src='images/kategori.png' width='30px' heigth='30px'>  Kategori</a>			
  <a href="?module=gatepass"><img src='images/car-gate-512.png' width='30px' heigth='30px'>  Gate Pass</a>		
  <a href="?module=logout" onclick="return confirm('Apakah anda yakin ingin log out?')"><img src='images/back.png' width='30px' heigth='30px'>  Log Out</a>	
<!-- Untuk Tambah Drop Down -->
  <!--
  <div class="w3-accordion">
	<a onclick="myFunc('Demo3')" href="javascript:void(0)">Drop Down <i class="fa fa-caret-down"></i></a>
    <div id="Demo3" class="w3-accordion-content w3-animate-left w3-padding">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>	-->	
  <!-- Untuk Tambah Drop Down -->
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <table border="0">
  <td>GatePass Administration System</td>
  <td> </td>
  <td>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-green w3-large"><?php echo"<b>$_SESSION[nama_petugas] : <b>$_SESSION[level]</b>"; ?></button>

<div id="id01" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
  class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright w3-xxlarge">&times;</span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
<div class="w3-center"><p>&nbsp;</p>
<img src="images/petugas.png" alt="Avatar" heigth="100px" width="100px" class="w3-margin-top"><br><br>
<font color="black">Nama Petugas : <?php echo"<b>$_SESSION[nama_petugas]</b>"; ?></font></left><br> 
<font color="black">Level Petugas : <?php echo"<b>$_SESSION[level]</b>"; ?></font></left><br><br> 
      <a type="button" href="?module=logout" onclick="return confirm('Apakah anda yakin ingin log out?')" class="w3-btn w3-red">Log Out</a>
      <p>&nbsp;</p>
    </div>
    </div>

  </div>
</div>
  </td>
  </table>
</div>
<!--
<header class="w3-container w3-theme w3-padding-64 w3-padding-jumbo">
  <h1 class="w3-xxxlarge w3-padding-16">GatePass Administration System</h1>
</header> -->
<?php include "kanan.php"; ?>
<!-- Hanya Untuk Tambahan -->
<!--
<div class="w3-container w3-padding-jumbo">
  <h1 class="w3-text-teal">Welcome To GatePass Administration System</h1>
  <h5>W3.CSS is a small, fast, and modern CSS framework with built-in responsiveness.</h5>
  <ul class="w3-leftbar w3-theme-border" style="list-style-type:none">
   <li>Designed to be smaller and faster than other CSS frameworks.</li>
   <li>Designed to be easier to learn, and easier to use than other CSS frameworks.</li>
   <li>Designed to provide CSS equality for all devices: PC, laptop, tablet, and mobile.</li>
   <li>Designed to use standard CSS only (No need for jQuery or JavaScript).</li>
   <li>Designed to speed up mobile HTML apps.</li>
   <li>W3.CSS is free to use. No license is necessary.</li>
  </ul>
  <br>
  
  <h2 class="w3-section w3-text-teal">Demo</h2>
  <div class="w3-example w3-section">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;div class="w3-container w3-teal"&gt;<br>&nbsp; &lt;h1&gt;My Header&lt;/h1&gt;<br>
 &lt;/div&gt;<br><br>&lt;img 
 src="img_car.png" alt="Car" style="width:100%"&gt;<br><br>&lt;div class="w3-container"&gt;<br>
 &nbsp;
 &lt;p&gt;A car is a wheeled, self-powered motor vehicle used for transportation.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
&lt;div class="w3-container w3-teal"&gt;<br>&nbsp; &lt;p&gt;My Footer&lt;/p&gt;<br>
 &lt;/div&gt;</div>
<a class="w3-btn w3-large w3-theme w3-margin-bottom" href="tryit3a67.html?filename=tryw3css_intro" target="_blank">Try It Yourself &raquo;</a>
</div>
<br>
  
<h2 class="w3-section w3-text-teal">Colors</h2>
<p>W3.CSS uses color classes.</p>
<p>The color classes are inspired by colors used in marketing, road signs, and sticky notes.</p>
<div class="w3-container w3-red"><p>w3-red</p></div><br>
<div class="w3-container w3-pink"><p>w3-pink</p></div><br>
<div class="w3-container w3-purple"><p>w3-purple</p></div><br>
<div class="w3-container w3-deep-purple"><p>w3-deep-purple</p></div><br>
<div class="w3-container w3-indigo"><p>w3-indigo</p></div><br>
<div class="w3-container w3-blue"><p>w3-blue</p></div><br>
<div class="w3-container w3-light-blue"><p>w3-light-blue</p></div><br>
<div class="w3-container w3-cyan"><p>w3-cyan</p></div><br>
<div class="w3-container w3-aqua"><p>w3-aqua</p></div><br>
<div class="w3-container w3-teal"><p>w3-teal</p></div><br>
<div class="w3-container w3-green"><p>w3-green</p></div><br>
<div class="w3-container w3-light-green"><p>w3-light-green</p></div><br>
<div class="w3-container w3-lime"><p>w3-lime</p></div><br>
<div class="w3-container w3-sand"><p>w3-sand</p></div><br>
<div class="w3-container w3-khaki"><p>w3-khaki</p></div><br>
<div class="w3-container w3-yellow"><p>w3-yellow</p></div><br>
<div class="w3-container w3-amber"><p>w3-amber</p></div><br>
<div class="w3-container w3-orange"><p>w3-orange</p></div><br>
<div class="w3-container w3-deep-orange"><p>w3-deep-orange</p></div><br>
<div class="w3-container w3-blue-grey"><p>w3-blue-grey</p></div><br>
<div class="w3-container w3-brown"><p>w3-brown</p></div><br>
<div class="w3-container w3-light-grey"><p>w3-light-grey</p></div><br>
<div class="w3-container w3-grey"><p>w3-grey</p></div><br>
<div class="w3-container w3-dark-grey"><p>w3-dark-grey</p></div><br>
<div class="w3-container w3-black"><p>w3-black</p></div><br>
<div class="w3-container w3-pale-red"><p>w3-pale-red</p></div><br>
<div class="w3-container w3-pale-yellow"><p>w3-pale-yellow</p></div><br>
<div class="w3-container w3-pale-green"><p>w3-pale-green</p></div><br>
<div class="w3-container w3-pale-blue"><p>w3-pale-blue</p></div>

</div>
-->
<!-- Hanya Untuk Tambahan -->
<footer class="w3-container w3-theme w3-padding-jumbo">
  <h5>Gate Pass Administration System</h5>
  <p>Developed By Santri Coder @ 2019</p>
</footer>
     
</div>

<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4");
    }
}

function myFunc(id) {
    document.getElementById(id).classList.toggle("w3-show");
    document.getElementById(id).previousElementSibling.classList.toggle("w3-theme");
}
</script>


     
</body>

<!-- Mirrored from www.w3schools.com/w3css/demo_material.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 09:49:04 GMT -->
</html> 