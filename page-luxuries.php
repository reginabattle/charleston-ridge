<?php 

  /*
    Template Name: Luxuries
  */

  get_header(); 
?>

  <!-- Primary Content -->
  <section class="primary-content section-wrapper">
    <div class="row">

      <!-- Content Boxes -->
      <div class="content-boxes twelve columns">

        <?php if(get_field('content_box')) : $i=0; ?>
          <?php while(has_sub_field('content_box')) : $i++; ?>

            <?php $image = get_sub_field('image'); ?>

            <?php if($i % 2 == 0) : ?>

              <!-- Content Box -->
              <div class="content-box brown row">
                <div class="featured-img six columns">
                  <img src="<?php echo $image['sizes']['content-box']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>

                <div class="content six columns">
                  <h1><?php the_sub_field('header'); ?></h1>
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
              <!-- end content box -->

            <?php else : ?>

              <!-- Content Box -->
              <div class="content-box green row">
                <div class="content six columns">
                  <h1><?php the_sub_field('header'); ?></h1>
                  <?php the_sub_field('content'); ?>
                </div>

                <div class="featured-img six columns">
                  <img src="<?php echo $image['sizes']['content-box']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
              </div>
              <!-- end content box -->

          <?php endif; endwhile; ?>
        <?php endif; ?>

      </div>
      <!-- end content boxes (wrapper) -->

    </div>
  </section>
  <!-- end primary content -->

  <!-- Modal -->
  <div class="remodal" data-remodal-id="clubhouse">
    <a data-remodal-action="close" class="remodal-close"></a>

    <div class="fp-modal-content ten columns centered">
      <h1>Clubhouse</h1>
      <img class="fp-img-large" src="<?php echo THEME_DIR; ?>/images/floor-plans/clubhouse.jpg" alt="Clubhouse" />
    </div>

  </div>
  <!-- end modal -->


<?php get_footer(); ?>