<?php
/*
Template Name: Home Page
*/

 get_header(); ?>

 <!-- Hero Area Start  -->
 <div style="background-image: url('<?php the_field('slider_hero_background_image'); ?>');" class="landing-hero"/>
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


        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ml-auto">
            <div class="image-hero animated fadeInRight newImageAnimate">
              <img src="<?php the_field('image_of_man'); ?>" class="man-hero"/>
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
                                   <img src="<?php the_post_thumbnail_url(); ?>" alt="Social Icons" />
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

   <div class="blue-background">
     <h1 class="text-center heros"><?php the_field('heading'); ?></h1>
   </div>


   <!-- Blue Background End  -->










 <!-- Tabs Start -->


<div class="first-tabbed-section">
<div class="container">
  <div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
         <br />

         <ul class="nav nav-tabs">
           <li class="nav-item">
             <a href="#home" class="nav-link active firsts" role="tab" data-toggle="tab"><?php the_field('heading_one'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <a href="#profile" class="nav-link seconds" role="tab" data-toggle="tab"><?php the_field('heading_second'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <a href="#about" class="nav-link thirds" role="tab" data-toggle="tab"><?php the_field('heading_third'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <a href="#section-Four" class="nav-link fourths" role="tab" data-toggle="tab"><?php the_field('heading_fourth'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>
         </ul>

         <div class="tab-content">
           <div role="tabpanel" class="tab-pane fade show active" id="home">
             <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
               <h3 class="section-heading-tab"><?php the_field('heading_one'); ?></h3>

               <div class="thin">
                 <?php the_field('content'); ?>
               </div>
            </div>


              <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                  <!-- <img src="<?php //the_field('image'); ?>" /> -->
                  <div class="testimonial-snippet">
                    "<?php the_field('testimonial_hightlight'); ?>"
                  </div>
              </div>


              <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                  <div class="testimonial-name">
                    <?php the_field('testimonial_name'); ?>
                  </div>

                  <div class="textimonial-snippet">
                    <?php the_field('testimonial_text'); ?>
                  </div>
              </div>

            </div>


           </div>
           <div role="tabpanel" class="tab-pane fade" id="profile">
             <div class="row">


             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_second'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_second'); ?>
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                 <!-- <img src="<?php //the_field('image_second'); ?>" /> -->

                 <div class="testimonial-snippet">
                   "<?php the_field('testimonial_hightlight_second'); ?>"
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_second'); ?>
                 </div>

                 <div class="textimonial-snippet">
                   <?php the_field('testimonial_text_second'); ?>
                </div>
             </div>


            </div>
           </div>
           <div role="tabpanel" class="tab-pane fade" id="about">
             <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_third'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_third'); ?>
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                 <!-- <img src="<?php //the_field('image_third'); ?>" /> -->
                 <div class="testimonial-snippet">
                   "<?php the_field('testimonial_hightlight_third'); ?>"
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_third'); ?>
                 </div>

                 <div class="textimonial-snippet">
                   <?php the_field('testimonial_text_third'); ?>
                </div>
             </div>

           </div>
           </div>



           <div role="tabpanel" class="tab-pane fade" id="section-Four">
             <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_fourth'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_fourth'); ?>
                 </div>
             </div>



             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                 <!-- <img src="<?php //the_field('image_fourth'); ?>" /> -->

                 <div class="testimonial-snippet">
                   "<?php the_field('testimonial_hightlight_four'); ?>"
                 </div>
             </div>



             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_fourth'); ?>
                 </div>
                 <div class="textimonial-snippet">
                 <?php the_field('testimonial_text_fourth'); ?>
               </div>
             </div>


            </div>
           </div>


          </div>
         </div>
       </div>
      </div>
</div>

<!-- tabs end -->







<div class="second-tabbed-section">
<div class="container">
  <div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

  <h2 class="text-center section-two-heading blue"><?php the_field('section_three_heading'); ?></h2>


         <br />

         <ul class="nav nav-tabs">
           <li class="nav-item">
             <img src="<?php the_field('image_above_tabs_fifth'); ?>" class="above-tabs"/>
             <a href="#fifth" class="nav-link active firsts" role="tab" data-toggle="tab"><?php the_field('heading_fifth'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <img src="<?php the_field('image_above_tabs_sixth'); ?>" class="above-tabs"/>
             <a href="#sixth" class="nav-link seconds" role="tab" data-toggle="tab"><?php the_field('heading_sixth'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <img src="<?php the_field('image_above_tabs_seventh'); ?>" class="above-tabs"/>
             <a href="#seventh" class="nav-link thirds" role="tab" data-toggle="tab"><?php the_field('heading_seventh'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>

           <li class="nav-item">
             <img src="<?php the_field('image_above_tabs_eight'); ?>" class="above-tabs"/>
             <a href="#eight" class="nav-link fourths" role="tab" data-toggle="tab"><?php the_field('heading_eighth'); ?>  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
           </li>
         </ul>

         <div class="tab-content">
           <div role="tabpanel" class="tab-pane fade show active" id="fifth">
             <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
               <h3 class="section-heading-tab"><?php the_field('heading_fifth'); ?></h3>

               <div class="thin">
                 <?php the_field('content_fifth'); ?>
               </div>
            </div>


              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <!-- <img src="<?php //the_field('image_fifth'); ?>" /> -->
                  <?php include('fee.php'); ?>

              </div>


              <!-- <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                  <div class="testimonial-name">
                    <?php //the_field('testimonial_name_fifth'); ?>
                  </div>

                  <div class="textimonial-snippet">
                    <?php //the_field('testimonial_text_fifth'); ?>
                  </div>
              </div> -->

            </div>


           </div>
           <div role="tabpanel" class="tab-pane fade" id="sixth">
             <div class="row">


             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_sixth'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_sixth'); ?>
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                 <!-- <img src="<?php //the_field('image_sixth'); ?>" /> -->
                 <?php include('fee.php'); ?>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_sixth'); ?>
                 </div>

                 <div class="textimonial-snippet">
                   <?php the_field('testimonial_text_sixth'); ?>
                </div>
             </div>


            </div>
           </div>
           <div role="tabpanel" class="tab-pane fade" id="seventh">
             <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_seventh'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_seventh'); ?>
                 </div>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                 <!-- <img src="<?php //the_field('image_seventh'); ?>" /> -->
                 <?php include('fee.php'); ?>
             </div>


             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_seventh'); ?>
                 </div>

                 <div class="textimonial-snippet">
                   <?php the_field('testimonial_text_seventh'); ?>
                </div>
             </div>

           </div>
           </div>



           <div role="tabpanel" class="tab-pane fade" id="eight">
             <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3 class="section-heading-tab"><?php the_field('heading_eighth'); ?></h3>

                 <div class="thin">
                   <?php the_field('content_eighth'); ?>
                 </div>
             </div>



             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                 <!-- <img src="<?php //the_field('image_eighth'); ?>" /> -->
                 <?php include('fee.php'); ?>
             </div>



             <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-4">
                 <div class="testimonial-name">
                   <?php the_field('testimonial_name_eighth'); ?>
                 </div>
                 <div class="textimonial-snippet">
                 <?php the_field('testimonial_text_eighth'); ?>
               </div>
             </div>


            </div>
           </div>


          </div>



         </div>


       </div>
      </div>
</div>




<!-- end tabs 2 -->


















<div class="hero-section-two">
  <div style="background-image: url('<?php the_field('landing_hero_two'); ?>');" class="landing-hero-two"/>
    <div class="container">
      <div class="hero-two-wrapper">
          <?php the_field('landing-hero-two-heading'); ?>
      </div>
    </div>
  </div>
</div>








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







<?php get_footer(); ?>
