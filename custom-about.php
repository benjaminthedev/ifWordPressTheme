<?php
/*
Template Name: About Us Page
*/

 get_header(); ?>


 <!-- Hero Area Start  -->
 <div style="background-image: url('<?php the_field('slider_hero_background_image'); ?>');" class="landing-hero-about"/>
 <div class="container">
   <div class="row">




        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 offset-md-1 offset-lg-1 offset-xl-1">

            <div class="clear-box-hero animated fadeInLeft newImageAnimate">
              <?php the_field('slider_text_box'); ?>
            </div>

        </div>


        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="newManWrapper pushDown">

            <div class="image-hero animated fadeInRight newImageAnimate">
              <img src="<?php the_field('image_of_man'); ?>" class="man-hero-About"/>
            </div>
        </div>
      </div>




</div>
</div>
</div>


 <!-- Hero Area End  -->




 <!-- Logo Sections -->


<div class="custom-logos">
 <div class="container">
   <div class="row">


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


               <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                   <img src="<?php the_field('image'); ?>" />
               </div>



            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
               <h3 class="section-heading-tab blue"><?php the_field('heading_one'); ?></h3>

               <div class="thin">
                 <?php the_field('content'); ?>
               </div>
            </div>




            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
               <div class="thin_second">
                 <?php the_field('first_second_box'); ?>
               </div>
            </div>

            </div>


           </div>


           <div role="tabpanel" class="tab-pane fade" id="profile">
             <div class="row">

               <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                   <img src="<?php the_field('image_second'); ?>" />
               </div>

             <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <h3 class="section-heading-tab blue"><?php the_field('heading_second'); ?></h3>

                              <div class="thin">
                                <?php the_field('content_second'); ?>
                              </div>
              </div>

              <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">

                               <div class="thin_second">
                                 <?php the_field('second_second_box'); ?>
                               </div>
               </div>





            </div>
           </div>
           <div role="tabpanel" class="tab-pane fade" id="about">
             <div class="row">
               <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                   <img src="<?php the_field('image_third'); ?>" />
               </div>

             <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <h3 class="section-heading-tab blue"><?php the_field('heading_third'); ?></h3>

                              <div class="thin">
                                <?php the_field('content_third'); ?>
                              </div>
              </div>

              <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">

                               <div class="thin_second">
                                 <?php the_field('third_second_box'); ?>
                               </div>
               </div>

           </div>
           </div>



           <div role="tabpanel" class="tab-pane fade" id="section-Four">
             <div class="row">
               <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                   <img src="<?php the_field('image_fourth'); ?>" />
               </div>

             <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <h3 class="section-heading-tab blue"><?php the_field('heading_fourth'); ?></h3>

                              <div class="thin">
                                <?php the_field('content_fourth'); ?>
                              </div>
              </div>

              <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">

                               <div class="thin_second">
                                 <?php the_field('fourth_second_box'); ?>
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
                                <i class="fa" aria-hidden="true"></i>  <strong>Q:</strong> <?php the_sub_field('title'); ?>
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
                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 appendA">
                        <?php the_sub_field('text_box_1'); ?>
                          </div>

                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <?php the_sub_field('text_box_2'); ?>
                          </div>

                          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <?php the_sub_field('text_box_3'); ?>
                          </div>
                        </div>
                        </div><!--end container This -->
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
