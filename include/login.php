<?php

/* this is for error debugging and will be removed in the live product. */
session_start();

require 'functions.php';

/* assigning post data to usable variables. and santising at the same time. */
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);

/* Check if inputs are empty (serverside), as you can never trust clients, they can edit fields in HTTP debuggers. */
checkEmptyInput($email);
checkEmptyInput($pass);
checkEmptyInput($name);
checkEmptyInput($age);

/* Check if the email is a valid email. */
checkEmail($email);

/* Check if the name is a valid name. */
checkName($name);

/* Check if the inputted age is a number and is between 18 and 100 */
checkAge($age, 18, 100);

/* Check if email exists already, in this function if the email does not exist it will continue to database insertion. */
checkEmailExists($email, $pass, $name, $age);



?>