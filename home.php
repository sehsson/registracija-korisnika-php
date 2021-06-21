<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>POČETNA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Pozdrav, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Odjava</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>