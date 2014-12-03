<?php

/**
 * Index page
 */

get_header();

?>

<div class="container"><!-- OR container-fluid for full width grid -->

    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-4">
            <?php if ( dynamic_sidebar() ) : ; endif; ?>
        </div>
    </div>

</div>

<?php get_footer();

