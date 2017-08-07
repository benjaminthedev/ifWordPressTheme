<?php
/*
Template Name: Full Quotation

*/

 get_header(); ?>





   <!-- Blue Background Start  -->

   <div class="blue-background-ipq">
   <div class="container">
    <div class="row">
      <div class="col-sm-12">

     <h1 class="text-center heros h-one">
       <?php the_field('heading_one'); ?>
     </h1>

     <h1 class="text-center heros h-two">
       <?php the_field('heading_two'); ?>
     </h1>

     <h1 class="text-center heros h-three">
       <?php the_field('heading_three'); ?>
     </h1>

     <h1 class="text-center heros h-four">
       <?php the_field('heading_four'); ?>
     </h1>

      </div>
    </div>
        <div class="clearfix"></div>






      <div class="container">
          <div class="row">
              <div class="col-md-3 block">
                  <p class="white formsfull oneText activeText">About<br /> You<p>

                  <div class="circle one active ">
                      <p>1</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull twoText">Basic<br /> Info</p>
                <!-- visited -->
                  <div class="circle two">
                      <p>2</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull threeText">Pick Your<br /> Insurance</p>
                  <div class="circle three">
                      <p>3</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull fourText">You're<br /> Ready!</p>
                  <div class="circle four">
                      <p>4</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
          </div>
      </div>

    </div>
   </div>


   <!-- Blue Background End  -->












<!-- start form -->

<div class="container">
  <div class="row form-section">



    <div class="col-sm-12 left-contentBox">
      <?php the_field('content_box_one'); ?>
    </div>

    <div class="col-sm-12 right-contentBox">
      <?php the_field('content_box_two'); ?>
    </div>






  </div>
 </div>

<!-- end form -->














<?php get_footer(); ?>
