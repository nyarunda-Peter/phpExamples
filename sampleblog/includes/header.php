<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>PHP Blog Site</title> -->

	<title><?php if(isset($page_title)) {echo "$page_title";} else {echo "PHP Blog Site";} ?></title>
	<meta name="description" content="<?php if(isset($meta_descriptions)) {echo "$meta_descriptions";} ?>">
	<meta name="keywords" content="<?php if(isset($meta_keywords)) {echo "$meta_keywords";} ?>">
	<meta name="author" content="Sample blog">

	<link rel="stylesheet" href="assets/css/bootstrap5.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

