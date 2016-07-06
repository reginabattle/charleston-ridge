<?php get_header(); ?>

  
  <header class="page-title-wrapper">
    <div class="page-title row">
      
      <h1><a href="<?php echo home_url(); ?>/blog"><?php the_field('blog_title', 10); ?></a></h1>
      
    </div>
  </header>

   
  <section class="blog-entries section-wrapper">
    
    <!-- Blog entry -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <?php
        $attachment_id = get_post_thumbnail_id();
        $size = "blog";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
      ?>

      <div class="blog-entry row">

        <div class="post-meta one column ">
          <span class="post-date"><?php the_time('j'); ?></span> <br />
          <span class="post-month"><?php the_time('M'); ?></span>
        </div>

        <div class="post-content ten columns">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink() ?>"><img class="featured-img" src="<?php echo $image[0]; ?>" alt="<?php echo $image['alt']; ?>" /></a>
          <?php endif; ?>
           <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
           <?php the_excerpt(); ?> 
        </div>
        
      </div>

  
    <?php endwhile; else : ?>

      <p>No posts.</p>

    <?php endif; ?>
    <!-- end blog entry -->

  </section>

  <!-- Pagination -->
  <div class="post-nav row">
    <span class="nav-previous six mobile-two columns"><?php next_posts_link( '&larr; Previous' ); ?></span>
    <span class="nav-next six mobile-two columns"><?php previous_posts_link( 'Next &rarr;' ); ?></span>
  </div>
  <!-- end pagination -->


<?php get_footer(); ?>
