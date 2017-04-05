<?php
	
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/
	
	$passphrase = $_POST['passphrase'];
	
	if($passphrase != "MYOTxMik0U4s2B9ml")
	{
	  header("Location: index.php");
	  exit;
	}
	
	$title = $_POST['title'];
	$type = $_POST['type'];
	$recordeddate = $_POST['recordeddate'];
	$descr = $_POST['descr'];
	$url = $_POST['url'];
	$titletoupdate = $_POST['titletoupdate']; 
	
	include "dbfuncs.php";      
          
    $connect = iConnect();
	
	if ($titletoupdate == "Please_Select")
	{
		$stmt = $connect->prepare("INSERT INTO episodes (title,type,recordeddt,
			synopsis,url) VALUES (:q1,:q2,:q3,:q4,:q5)");
			$stmt->bindValue(':q1', $title, PDO::PARAM_STR);
			$stmt->bindValue(':q2', $type, PDO::PARAM_STR);
			$stmt->bindValue(':q3', $recordeddate, PDO::PARAM_STR);
			$stmt->bindValue(':q4', $descr, PDO::PARAM_STR);
			$stmt->bindValue(':q5', $url, PDO::PARAM_STR);
		$stmt->execute();
	}
	else
	{
		$stmt = $connect->prepare("UPDATE episodes SET url=:q1
			WHERE title=:q2");
			$stmt->bindValue(':q1', $url, PDO::PARAM_STR);
			$stmt->bindValue(':q2', $titletoupdate, PDO::PARAM_STR);
		$stmt->execute();
	}
	
	header("Location: listen.php");
?>