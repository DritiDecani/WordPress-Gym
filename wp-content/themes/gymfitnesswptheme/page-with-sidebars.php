<?php

/*
Template Name:Page with sidebar
*/
 get_header(); ?>
  <main class="container page section no-sidebars">
  <?php while(have_posts()): the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
    <?php
        if(has_post_thumbnail()):
           the_post_thumbnail('blog',array('class'=>'fetured-image'));
        else:
        echo "<p>No Image</p>";
        endif;
        
    ?>
        
        <?php the_content(); ?>
        
       
    <?php endwhile; ?>
    <aside>
        <h2>SideBar here</h2>
    </aside>
  </main>
   

<?php get_footer(); ?>
