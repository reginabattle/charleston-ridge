<?php 

  /*
    Template Name: Neighborhood
  */

  get_header(); 

?>

<!-- Intro Content -->
<section class="intro-content section-wrapper">
  <div class="row">
    
    <!-- Slider -->
    <div class="slider twelve columns">

      <div class="flexslider seven push-five columns">
        <ul class="slides">
          <?php if(get_field('gallery_images')): ?>
            <?php while(has_sub_field('gallery_images')): ?>

              <?php $image = get_sub_field('image'); ?>
              <li><img src="<?php echo $image['sizes']['hero-sub']; ?>" alt="<?php echo $image['alt']; ?>" /></li>

            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
      
      <div class="slide-caption five pull-seven columns">
        <div class="slide-text">
          
          <h1><?php the_field('gallery_header'); ?></h1>
          <?php the_field('gallery_text'); ?>

          <?php if(get_field('gallery_images')) : $i=0; ?>
            <?php while(has_sub_field('gallery_images')) : $i++; ?>
              <?php if($i != 1) : ?>
              <div class="custom-navigation">
                <a href="#" class="flex-prev"><img src="<?php echo THEME_DIR; ?>/images/layout/arrow-prev.svg" alt="Previous"></a>
                <a href="#" class="flex-next"><img src="<?php echo THEME_DIR; ?>/images/layout/arrow-next.svg" alt="Next"></a>
              </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>

    </div>
    <!-- end slider -->
  
  </div>
</section>
<!-- end intro content -->

<!-- Map -->
  <section class="neighborhood-map section-wrapper cream">
    <div class="row">
      
      <header class="twelve columns">
        <h1>Convenience at Your Doorstep</h1>
      </header>


     <div class="row">

             <div class="map-options two columns">
               <ul class="tabs">
                 <li class="tab-shopping active"><a href="#shopping">Shopping</a></li>
                 <li class="tab-dining"><a href="#dining">Dining</a></li>
                 <li class="tab-culture"><a href="#culture">Culture</a></li>
                 <li class="tab-recreation"><a href="#recreation">Recreation</a></li>
                 <li class="tab-schools"><a href="#schools">Schools</a></li>
                 <li class="tab-services"><a href="#services">Services</a></li>
               </ul>
             </div>
             
             <div class="nine columns offset-by-one">
               <ul class="tabs-content">

                 <!-- Shopping -->
                 <li class="active" id="shoppingTab">
                   <?php if( have_rows('location', 24) ): ?>
                     <div class="acf-map shopping-map">

                     <?php while ( have_rows('location', 24) ) : the_row(); 
                       $location = get_sub_field('google_map'); 
                       $image = get_sub_field('marker_icon'); 
                     ?>

                     <div id="locationsinfo" class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-shopping.png">
                         <h2><?php the_sub_field('name'); ?></h2>

                         <p><?php the_sub_field('street_address'); ?> <br />
                           <?php if(get_sub_field('city')) : ?><?php the_sub_field('city'); ?>, VA <?php the_sub_field('zip_code'); ?> <br /><?php endif; ?>
                           <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                           <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>

                   </div>
                   <?php endif; ?>
                 </li>
                 
                 <!-- Dining -->
                 <li id="diningTab">
                   <?php if( have_rows('location', 26) ) : ?>
                   <div class="acf-map">
                     <?php while ( have_rows('location', 26) ) : the_row(); $location = get_sub_field('google_map'); ?>
                       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-dining.png">
                         <h2><?php the_sub_field('name'); ?></h2>
                         <p><?php the_sub_field('street_address'); ?> <br />
                         <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                         <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>
                   </div>
                   <?php endif; ?>
                 </li>
                 
                 <!-- Culture -->
                 <li id="cultureTab">
                   <?php if( have_rows('location', 28) ): ?>
                   <div class="acf-map">
                     <?php while ( have_rows('location', 28) ) : the_row(); $location = get_sub_field('google_map'); ?>
                       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-culture.png">
                         <h2><?php the_sub_field('name'); ?></h2>

                         <p><?php the_sub_field('street_address'); ?> <br />
                           <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                           <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>
                   </div>
                   <?php endif; ?>
                 </li>

                 <!-- Recreation -->
                 <li id="recreationTab">
                   <?php if( have_rows('location', 30) ): ?>
                     <div class="acf-map">
                     <?php while ( have_rows('location', 30) ) : the_row(); $location = get_sub_field('google_map'); ?>
                       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-recreation.png">
                         <h2><?php the_sub_field('name'); ?></h2>

                         <p><?php the_sub_field('street_address'); ?> <br />
                         <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                         <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>
                   </div>
                   <?php endif; ?>
                 </li>

                 <!-- Schools -->
                 <li id="schoolsTab">
                   <?php if( have_rows('location', 32) ): ?>
                     <div class="acf-map">

                     <?php while ( have_rows('location', 32) ) : the_row(); $location = get_sub_field('google_map'); ?>
                       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-schools.png">
                         <h2><?php the_sub_field('name'); ?></h2>

                         <p><?php the_sub_field('street_address'); ?> <br />
                           <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                           <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>

                   </div>
                   <?php endif; ?>
                 </li>

                 <!-- Services -->
                 <li id="servicesTab">
                   <?php if( have_rows('location', 378) ): ?>
                     <div class="acf-map">
                     <?php while ( have_rows('location', 378) ) : the_row(); $location = get_sub_field('google_map'); ?>
                       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo THEME_DIR; ?>/images/layout/location-pin-general.png">
                         <h2><?php the_sub_field('name'); ?></h2>

                         <p><?php the_sub_field('street_address'); ?> <br />
                           <?php if(get_sub_field('phone')) : ?><?php the_sub_field('phone'); ?> <br /><?php endif; ?>
                           <?php if(get_sub_field('website')) : ?><a href="http://<?php the_sub_field('website'); ?>">Visit website</a><?php endif; ?></p>
                       </div>
                     <?php endwhile; ?>
                   </div>
                   <?php endif; ?>
                 </li>
               </ul>
             </div>

           </div>

    </div>
  </section>
  <!-- end map --> 


<?php get_footer(); ?>