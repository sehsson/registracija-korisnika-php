<!DOCTYPE html>
<html>
<head>
	<title>Registracija!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Besplatna registracija</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Ime</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder=""
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder=""><br>
          <?php }?>

          <label>Korisničko ime</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder=""
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder=""><br>
          <?php }?>


     	<label>Lozinka</label>
     	<input type="password" 
                 name="password" 
                 placeholder=""><br>

          <label>Ponovite lozinku</label>
          <input type="password" 
                 name="re_password" 
                 placeholder=""><br>

     	<button type="submit">Završi registraciju</button>
          <a href="index.php" class="ca">Već imate nalog?</a>
     </form>
</body>
</html>