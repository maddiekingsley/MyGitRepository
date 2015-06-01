<?php 
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>
<html>
<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<title> 
	Counter
</title>
</head>
<body>

<h1> Prac 6 </h1>
<h2> Welcome to my INFS3202 </h2>
<?php
  echo "<hr><div align=\"center\">";
 
  include_once "counter.php"; // this will include the counter.
 
  echo "</div>";
  echo "Page will refresh every 2 Seconds!";
?>
</body>
</html>
<?php

?>
