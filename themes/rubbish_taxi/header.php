<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="google-site-verification" content="gSkwMzF7kI9dFioDOMlzanXE7X_ElDFjGqifjKnzXWU" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Raleway Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
function contactfrm()
{
	var name=document.forms["confrm"]["name"].value;
if (name==""){
 alert("Please Enter Name");
 document.forms["confrm"]["name"].focus();
  return false;
}
var email=document.forms["confrm"]["email"].value;
if (email==""){
 alert("Please Enter Email Address");
 document.forms["confrm"]["email"].focus();
  return false;
}
var email=document.forms["confrm"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  {
 alert("Not a valid e-mail address"); 
document.forms["confrm"]["email"].focus();
  return false;
  }
  var postcode=document.forms["confrm"]["postcode"].value;
if (postcode==""){
 alert("Please Enter Postcode");
 document.forms["confrm"]["postcode"].focus();
  return false;
}
var pno=document.forms["confrm"]["pno"].value;
if (pno==""){
 alert("Please Enter Phone Number");
 document.forms["confrm"]["pno"].focus();
  return false;
}
var pno=document.forms["confrm"]["pno"].value;
var count=document.forms["confrm"]["pno"].value.length;
if (count>10){
 alert("Phone Number cannot be greater than 10 digit");
 document.forms["confrm"]["pno"].focus();
  return false;
}
if (pno!=null || pno!="")
  {
  if(isNaN(pno)){
  alert("Please Enter Phone Number in Numeric Value");
  document.forms["confrm"]["pno"].focus();
  return false;
  }
  }
var service=document.getElementsByName("service[]");
pro_len=service.length;
var flag=0;
for(i=0;i<pro_len;i++)
{
	if(service[i].checked)
	{
		flag=1;
		break;
	}
}
if(flag==0)
{
alert("Select at least one Service Type");
return false;
}  
var commands=document.forms["confrm"]["commands"].value;
if (commands==""){
 alert("Please Enter Commands");
 document.forms["confrm"]["commands"].focus();
  return false;
}     
}
</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="cus-menu container add">
        <a class="logo" href="<?php echo get_option('home'); ?>"> <span><?php echo get_post_meta($post->ID, 'page_title', true); ?></span></a>

<div class="header_social">          
<a href="https://twitter.com/TheRubbishTaxi"><img src="<?php bloginfo('template_url'); ?>/images/follow-twitter.png" alt="twitter" width="45"></a>
<a href="https://www.facebook.com/pages/The-Rubbish-Taxi/123269484398408" class="pull-right"><img src="<?php bloginfo('template_url'); ?>/images/follow-facebook.png" alt="facebook" height="34"></a>
</div>

     	
       	<div class="navx">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
        
         <div class="navbar-collapse collapse">
         <?php

			$defaults = array(
				'theme_location'  => 'left-menu',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $defaults );
			
			?>
            <?php

//			$defaults = array(
//				'theme_location'  => 'right-menu',
//				'menu'            => '',
//				'container'       => '',
//				'container_class' => '',
//				'container_id'    => '',
//				'menu_class'      => '',
//				'menu_id'         => '',
//				'echo'            => true,
//				'fallback_cb'     => 'wp_page_menu',
//				'before'          => '',
//				'after'           => '',
//				'link_before'     => '',
//				'link_after'      => '',
//				'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
//				'depth'           => 0,
//				'walker'          => ''
//			);
//
//			wp_nav_menu( $defaults );


         wp_nav_menu( array(
                 'theme_location'    => 'right-menu',
                 'depth'             => 2,
                 'container'         => 'div',
                 'container_class'   => 'collapse navbar-collapse rbt-main-menu',
                 'container_id'      => 'bs-example-navbar-collapse-1',
                 'menu_class'        => 'nav navbar-nav navbar-right',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                 'walker'            => new wp_bootstrap_navwalker())
         );
			
			?>
            
          </div><!--/.nav-collapse -->
         </div><!--/.container-fluid -->
      </div>
      </div>
    </div>
				
			