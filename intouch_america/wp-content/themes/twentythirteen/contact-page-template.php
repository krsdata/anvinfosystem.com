<?php
/* Template Name: Contact Page template */
get_header(); ?>
<div class="sub-banner">
        <img src="<?php bloginfo('template_directory'); ?>/img/sub-banner.jpg" width="100%;">
    </div>
   
<div class="choose-plan">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-8">
                <div class="choose-plan-content">
                    <h2><?php the_title(); ?></h2>
                    
                    
                            <?php while ( have_posts() ) : the_post(); ?>

                
                        <?php the_content(); ?>
                
            <?php endwhile; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="right-main-content">
                    <form>
            <legend>Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>