<?php get_header(); ?>


<div class="container">
  
  <!-- Section header-->
  <section class="section-wrapper row">
    
    <header class="section-header twelve columns">
      <h1>404 Error</h1>
      <p>Sorry, page not found.</p>
    </header>

  </section>
  <!-- end section/filters -->

  <section class="section-wrapper cream">
    <div class="row">
    
      <div class="content ten columns">
        <?php the_content(); ?>
      </div>

    </div>
  </section>

</div>
<!-- end container -->

<?php get_footer(); ?>