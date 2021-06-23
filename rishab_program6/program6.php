<?php
$user = "RISHAB";
?>
<!DOCTYPE html>
<html>
<head> <title> program 6 </title></head>
<style>
	body{
		color: white;
	}
</style>
<body style="background: blue;">
<center><h2> <?php echo $user; ?>,Welcome to Sample PHP Script </h2></center>
<?php
print "<h3> This program displays number of visits </h3>";
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>