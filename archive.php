<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="post-preview col-xs-12  col-sm-6 col-md-4 article-wrap">
        <article class="post-preview">
            <h3><?php the_title()  ?></h3>
            <p><?php  the_excerpt(); ?></p>
            <p><a href="<?php echo get_permalink()  ?>">read more</a></p>
        </article>
    </div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php
$args = array(
    'posts_per_page' => 2
) ;
$my_query = new WP_Query($args) ;

?>
