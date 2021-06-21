<!DOCTYPE html>
<html>
<head>
	<title>PRIJAVA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>PRIJAVA NA SISTEM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Korisničko ime</label>
     	<input type="text" name="uname" placeholder=""><br>

     	<label>Lozinka</label>
     	<input type="password" name="password" placeholder=""><br>

     	<button type="submit">Prijava</button>
          <a href="signup.php" class="ca">Kreirajte novi nalog</a>
     </form>
</body>
</html>