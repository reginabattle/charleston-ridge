<?php get_header(); ?>


<div class="container">
  
  <!-- Section header-->
  <section class="section-wrapper row">
    
    <header class="section-header nine columns centered">
      <h1><?php the_field('section_header'); ?></h1>
      <?php the_field('header_content'); ?>
    </header>

  </section>
  <!-- end section/filters -->

  <section class="section-wrapper cream">
    <div class="row">
    
      <div class="content <?php if(is_page('contact-us')) : ?>seven<?php else : ?>ten<?php endif; ?> columns">
        <?php the_content(); ?>
      </div>

      <?php if(is_page('contact-us')) : ?>
        <div class="sidebar five columns">
          
          <?php if( have_rows('location') ): ?>
            <div class="acf-map">

            <?php while ( have_rows('location') ) : the_row(); $location = get_sub_field('google_map'); ?>
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-cr.png">
                <h2><?php the_sub_field('name'); ?></h2>

                <p><?php the_sub_field('street_address'); ?> <br />
                  <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                  <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>"><?php the_sub_field('website'); ?></a> <br /><?php endif; ?> 
                  <a href="https://www.google.com/maps/dir/Current+Location/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>" target="_blank">Get directions</a></p>
              </div>
            <?php endwhile; ?>

          </div>
          <?php endif; ?>

        </div>
      <?php endif; ?>

    </div>
  </section>

</div>
<!-- end container -->

<?php get_footer(); ?>