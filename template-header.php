<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title><?php if ($pageClass!='') echo "$pageClass –"; ?> [Temp - Site title]</title>
        
        <meta name="description" content="[Temp - Site description]">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <link rel="shortcut icon" href="img/favicon.ico">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="[Temp - Site title]">
        <meta property="og:url" content="http://">
        <meta property="og:description" content="[Temp - Site description]">
        <meta property="og:image" content="http://">        
        
        <link rel="stylesheet" href="css/h5bp.css">
        <link rel="stylesheet" href="components/components.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/theme.css">
        
		<script src="js/vendor/modernizr.custom.80453.js"></script>
    </head>
    <body class="
	<?php
    	if ($pageClass == 'Homepage') {
			echo 'page-not-signed-in page-home';
		}
	?>">
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="page" class="site">
        
            <header id="masthead" class="site-header" role="banner">
                <div id="masthead-cr">                    
                    <div class="masthead-headers">
                        <h1 class="site-title-cr">
                            <a class="site-title-link" href="#" rel="home" title="Home">
                                <span class="site-title">[Temp - Site title]</span>
                            </a>
                        </h1>
                        <p class="site-desc">[Temp - Site description]</p>
                    </div>
                    
					<?php include("template-nav-main-home.php"); ?>
                
                </div>
            </header><!-- #masthead -->