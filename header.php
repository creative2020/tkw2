<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>
<script src="//use.typekit.net/vdd1zhl.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
</head>
<body>
<div class="container-fluid maxpg">

<div class="row">
    <div id="top" class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        
        <div class="logo col-xs-12 col-sm-5">
                
            <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
	            
	            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive">
	            
            </a>
        
        </div>
        
        <div class="col-xs-12 col-sm-7 pull-right">
        
            <div class="phone hidden-xs"> <h1 class="pull-right">913.451.2300</h1></div>
        
            <h1 class="phone-m col-xs-12 visible-xs-block text-center"><i class="fa fa-phone"></i> 913.451.2300</h1>
        </div>
    </div>
</div>         
    
<div id="navbar" class="row">
    <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
	    
		<?php wp_nav_menu( array(
                'menu'              => 'TT Main',
                'theme_location'    => 'tt-main',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
                        
    </div>
</div>
    
<!--    nav-->


    
<!--header-->
