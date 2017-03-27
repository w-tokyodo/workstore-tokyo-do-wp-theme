<?php
/**
 *
 */ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
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

wp_footer();?>
</body>
</html>
