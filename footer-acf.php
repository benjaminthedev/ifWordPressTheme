<?php
/*
Template Name: Footer Section One
*/
?>
</div>
<?php get_header(); ?>




<div class="footer-section-one">
  <div class="container">
    <div class="row">


<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">


<?php echo do_shortcode('[text-slider]'); ?>


<!-- <div class="tricker">
    <p class="big-Number">
       <?php //the_field('big_number', 76);?>

     </p>

     <p class="footer-section-one-text-snippet">
      <?php //the_field('big_title', 76);  ?>

    </p>





</div> -->

</div>

<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
      <img src="<?php the_field('middle_image', 76);  ?>" class="footer-section-one-lady" />
</div>


<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

    <div class="footer-section-one-main-text-right">
      <?php the_field('main_text_right', 76);  ?>
    </div>


<a href="<?php the_field('button_link', 76);  ?>" class="footer-section-one-link">
      <?php the_field('button_text', 76);  ?>
</a>



</div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div>


<!-- Section four -->


<div class="section-four">

  <div class="container">
    <div class="row">

      <?php if( have_rows('three_selling_points', 11) ): ?>
	       <?php while( have_rows('three_selling_points', 11) ): the_row();

		        // vars
		          $image = get_sub_field('icons', 11);
		            $content = get_sub_field('text', 11);
		              $heading = get_sub_field('heading', 11); ?>

                  <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                    <div class="row">
                      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                        <h1><?php echo $heading; ?></h1>
                      </div>

                      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                        <img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="icon-images" />
                      </div>


                    </div>



		                  <?php echo $content; ?>
                    </div>
                  	<?php endwhile; ?>
                    </div>
                  </div>

                  <?php endif; ?>

                      </div>
                  </div><!-- end section four -->




<!-- Section four END -->

<?php get_footer(); ?>
