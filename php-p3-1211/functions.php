
<?php

function checkLoggedIn() {
if(isset($_SESSION['userName'])) {
$loggedIn = true;
} else {
$loggedIn = false;
}
return $loggedIn;
}
if(checkLoggedIn()) {   //de return-waarde van
	echo 'Je bent welkom';

} else {

	echo 'Je moet eerst inloggen om toegang te krijgen';
}