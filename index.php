<?php 
	ini_set(display_errors, 'on');
	error_reporting(E_ALL);
	require 'tauler.php';
	$tauler = new Tauler(8,8,'escac');
	$tauler->show();
	echo '<br><br><br>';
	$tauler = new Tauler(8,8,'aleat');
	$tauler->show();
 ?>