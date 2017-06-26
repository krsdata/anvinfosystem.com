<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="sub-banner">
        <img src="<?php bloginfo('template_directory'); ?>/img/sub-banner.jpg" width="100%;">
    </div>
   
   
   
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->
   <?php
global $post;

$category = get_the_category(); 


$args = array( 'numberposts' => 5,'category'=> $category[0]->cat_ID);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :  setup_postdata($post); ?>
    


                <!-- Title -->
                <h1><?php the_title() ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php the_author(); ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><?php the_date(); ?></p>

                <hr>

                <!-- Preview Image -->
                <?php the_post_thumbnail(); ?>

                <hr>

                <!-- Post Content -->
                <p><?php the_content(); ?></p>
                <hr>

                <!-- Blog Comments -->

                <a href="<?php the_permalink(); ?>">Read more -></a>
                <hr>

                <!-- Posted Comments -->

            
            
<?php endforeach; wp_reset_postdata(); ?>
                <!-- Comment -->
            

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                	
                <!-- Blog Search Well -->
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-4' ); ?>

<?php endif; ?>

                <!-- Blog Categories Well -->
                <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-5' ); ?>

<?php endif; ?>

                <!-- Side Widget Well -->
                <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-6' ); ?>

<?php endif; ?>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        

    </div>   
   
   
<?php get_footer(); ?>
