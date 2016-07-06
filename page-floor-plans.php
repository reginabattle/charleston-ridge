<?php 

  /*
    Template Name: Floor Plans
  */

  get_header(); 

?>

<div class="container">
  
  <!-- Section header/filters -->
  <section class="fp-filters section-wrapper row">
    
    <header class="section-header nine columns centered">
      <h1><?php the_field('section_header'); ?></h1>
      <?php the_field('header_content'); ?>
    </header>

    <div class="filters nine columns">
      <h2>Filter</h2>
      <ul>
        <li><?php echo facetwp_display( 'facet', 'bedrooms' ); ?></li>
        <li><?php echo facetwp_display( 'facet', 'price' ); ?></li>
      </ul>
    </div>

    <div class="button-wrapper three columns"><a class="site-plan-btn button green">View site plan</a></div>

    <div class="site-plan-content twelve columns">
      <?php echo do_shortcode('[drawattention ID=72]'); ?>
    </div>

  </section>
  <!-- end section/filters -->

  <section class="available-fp section-wrapper">
    <div class="row">
      
      <?php echo facetwp_display( 'template', 'floor_plans' ); ?>

    </div>
  </section>

</div>
<!-- end container -->

<?php get_footer(); ?>