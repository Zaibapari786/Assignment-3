<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body>
	<?php include 'nav.php'; ?>
		 
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name="admin_db"; 
$tbl_name="emp"; 
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

	$emp_id = $_POST['emp_id'];
//echo "emp is:",$emp_id;
	$v1=$_POST['user'];
	$v2=$_POST['age'];
	$v3=$_POST['location'];
                  $v4=$_POST['salary'];
	$sql = "UPDATE emp SET emp_name = " ."'".$v1."'".", Age = $v2, location= " ."'".$v3."'".", salary=$v4 WHERE emp_id = $emp_id";
//echo $sql;
$res = mysql_query($sql);
if($res) {
	
		echo "<marquee><h1 style= color:purple;><center> A Record has been updated.</center></h1></marquee>";
	
	  } else {
		printf ("Could not update record: %s\n", mysql_error());
	}
?>
  
	</body>
</html>
