<?php
get_header();
?>

<main class="container mt-5 ">
  <div class=" p-4 p-md-5 text-white rounded bg-dark row">
  
    <div class="col text-center">
      <p class="lead my-3">
      En simpel hemsida som är skapad med hjälp av html/css/js samt bootstrap.</p>
    </div>
  </div>

  <div class="row justify-content-around">

   
    <?php
      while(have_posts() ){
        the_post();?>
        
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php }
    ?>
     
    

  </div>
  
</main><!-- /.container -->

<?php

get_footer();
?>