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
	
	include "dbfuncs.php";      
          
    $connect = iConnect();
	
	$stmt = $connect->prepare("INSERT INTO episodes (title,type,recordeddt,
		synopsis,url) VALUES (:q1,:q2,:q3,:q4,:q5)");
		$stmt->bindValue(':q1', $title, PDO::PARAM_STR);
		$stmt->bindValue(':q2', $type, PDO::PARAM_STR);
		$stmt->bindValue(':q3', $recordeddate, PDO::PARAM_STR);
		$stmt->bindValue(':q4', $descr, PDO::PARAM_STR);
		$stmt->bindValue(':q5', $url, PDO::PARAM_STR);
	$stmt->execute();
	
	header("Location: listennew.php");
?>