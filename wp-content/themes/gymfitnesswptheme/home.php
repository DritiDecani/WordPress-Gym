<?php get_header();?>

<main class="conainer page section">
<ul class="blog-entries">
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/blog','loop');?>
    <?php endwhile; ?>
    </ul>
</main>

<?php get_footer();?>