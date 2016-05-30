<!DOCTYPE html>
<?php 
    $classes = get_body_class();
?>
<html class="<?php echo $post->post_name; ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no">
	<title><?php wp_title('|', true, 'left'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/simplegrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/shadowbox.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/shadowbox.js"></script>


    <?php wp_head(); ?>

    	<script type="text/javascript">
    		Shadowbox.init();
    	</script>
    </head>
    <body <?php body_class(); ?> >
    	<div class="wrapper">
    		<header class="cf">
    			<div class="grid grid-pad">
    				<a href="http://www.doulaamelia.com">
    					<div class="col-10-12">
    						<h1 class="content">Amelia Thurston <span class="DONA">CD(DONA)</span></h1>

    						<?php
								if (in_array('home',$classes)) {
							?>

    						<p class="quote"><em>"The moment the child is born, the mother is also born.  She never existed before. The woman existed, but the mother, never. A mother is something absolutely new."</em><br> <strong>-Bhagwan Shree Rajneesh</strong></p>

    						<?php 
    							} else if (in_array('page-id-12',$classes)) {
    						?>

    						<p class="quote"><em>"The wisdom and compassion a woman can intuitively experience in childbirth can make her a source of healing and understanding for other women."</em><br> <strong>- Stephen Gaski</strong></p>

    						<?php 
    							} else if (in_array('page-id-21',$classes)) {
    						?>

    						<p class="quote"><em>"There is power that comes to women when they give birth. They don't ask for it, it simply invades them. Accumulates like clouds on the horizon and passes through, carrying the child with it." </em><br> <strong>- Sheryl Feldman</strong></p>

    						<?php
    							} else if (in_array('testimonials',$classes)) {
    						?>

    						<p class="quote"><em>"Giving birth should be your greatest achievement not your greatest fear." </em><br> <strong>- Jane Weideman</strong></p>

    						<?php
    							} else if (in_array('page-id-32',$classes)) {
    						?>

    						<p class="quote"><em>"The knowledge about how to give birth is born within every woman: women do not need to be taught how to give birth but rather to have more trust and faith in their own body knowledge." </em><br> <strong>- BirthWorks</strong></p>

    						<?php
    							} else if (in_array('page-id-38',$classes)) {
    						?>

    						<p class="quote"><em>"There is a secret in our culture, and it's not that birth is painful. It's that women are strong." </em><br> <strong>- Laura Stavoe Harm</strong></p>

    						<?php
    							} else if (in_array('page-id-35',$classes)) {
    						?>

    						<p class="quote"><em>"Birth is an opportunity to transcend. To rise above what we are accustomed to, reach deeper inside ourselves than we are familiar with, and to see not only what we are truly made of, but the strength we can access in and through birth" </em><br> <strong>- Marcie Macari</strong></p>

    						<?php
    							} else if (in_array('page-id-29',$classes)) {
    						?>

    						<p class="quote"><em>"If a woman doesn't look like a goddess in birth then someone isn't treating her right" </em><br> <strong>- Ina May Gaskin</strong></p>

    						<?php
    							} else if (in_array('evidence',$classes)) {
    						?>

    						<p class="quote"><em>"Birth is not only about making babies. Birth is about making mothers - strong, competent, capable mothers who trust themselves and know their inner strength.</em><br> <strong>- Barbara Katz Rothman</strong></p>

    						<?php
    							} else {
    						?>

    						<p class="quote"><em>"If a woman doesn't look like a goddess in birth then someone isn't treating her right" </em><br> <strong>- Ina May Gaskin</strong></p>

    						<?php } ?>

    					</div>
    					<div class="col-2-12">
    						<img src="http://i.imgur.com/wtSUeEf.png" alt="Amelia Thurston">
    					</div>
    				</a>
    				<h2>DONA Certified Birth Doula</h2>
    				<div class="nearby-cities">
    					<p>Serving San Francisco and Surrounding Cities</p>
    				</div>
    			</div>
    		</header>
    		<nav>
    			<div class="mobile-menu">
    				<i class="fa fa-bars"></i>
    				<h3 class="non-sel">Menu</h3>

    				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'slide-out' ) ); ?>

    			</div>
    			<div class="full-menu cf">

    				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

    			</div>
    		</nav>
    		<section class="cf">
