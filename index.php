<!DOCTYPE html>
<html>
<body>
<?php 
/* The 'errors.php' files is included to display error/success codes. */
require 'include/errors.php';
?>
<h2>Register</h2>

<form action="include/login.php" method="post">
  <input type="email" id="e" name="email" placeholder="email@domain.com" required=""><br><br>
  <input type="password" id="p" name="pass" placeholder="password" required=""><br><br>
  <input type="name" id="n" name="name" placeholder="John" required=""><br><br>
  <input type="age" id="a" name="age" placeholder="18-100" required=""><br><br><br>
  <input type="submit" value="Register">
</form> 

</body>
</html>
