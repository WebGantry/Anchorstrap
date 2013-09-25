<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/wlif.css'); ?>" >
		<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
		<![endif]-->
	    
		<meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">
	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
 </head>
 <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="icon-anchor"></i> <?php echo site_name(); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
				<?php while(menu_items()) : ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a></li> 
				<?php endwhile; ?>
              </ul>
            </li>
          </ul>
			<form class="navbar-form navbar-right" role="search" id="search" action="<?php echo search_url(); ?>" method="post">
				<div class="form-group">
					<input type="search" id="term" name="term" class="form-control" placeholder="Search..." value="<?php echo search_term(); ?>" x-webkit-speech>
				</div>
					<button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
			</form>
        </div>
      </div>
    </div>
	 
	<div class="jumbotron">
      <div class="container">
        <h1><i class="icon-anchor"></i> <?php echo site_name(); ?></h1>
        <p><?php echo site_description(); ?></p>
      </div>
    </div>