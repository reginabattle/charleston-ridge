<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Randall Branding Agency
 * @since Randall Branding Agency
 */
?>
<!DOCTYPE html>
<html>
<head>
  <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
  <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/icons/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_DIR; ?>/images/icons/apple-touch-icon-144x144.png" /> 

  <title><?php wp_title(''); ?></title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<?php wp_head(); ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78614492-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body <?php body_class( $class ); ?>>

  <!-- Utility Nav -->
  <header class="utility-nav">
    <div class="row">
      
      <div class="client-login six mobile-two columns">
        <a href="https://charlestonridgeapartments.residentportal.com/resident_portal/?module=authentication&action=view_login" target="_blank">Resident Portal</a> &bull; <a href="https://www.rentpayment.com/pay/login.html?pc=K5ZH7B4K43" target="_blank">Pay Rent</a>
      </div>

      <div class="contact-phone six columns">
        <p>Call Us: 804.299.3321</p>
      </div>

    </div>
  </header>  
  <!-- end utility nav -->
	
	<!-- Header -->
  <header class="header-wrapper">
    <div class="header-inner row">

      <a class="site-title" href="<?php echo home_url(); ?>">&nbsp;</a>
      <a id="pull" class="menu-btn show-for-small" href="#"></a>

      <nav class="main-nav left six columns">
        <?php wp_nav_menu(array( 
          'theme_location' => 'menu-left', 
          'container' => false,
          'menu_id' => '',
          'menu_class' => ''
          )); 
        ?>
      </nav>

      <nav class="main-nav right six columns">
        <?php wp_nav_menu(array( 
            'theme_location' => 'menu-right', 
            'container' => false,
            'menu_id' => '',
            'menu_class' => ''
          )); 
        ?>
      </nav>

    </div>
  </header>
  <!-- end header -->

  <!-- Apply button -->
  <a href="https://charlestonridgeapartments.prospectportal.com/Apartments/module/application_authentication/property[id]/254319/show_in_popup/false/kill_session/1/" target="_blank" class="apply-btn">Apply now</a>


