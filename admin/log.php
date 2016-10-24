<?php
ob_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['password']))

	{
		session_start();
	}

	include "../db/db.php";
	
	if($_GET['act']=='login')
	{
		$username	= $_POST['username'];
		$password	= md5(md5($_POST['password']));
		$sql 	= "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
		$result = mysql_query($sql);
		if($result)
		{
			if(mysql_num_rows($result)==1)
			{
				$record = mysql_fetch_array($result);
				$_SESSION['login']	= true;
				$_SESSION['id']		= $record['id'];
				header('location:index.php');
			}
			else {
				header('location:index.php');
				}
		}
		else
		{
			$error="";
			if($username==null && $_POST['password']==null)
			{
				echo '[removed]alert("Username dan Password masih kosong");[removed]';
				refresh('0','../index.php');
			}
			else if($username==null)
			{
				echo '[removed]alert("Username masih kosong");[removed]';
				refresh('0','../index.php');
			}
			else if($_POST['password']==null)
			{
				echo '[removed]alert("Passwordnya masih kosong");[removed]';
				refresh('0','../index.php');
			} 
			else
			{
				echo '[removed]alert("Username dan Passwordnya tidak sesuai");[removed]';
				refresh('0','../index.php');
			}
		}
	} elseif($_GET['act']=='logout') {
		unset($_SESSION['login']);
		unset($_SESSION['id']);
		header('location:../index.php');
	}
?>