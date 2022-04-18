<?php get_header() ?>

<div id="primary" class="content-area">

<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

<article>
    <h1 class="post-title"><?php the_title() ?></h1>
    <?php the_content() ?>

<?php endwhile; ?>


<?php else : ?>


<?php endif; ?>


  
</div>
    
<?php    
get_footer() ?>