<?php 

/* Check if any code has been 'recieved' by checking if the variable has been set. */
if(isset($_GET['code'])){
	$code = $_GET['code'];
	checkCodes($code);
}

function checkCodes($code){
	/* This function decides what code has been 'recieved' and calls the appropriate function. */
	if($code == "emailexists"){
		displayEmailExists();
	}
	if($code == "emptydata"){
		displayEmptyData();
	}
	if($code == "invalidemail"){
		displayInvalidEmail();
	}
	if($code == "invalidname"){
		displayInvalidName();
	}
	if($code == "invalidage"){
		displayInvalidAge();
	}
	if($code == "noinsert"){
		displayNoInsert();
	}
	if($code == "success"){
		displaySuccess();
	}
}

/* Functions in this group have descriptive names which show what codes they represent. */
function displayEmailExists(){
	echo 'This Email Already Exists.';
}

function displayEmptyData(){
	echo 'One Or More Of Your Fields Are Empty.';
}

function displayInvalidEmail(){
	echo 'Your Email Address Is Invalid.';
}

function displayInvalidName(){
	echo 'The Name You Entered Is Invalid.';
}

function displayInvalidAge(){
	echo 'The Age You Entered Is Invalid.';
}

function displayNoInsert(){
	echo 'Data has not been inserted.';
}

function displaySuccess(){
	echo 'User has successfully been registered.';
}
/* Functions in this group have descriptive names which show what codes they represent. */

?>