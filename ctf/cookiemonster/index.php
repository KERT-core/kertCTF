<?php
$value = "oreo";

// cookie will expire when the browser close
setcookie("myCookie", $value);

// cookie will expire in 1 hour
//setcookie("myCookie", $value, time() + 3600);

// cookie will expire in 1 hour, and will only be available
// within the php directory + all sub-directories of php
//setcookie("myCookie", $value, time() + 3600, "/php/");
?> 
<html>
<body>
<?php
if(isset($_COOKIE['myCookie']) && $_COOKIE['myCookie']== "choco" ) {
     echo 'kertCTF{c00k13_lS_7h3_b3S7}';
     }
     else {
      echo 'i want choco!';
     }
?>
</body>
</html>
