<?php
session_start(); 

require('Menuprincipal.php');
require('controller/controller.php');
// index .php du TP regex 

if (isset($_GET['action'])) {
    // modification du fichier ; ajout d'un commentaire
    // echo "action demandée = " . $_GET['action'];
    if ($_GET['action'] == 'regex') {
    	 	TestRegex();
	}
}


/*?> ommis car PHP only */