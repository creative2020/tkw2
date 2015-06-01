<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>



<div id="slider-wrap" class="row">
	
		<div id="headline" class="col-xs-12 col-xs-offset-0 col-sm-offset-0 col-md-6 col-md-offset-0">
			<h1 class="col-sm-12 pull-left">The World's Only Perfect Window</h1>
			<h3 class="col-sm-12 pull-left">The Last Window You Will Ever Buy.</h3>
			<h4 class="col-sm-12 pull-left">Guaranteed to Never Stick, Rot, Warp, Fade, or Fail.</h4>
		</div>
		
		
		<div id="form-content" class="col-xs-12 col-xs-offset-0 col-md-offset-1 col-md-4">
			<h1>Let us show you the Perfect Window</h1>
			<p><?php gravity_form(1, false, false, false, '', true, 12);?></p>
		</div>
			
		
	
    
    
</div> <!--row-->

<div id="quicklink-wrap" class="row">
    <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <div class="row">
            
            <a href="/triple-glass/">
                
                <div class="quicklink col-sm-4">
                    
                    <h2>Triple Glass</h2>
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/triple-glass.png"/>
                    <p class="bucket-text">More efficient, Perfect.</p>
                </div>
            </a>
            <a href="/window-replacement/">
                <div class="quicklink col-sm-4">
                    <h2>Perfection Isn't Optional...</h2>
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/window-1.png"/>
                    <p class="bucket-text">It's engineered</p>
                
                </div>
            </a>
            <a href="/video/">
                <div class="quicklink col-sm-4">
                    <h2>Tour the Perfect Window</h2>
                    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-fpo.png"/>
                    <p class="bucket-text">Click to play the video</p>
                
                </div>
            </a>
    </div>
    </div>



</div>


  <?php get_footer() ?>
