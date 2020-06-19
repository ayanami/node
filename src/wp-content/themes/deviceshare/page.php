<?php get_header(); ?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <?php the_content(); ?>
    <?php
        endwhile;
    endif;
    ?>
    <div class="component-sm mx-auto my-3">
        <a class="btn btn-outline-brand-blue btn-block rounded-pill" href="#" role="button">会員登録</a>
    </div>

    <div id="bigBunner" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators circle">
            <li data-target="#bigBunner" data-slide-to="0" class="active"></li>
            <li data-target="#bigBunner" data-slide-to="1"></li>
            <li data-target="#bigBunner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://placehold.it/1024x400" alt="第1スライド">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/1024x400" alt="第2スライド">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/1024x400" alt="第3スライド">
            </div>
        </div>
    </div>
    <div class="component-lg mx-auto my-3 list-group-flush text-center">
        <h5>お知らせ</h5>
        <?php echo do_shortcode('[notices_list 2]'); ?>
    </div>
    <div class="mx-auto text-center">
        <span class="text-sub-content">もっと見る</span>
        <a href="#" class="ml-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/angle-right.svg" width="20" height="20" alt="dポイント">
        </a>
    </div>
</div>
<?php get_footer(); ?>