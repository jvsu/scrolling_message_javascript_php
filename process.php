<?php 
	session_start();
	if(isset($_POST['action'])&& $_POST['action']=='data')
	{
		$text =  $_POST['words'];
		$words = explode(",",$text);
		$picture = $_POST['picture'];
		$_SESSION['words']= $words;
		$_SESSION['picture']=$picture;
		header('location:message_scroll.php');
	}
	if(isset($_POST['action'])&& $_POST['action']=='logoff')
	{
		session_destroy();
		header('location:home.php');
		die();
	}
 ?>
 