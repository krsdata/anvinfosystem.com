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
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap -->
	
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
	 <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4KaTDCsp3NoYcsLXJFoWKWV4f5MWjAnO";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
 

  </head>
   <?php wp_head(); ?>
  <body class="woocommerce">
  	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php endif; ?>
				</div>
				<div class="col-sm-6">
					<div class="pull-right">
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-2' ); ?>

<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="header_banner">
    
            <div class="header" id="nav_fix">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo">
                               
                                    <?php show_easylogo(); ?>
                               
                            </div>
                        </div>
                        <div class="col-sm-9">
                            
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<img src="<?php bloginfo('template_directory'); ?>/img/burger.png" alt="menu">
								  </button>
								</div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									  
									  
									  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav') );
									  
									  
									  ?>
									  
									</div>
                
                        </div>
                    </div>
                </div>
            </div> <!--end header-->
    
             <!--end hero_section-->
                
                	
                    
    </div> <!--end header_banner-->