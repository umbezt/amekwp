<?php

/**
 * Page page
 */

get_header();

?>

<div class="container"><!-- OR container-fluid for full width grid -->

    <?php if ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-md-12">
            <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php get_footer();

