<?php
/**
 * The main template file
 */

get_header(); ?>

<header id="header">
    <h1>Workstore Tokyo Do</h1>
</header>

<?php
if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

<article id="post-<?= get_the_ID() ?>">
    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>
</article>

<?php
endwhile; endif;

get_footer();
