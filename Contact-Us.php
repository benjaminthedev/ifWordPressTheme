<?php
/*
Template Name: Contact Us
*/

 get_header(); ?>


 <!-- Hero Area Start  -->
 <div style="background-image: url('<?php the_field('slider_hero_background_image', 11); ?>');" class="landing-hero"/>
 <div class="container-fluid">
   <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 offset-md-1 offset-lg-1 offset-xl-1">
            <div class="white-box-hero animated fadeInLeft newImageAnimate">
              <?php the_field('slider_text_box', 11); ?>

              <a href="<?php the_field('slider_button_link', 11); ?>" class="standard-btn">
                <?php the_field('slider_text_button', 11); ?>
              </a>


              <div class="white-box-hero-small">
                <?php the_field('rating_box_', 11); ?>
              </div>


              <div class="white-box-hero-stars">

              <?php the_field('rating_box_image_stars', 11); ?>

            </div>


            </div>

        </div>


        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ml-auto">
            <div class="image-hero animated fadeInRight newImageAnimate">
              <img src="<?php the_field('image_of_man', 11); ?>" class="man-hero"/>
            </div>
        </div>




</div>
</div>
</div>


 <!-- Hero Area End  -->




 <!-- Logo Sections -->



   <div class="container">
     <div class="row">
      <div class="custom-logos">

                 <?php

                 $args = array(
                     'post_type' => 'logos_under_slider',
                     'paged' => get_query_var('page'),
                     'posts_per_page' => 99,
                     'order' => 'ASC',
                 );

                 $the_query = new WP_Query( $args );

                 // The Loop
                 if ( $the_query->have_posts() ) :?>
                   <ul class="logos">
                 <?php while ( $the_query->have_posts() ) :?>

                   <?php $the_query->the_post();?>

                           <li>
                                 <!-- <a href="<?php the_field('link_to_external_site'); ?>" target="_blank"> -->
                                   <img src="<?php the_post_thumbnail_url(); ?>" alt="Social Icons"/>
                                 <!-- </a> -->
                           </li>

                           <?php endwhile; ?>
                       <?php endif; ?>
                     </ul>
                       <?php
                       wp_reset_postdata();?>
                     </div>
                      </div>
 </div>























<div class="container">
  <div class="col-sm-12 col-md-12  col-lg-12  col-xl-12  ">

    <div id="content" role="main">
      <?php if(have_posts()): while(have_posts()): the_post();?>
          <article role="article" id="post_<?php the_ID()?>">
              <header>
                  <h2 class="blue"><?php the_title()?></h2>
              </header>
              <section>
                  <?php the_post_thumbnail(); ?>
                  <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'b4st' ) ); ?>
              </section>
          </article>
      <?php endwhile; ?>



      <?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>
    </div><!-- /#content -->

  </div>
</div>







<?php get_footer(); ?>
