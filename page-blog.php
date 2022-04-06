<?php

/* Template Name: Custom Blog

*/

?>


<?php get_header();

/* Display posts form the books Category */
 $args = array(
        'post_type' => 'post',
         // 'cat' => '-3'
        'category_name' => 'books'
  );

 $query = new WP_Query($args);

 ?>

<div id="custom-posts-page">


    <!-- <h1>Books Category</h1> -->
    <?php   if ( $query->have_posts() ) : while ($query->have_posts() ) :$query->the_post(); ?>

    <div class="custom-post">

       <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <?php the_post_thumbnail('post-size') ; ?>
       <h3 >Written by</h3>
       <h3 class="post-date"><?php the_date(); ?><h3>
       <h3 class="post-category">Category - <?php the_category(); ?>  

        <?php the_excerpt() ; ?>
    </div>

      <?php endwhile;
       endif; ?>
</div>    

<?php wp_reset_postdata(); ?>


<?php
/* Display posts form the slides Category */
 $args = array(
        'post_type' => 'post',
         
        'category_name' => 'slides'
  );

 $query = new WP_Query($args);

 ?>



<h1>Slides Category</h1>
 <?php   if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>

 <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 <?php the_post_thumbnail('post-size') ; ?>
 

 <?php the_excerpt() ; ?>



 <?php endwhile; 

 endif; ?>    

 <?php wp_reset_postdata(); ?>

 <?php

/* Display posts form All Category */
 $args = array(
        'post_type' => 'post',
         
        'post_per_page' =>'6'
  );

 $query = new WP_Query($args);

 ?>




 <?php   if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>

 <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <?php the_post_thumbnail('post-size') ; ?>

  
 <?php the_excerpt() ; ?>



 <?php endwhile; 

 endif; ?>    

 
 
 <?php get_footer();?> 