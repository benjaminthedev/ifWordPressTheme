<?php
/*
Template Name: Income Protection Quote

*/

 get_header(); ?>


 <!-- Hero Area Start  -->
 <div style="background-image: url('<?php the_field('slider_hero_background_image'); ?>');" class="landing-hero-income-protection-quote"/>
 <div class="container-fluid">
   <div class="row">




        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 offset-md-1 offset-lg-1 offset-xl-1">

            <div class="white-box-hero animated fadeInLeft newImageAnimate">
              <?php the_field('slider_text_box'); ?>

              <a href="<?php the_field('slider_button_link'); ?>" class="standard-btn">
                <?php the_field('slider_text_button'); ?>
              </a>


              <div class="white-box-hero-small">
                <?php the_field('rating_box_'); ?>
              </div>


              <div class="row">
                <div class="col-6 mx-auto">
                  <div class="white-box-hero-stars">
                    <?php the_field('rating_box_image_stars'); ?>
                  </div>
                </div>
              </div>
            </div>

        </div>


        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="image-hero animated fadeInRight newImageAnimate">
              <img src="<?php the_field('image_of_man'); ?>" class="woman-hero"/>
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


 <!-- Logo Sections End -->












   <!-- Blue Background Start  -->

   <div class="blue-background-ipq">
     <h1 class="text-center heros"><?php the_field('heading'); ?></h1>

     <h1 class="text-center herosSeconds"><?php the_field('heading_two'); ?></h1>
   </div>


   <!-- Blue Background End  -->














<!-- accordion section start -->

<div class="container-fluid p-0">

  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

  <?php if (have_rows('accordions')) { ?>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php
          $faq_a = 0; //add counter for targeting first acccordion element
          while (have_rows('accordions')) {
              the_row();
              ?>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading_<?php echo $faq_a ?>">
                    <div class="container">
                      <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <h4 class="panel-title">
                          <a class="<?php if ($faq_a != 0) echo 'collapsed' ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $faq_a ?>" aria-expanded="<?php
                          if ($faq_a == 0) {
                              echo 'true';
                          } else {
                              echo 'false';
                          };
                          ?>" aria-controls="collapse_<?php echo $faq_a ?>">
                                <i class="fa" aria-hidden="true"></i>  <?php the_sub_field('title'); ?>
                          </a>
                      </h4>
                    </div>
                    </div>
                    </div>

                  </div>
                  <div id="collapse_<?php echo $faq_a ?>" class="panel-collapse collapse <?php if ($faq_a == 0) echo 'in' ?>" role="tabpanel" aria-labelledby="heading_<?php echo $faq_a ?>">
                      <div class="panel-body">
                        <div class="container">
                        <div class="row">








<?php if( get_sub_field('step_arrow') ): ?>

<div class="newSections">
<?php the_sub_field('step_arrow'); ?>
</div>
<?php endif; ?>








                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <?php the_sub_field('text_box_1'); ?>
                          </div>

                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <?php the_sub_field('text_box_2'); ?>
                          </div>

                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <?php the_sub_field('text_box_3'); ?>
                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
              </div>

              <?php
              $faq_a++;
          }
          ?>
      </div>
  <?php } ?>



      </div>
    </div>

</div><!--end container -->


<!-- accordion section end -->












<!-- accordion section Claims Process only
 start  -->

<div class="container-fluid p-0 newPanelProcess">

  <!-- <div class="container-fluid p-0 newPanelProcess"> -->

  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

  <?php if (have_rows('accordions_claim_process')) { ?>
      <div class="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
          <?php
          $faq_b = 99; //add counter for targeting first acccordion element
          while (have_rows('accordions_claim_process')) {
              the_row();
              ?>
              <div class="panel panel-default">
<div class="container">
                  <div class="panel-heading newHeadingPanel" role="tab" id="heading_<?php echo $faq_b ?>">

                    <div class="container">
                      <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">

                      <h4 class="panel-title">
                          <a class="<?php if ($faq_b != 99) echo 'collapsed' ?>" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $faq_b ?>" aria-expanded="<?php
                          if ($faq_b == 99) {
                              echo 'true';
                          } else {
                              echo 'false';
                          };
                          ?>" aria-controls="collapse_<?php echo $faq_b ?>">
                                <i class="fa" aria-hidden="true"></i>  <?php the_sub_field('title'); ?>
                          </a>
                      </h4>

                    </div>
                    </div>
                    </div>

                  </div>
                  <div id="collapse_<?php echo $faq_b ?>" class="newPanel panel-collapse collapse <?php if ($faq_b == 99) echo 'in' ?>" role="tabpanel" aria-labelledby="heading_<?php echo $faq_b ?>">
                      <div class="panel-body">
                        <div class="row">
                          <?php if( get_sub_field('step_arrow') ): ?>
                            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="newSections">
                                  <p><?php the_sub_field('step_arrow'); ?></p>
                                </div>
                          </div>
                          <?php endif; ?>

                          <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <h2 class="blue"><?php the_sub_field('heading_1_left'); ?></h2>
                            <?php the_sub_field('text_box_1'); ?>

                            <h2 class="blue"><?php the_sub_field('heading_2_right'); ?></h2>
                            <?php the_sub_field('text_box_2'); ?>
                          </div>


                        </div>



                        <div class="row step2Row">
                          <?php if( get_sub_field('step_arrow_2') ): ?>
                            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="newSections">
                                  <p><?php the_sub_field('step_arrow_2'); ?></p>
                                </div>
                          </div>
                          <?php endif; ?>

                          <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <h2 class="blue"><?php the_sub_field('step_2_heading'); ?></h2>
                            <?php the_sub_field('text_box_1_copy'); ?>
                          </div>
                        </div>


                        <div class="row step2Row">
                          <?php if( get_sub_field('step_arrow_3') ): ?>
                            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="newSections">
                                  <p><?php the_sub_field('step_arrow_3'); ?></p>
                                </div>
                          </div>
                          <?php endif; ?>

                          <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <h2 class="blue"><?php the_sub_field('step_3_heading'); ?></h2>
                            <?php the_sub_field('step_3_-_text_box_one_long'); ?>
                          </div>

                          <div class="clearfix"></div>

                          <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 offset-md-2">
                            <?php the_sub_field('step_3_-_text_box_2_left'); ?>
                            <!-- <h2 class="blue"> -->
                              <?php //the_sub_field('step_3_-_text_box_3_heading'); ?>
                            <!-- </h2> -->

                            <?php //the_sub_field('step_3__-_text_box_3_right'); ?>

                          </div>


                          <!-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> -->

                          <!-- </div> -->
                        </div>


                        <div class="row step2Row">
                          <?php if( get_sub_field('step_arrow_4') ): ?>
                            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="newSections">
                                  <p><?php the_sub_field('step_arrow_4'); ?></p>
                                </div>
                          </div>
                          <?php endif; ?>

                          <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <h2 class="blue"><?php the_sub_field('step_4_heading'); ?></h2>
                            <?php the_sub_field('step_4_'); ?>
                          </div>





                          <!-- <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ml-auto animated fadeInRight newImageAnimate">
                            <img src="<?php the_sub_field('step_4_-_image_right_only'); ?>" class="mrRight"/>
                          </div> -->
                        </div>




                      </div>
                  </div>
                </div>
              </div>

              <?php
              $faq_b++;
          }
          ?>
      </div>
  <?php } ?>



      </div>
    </div>

</div><!--end container -->


<!-- accordion section end -->







<?php get_footer(); ?>
