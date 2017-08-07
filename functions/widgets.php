<?php

function b4st_widgets_init() {



  /*
  Header Number
   */
  register_sidebar( array(
    'name'            => __( 'Header Telephone', 'b4st' ),
    'id'              => 'header-telephone-widget-area',
      'description'     => __( 'The header telephone widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );




  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar Blogs', 'b4st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer One', 'b4st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer first widget area', 'b4st' ),
    'before_widget'   => '<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 pl-5">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );


  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer Two', 'b4st' ),
    'id'              => 'footer-two-widget-area',
    'description'     => __( 'The footer second widget area', 'b4st' ),
    'before_widget'   => '<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );


  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer Three', 'b4st' ),
    'id'              => 'footer-three-widget-area',
    'description'     => __( 'The footer third widget area', 'b4st' ),
    'before_widget'   => '<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );


  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer Four', 'b4st' ),
    'id'              => 'footer-four-widget-area',
    'description'     => __( 'The footer fourth widget area', 'b4st' ),
    'before_widget'   => '<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  // register_sidebar( array(
  //   'name'            => __( 'Footer Five', 'b4st' ),
  //   'id'              => 'footer-five-widget-area',
  //   'description'     => __( 'The footer fifth widget area', 'b4st' ),
  //   'before_widget'   => '<div class="col-sm-12 col-md-1 col-lg-1 col-xl-1">',
  //   'after_widget'    => '</div>',
  //   'before_title'    => '<h4>',
  //   'after_title'     => '</h4>',
  // ) );

}
add_action( 'widgets_init', 'b4st_widgets_init' );
