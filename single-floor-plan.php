<?php get_header(); 

	include('includes/floor-plans.php');

?>


<?php 

  // Details
  $bedrooms = get_field('bedrooms');
  $bathrooms = get_field('bathrooms'); 
  $square_feet = get_field('square_feet');
  $price = get_field('price');  

?>

<div class="container">

  <!-- Floor Plan Details -->
  <section class="section-wrapper">
		<div class="floor-plan-details row">

			<div class="fp-img five columns">
				<img src="<?php echo THEME_DIR; ?>/<?php echo $floorplan_img; ?>" alt="Floor plan" />
				<a href="#large-view" class="button cream">Large view</a> <a href="<?php echo THEME_DIR; ?>/<?php echo $floorplan_doc; ?>" class="button cream" target="_blank">Print</a>
			</div>

			<!-- Modal -->
			<div class="remodal" data-remodal-id="large-view">
			  <a data-remodal-action="close" class="remodal-close"></a>

			  <div class="fp-modal-content ten columns centered">
					<h1><?php the_title(); ?></h1>
					<img class="fp-img-large" src="<?php echo THEME_DIR; ?>/<?php echo $floorplan_img; ?>" alt="Floor plan" />
				</div>

			</div>
			<!-- end modal -->

			<div class="seven columns ">

				<h1><?php the_title(); ?> <span><?php echo $label; ?></span></h1>
				<p><?php echo $bedrooms; ?> Bedroom<?php if($bedrooms > 1) : ?>s<?php endif; ?>, <?php echo $bathrooms; ?> Bathroom<?php if($bathrooms > 1) : ?>s<?php endif; ?><br />
					<?php echo $square_feet; ?> Square Feet <br />
					Starting from $<?php echo $price; ?></p>

				<a class="button green" href="https://charlestonridgeapartments.prospectportal.com/Apartments/module/application_authentication/property[id]/254319/show_in_popup/false/kill_session/1/" target="_blank">Apply now</a>
 
				<?php $units = new WP_Query( array( 
				  'post_type' => 'unit', 
				  'posts_per_page'  => -1,
				  'orderby'     => 'title',
				  'order'       => 'ASC',
				  'meta_query' => array(
				    array(
				     'key' => 'floor_plan_type', 
				     'value' => $value,
				     'compare' => '='
				     )
				    )
				  ));         
				?>

				<table class="fp-units twelve">
				  <thead>
				    <tr>
				      <th>Unit</th>
				      <th>&nbsp;</th>
				      <th>&nbsp;</th>
				    </tr>
				  </thead>
				  <tbody>

				  <?php if ($units->have_posts()) : ?>
						<?php while ( $units->have_posts() ) : $units->the_post();?>
							
							<?php 
								$availability = get_field('available'); 
								$date = get_field('date_available');
							?>

							<tr>
							  <td><?php the_title(); ?></td>
							  <td><a href="#location">Location</a></td>
							  <td><a href="https://charlestonridgeapartments.prospectportal.com/Apartments/module/application_authentication/property[id]/254319/show_in_popup/false/kill_session/1/" target="_blank">Apply now</a></td>
							</tr>

							<?php wp_reset_postdata(); ?>
						<?php endwhile; ?>

					<?php else : ?>
						
						<tr>
							<td>No available units.</td>
							<!-- <td>&nbsp;</td> -->
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>

					<?php endif; ?>
				  </tbody>
				</table>

				<!-- Modal -->
				<div class="remodal" data-remodal-id="location">
				  <button data-remodal-action="close" class="remodal-close"></button>
					
					<div class="fp-modal-content ten columns centered">
						<h1><?php the_title(); ?></h1>
						<img class="fp-img-large" src="<?php echo THEME_DIR; ?>/<?php echo $floorplan_loc; ?>" alt="Floor plan" />
					</div>

				</div>
				<!-- end modal -->

			</div>
		
		</div>
  </section>
  <!-- end floor plan details -->

	<!-- Other Floor Plans -->
  <section class="other-floor-plans section-wrapper">
		<div class="row">
				
			<header class="twelve columns">
				<?php if($bedrooms==1) : ?>
			  	<h1>Other one bedroom floor plans </h1>
			  <?php endif; ?>       

			  <?php if($bedrooms==2) : ?>      
			    <h1>Other two bedroom floor plans </h1>
			  <?php endif; ?>
			</header>

			<?php $floorplans = new WP_Query( array( 
			  'post_type' => 'floor-plan', 
			  'posts_per_page'  => -1,
			  'post__not_in' => array( $post->ID ),
			  'orderby'     => 'title',
			  'order'       => 'ASC',
			  'meta_query' => array(
			    array(
			     'key' => 'bedrooms', 
			     'value' => $bedrooms,
			      'compare' => '='
			     )
			    )
			  ));         
			?>

			<?php if ($floorplans->have_posts()) : ?>
				
				<?php while ( $floorplans->have_posts() ) : $floorplans->the_post();
					// Floor plan
					$field = get_field_object('floor_plan');
					$value = get_field('floor_plan');
					$label = $field['choices'][ $value ];

					// Details
					$bedrooms = get_field('bedrooms');
					$bathrooms = get_field('bathrooms'); 
					$square_feet = get_field('square_feet');
					$price = get_field('price');
				?>

				<!-- Floor plan -->
				<div class="fp-entry four columns">
					<div class="fp-details">
						<img src="<?php echo THEME_DIR; ?>/<?php echo $floorplan_img; ?>" alt="Floor plan" />

						<h2><?php the_title(); ?> <span><?php echo $label; ?></span></h2>
						<p><?php echo $bedrooms; ?> Bedroom<?php if($bedrooms > 1) : ?>s<?php endif; ?>, <?php echo $bathrooms; ?> Bathroom<?php if($bathrooms > 1) : ?>s<?php endif; ?><br />
							<?php echo $square_feet; ?> Square Feet<br />
							Starting at $<?php echo $price; ?></p>

						<div class="button-wrapper"><a class="button green" href="<?php the_permalink(); ?>">View details</a></div>
					</div>
				</div>
				<!-- end floor plan -->

				<?php wp_reset_postdata(); ?>
			  <?php endwhile; ?>

			<?php else : ?>

			  <div class="twelve columns">
			   	<p>No other floor plans.</p>
			  </div>

			<?php endif; ?>

		</div>
  </section>
  <!-- end other floor plans -->

</div>


<?php get_footer(); ?>