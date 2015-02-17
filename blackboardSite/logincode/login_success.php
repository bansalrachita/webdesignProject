<?php

session_start();

//$_SESSION['myusername'] = $_POST['username'];
//$username=$_POST['user'];

//if(!isset($_SESSION['myusername'])){
//header("location:main_login.php");
//}

?>

<html>
<body>

<?php echo "Welcome". $_SESSION['myusername']."!";

header("location:index.html");

echo $_SESSION['myusername'];
?>
</body>
</html>