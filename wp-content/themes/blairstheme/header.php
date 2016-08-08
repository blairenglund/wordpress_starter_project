<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<?php
	session_start();
	if ($_GET["theme"] == "cake time") { $_SESSION["theme"] = "cake time";}
	elseif ($_GET["theme"] == "classic") { $_SESSION["theme"] = "classic";}
	include 'php/themeswitcher.php' ?>

	<?php wp_head(); ?>
	
</head>
<body>
	<div class="flex-container">

	<?php get_sidebar(); ?>

		<div class="content">