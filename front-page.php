 
<?php get_header(); ?>
  
  <!-- Intro Content -->
  <section class="intro-content section-wrapper">
    <div class="row">

      
      <!-- Slider -->
      <div class="slider twelve columns">

        <div class="flexslider eight push-four columns">
          <ul class="slides">
            <?php if(get_field('gallery_images')): ?>
              <?php while(has_sub_field('gallery_images')): ?>

                <?php $image = get_sub_field('image'); ?>
                <li><img src="<?php echo $image['sizes']['hero-home']; ?>" alt="<?php echo $image['alt']; ?>" /></li>

              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="slide-caption four pull-eight columns">
          <div class="slide-text">

            <h1><?php the_field('gallery_header'); ?></h1>
            <?php the_field('gallery_text'); ?>
            
            <div class="button-wrapper cream"><a class="button cream" href="<?php echo home_url(); ?>/neighborhood">More about us</a></div>

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

      <div class="twelve columns">
        
        <div class="learn-more eight columns">
          <?php $learn_more_image = get_field('learn_more_image'); ?>
          
          <img src="<?php echo $learn_more_image['sizes']['hero-home']; ?>" alt="<?php echo $learn_more_image['sizes']['alt']; ?>" />
          
          <div class="learn-more-text">
            <?php the_field('learn_more_content'); ?>
            <a class="button" href="<?php the_field('button_link'); ?>">Learn more</a>
          </div>
        </div>

        <div class="texture-details four columns hide-for-small">
          <img src="<?php echo THEME_DIR; ?>/images/photos/texture-details.png" alt="Texture" />
        </div>

      </div>
    
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


  <!-- Pushers -->
  <section class="page-pushers section-wrapper">
    <div class="row">

      <header class="twelve columns">
        <h1><?php the_field('headline'); ?></h1>
      </header>

      <div class="pusher four columns">
        <img src="<?php echo THEME_DIR; ?>/images/photos/pusher-site-map.png" alt="Explore site plan" />
        <div class="button-wrapper cream"><a href="<?php echo home_url(); ?>/floor-plans" class="button cream">Explore site plan</a></div>
      </div>

      <div class="pusher cream four columns">
        <img src="<?php echo THEME_DIR; ?>/images/photos/pusher-one-bedrooms.png" alt="One bedroom plans" />
        <div class="button-wrapper"><a href="<?php echo home_url(); ?>/floor-plans/?fwp_bedrooms=1" class="button green">One bedroom plans</a></div>
      </div>

      <div class="pusher cream four columns">
        <img src="<?php echo THEME_DIR; ?>/images/photos/pusher-two-bedrooms.png" alt="Two bedroom plans" />
        <div class="button-wrapper"><a href="<?php echo home_url(); ?>/floor-plans/?fwp_bedrooms=2" class="button green">Two bedroom plans</a></div>
      </div>

    </div>
  </section>
  <!-- end pushers -->

<?php get_footer(); ?>