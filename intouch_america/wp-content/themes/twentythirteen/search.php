<?php
/**
 * The template for displaying Search Results pages
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
  <?php if ( have_posts() ) : ?>  
<div class="well">
<?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
  </div>             
              <?php while ( have_posts() ) : the_post(); ?>  
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

                <?php endwhile; ?>

                

            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>            
            

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