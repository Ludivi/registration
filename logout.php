<?php
	// Initialise la session
	session_start();
	
	// Détruit la session.
	if(session_destroy())
	{
		// Go vers la page de connexion
		header("Location: login.php");
	}
?>
