<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $theme->title(); ?></title>

	<meta name="description" content="Description" />

	<?php $theme->header(); ?>

</head>
<body class="<?php $theme->body_class(); ?>">
	<div id="page">

		<div id="header">
			<h1 id="blogname"><a href="<?php Site::out_url('habari'); ?>"><?php Options::out('title'); ?></a></h1>
			<p id="tagline"><em><?php Options::out('tagline'); ?></em></p>
		</div> <!-- end header -->

		<hr />

		<div id="wrapper">

		<div id="content">
