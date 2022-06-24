<?php get_header(); ?>

<main class="conainer page section">

    <?php
    $author = get_queried_object();

    ?>
    <h2 class="text-center primary-text">Author: <?php echo $author->data->display_name; ?>
    </h2>

    <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID) ?></p>


    <?php get_template_part('template-parts/blog', 'loop'); ?>

</main>

<?php ?>
<?php get_footer(); ?>