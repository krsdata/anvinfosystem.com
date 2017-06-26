<?php
/**
 * The template for displaying all single posts
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
 
$queried_post = get_post($post->ID);

?>
    


                <!-- Title -->
                <h1><?php echo $queried_post->post_title; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">
                        <?php $author_id=$queried_post->post_author; ?>
<?php the_author_meta( 'user_nicename' , $author_id ); ?> 
                        </a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><?php echo get_the_date($post_ID); ?></p>

                <hr>

                <!-- Preview Image -->
                <?php the_post_thumbnail(); ?>

                <hr>

                <!-- Post Content -->
                <p><?php echo $queried_post->post_content; ?></p>
                <hr>

                <!-- Blog Comments -->
                    <div class="well">
                <?php comment_form( $post_ID ); ?>
                    </div>

                
                <hr>

                <!-- Posted Comments -->

        
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