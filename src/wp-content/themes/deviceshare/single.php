<?php get_header(); ?>
<div class="container-fluid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
    </nav>
</div>
<?php get_footer(); ?>