<?php
$now="Y-m-d";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date($now);
?>
<br>
<?php
$t = date("H");

if ($t <= "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?> <br>
<?php
$x = 75;
$y = 25 * 100;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?> <br>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?> 