<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="/roi/css/font-awesome.min.css">
	<!-- CSS3 button styles -->
	<link rel="stylesheet" type="text/css" href="/roi/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/roi/css/default.css" />
	<link rel="stylesheet" type="text/css" href="/roi/css/component.css" />
	
	<!-- CSS3 button js -->
	<script src="/roi/js/modernizr.custom.js"></script>
	<script src="/roi/js/classie.js"></script>
	<script src="/roi/js/bootstrap.min.js"></script>


</head>
<?php
	// print_r($_SERVER); die();

	if(!is_user_logged_in() && $_SERVER['REQUEST_URI']=='/roi/index.php/category/picks/'){		
		wp_redirect( home_url() ); exit;
		exit;
	}
	// echo 'bla >';
	// $results = $wpdb->get_results( 'select * from membership;', OBJECT );	
	// print_r($results); die();
?>
<?php $args = array(
        'echo'           => true,
        'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'form_id'        => 'loginform',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in'   => __( 'Log In' ),
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true,
        'value_username' => '',
        'value_remember' => false
); ?> 

<body <?php body_class(); ?>>
<div class="modal fade" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Members Login</h4>
      </div>
      <div class="modal-body">
        <?php wp_login_form( $args ); ?> 
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="logo-row">
				<a class="home-link fadeIn-5" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="/roi/images/logo.png"/>
					<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
				</a>	
				<div class="menu-btn-wrapper">
					<?php if(is_user_logged_in()): ?>
							<?php 
								$current_user = wp_get_current_user();
								// print_r($current_user);die();
								echo 'Welcome ' . $current_user->display_name . '! | <a href="'. wp_logout_url( home_url() ).'"><i class="fa fa-sign-out"></i> Logout</a>';
							?>
					<?php else: ?>
							<a href="#" class="btn btn-4 btn-4a icon-arrow-right">Subscribe</a>
							<a href="#" class="btn btn-customer pull-right fadeIn-10"  data-toggle="modal" data-target="#login-modal"><i class="fa fa-key"></i> Members Login </a>
					<?php endif; ?>	
				</div>	
			</div>	

			<div id="navbar" class="navbar navbar-wrapp">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu group', 'menu_id' => 'primary-menu' ) ); ?>
					<!-- <?php get_search_form(); ?> -->
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
