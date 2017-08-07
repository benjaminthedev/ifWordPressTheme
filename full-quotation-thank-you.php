<?php
/*
Template Name: Full Quotation Thank You

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
       <?php the_field('heading_four', 726); ?>
     </h1>

      </div>
    </div>
        <div class="clearfix"></div>






      <div class="container">
          <div class="row">
              <div class="col-md-3 block">
                  <p class="white formsfull oneText activeText">About<br /> You<p>

                  <div class="circle one visited ">
                      <p>1</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull twoText activeText">Basic<br /> Info</p>
                <!-- visited -->
                  <div class="circle two visited">
                      <p>2</p>
                  </div>
                  <div class="border-right-new "></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull threeText activeText">Pick Your<br /> Insurance</p>
                  <div class="circle three visited">
                      <p>3</p>
                  </div>
                  <div class="border-right-new"></div>
              </div>
              <div class="col-md-3 block">
                <p class="white formsfull fourText activeText">You're<br /> Ready!</p>
                  <div class="circle four active">
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



    <div class="col-sm-12 ">
      <?php the_field('heading'); ?>

      <?php the_field('text'); ?>
    </div>








  </div>
 </div>

<!-- end form -->







<style>
.h-four{
  display: block;
}

h1.heros{
    padding-top: 10px;
    color: #fff;
    margin-bottom: 40px;
}

h2 span.blue {
    font-weight: 700;
}

</style>


<script>



</script>






<?php get_footer(); ?>
