

<?php get_template_part('footer-acf'); ?>






<footer>


  <div class="container">

    <div class="row">

          <?php dynamic_sidebar('footer-widget-area'); ?>



          <?php dynamic_sidebar('footer-two-widget-area'); ?>



          <?php dynamic_sidebar('footer-three-widget-area'); ?>



          <?php dynamic_sidebar('footer-four-widget-area'); ?>



          <?php dynamic_sidebar('footer-five-widget-area'); ?>



            <div class="clearfix"></div>





              <?php

              $args = array(
                  'post_type' => 'social_icons',
                  'paged' => get_query_var('page'),
                  'posts_per_page' => 99,
                  'order' => 'ASC',
              );

              $the_query = new WP_Query( $args );

              // The Loop
              if ( $the_query->have_posts() ) :?>
                <ul class="social-icons">
              <?php while ( $the_query->have_posts() ) :?>

                <?php $the_query->the_post();?>

                        <li>
                              <a href="<?php the_field('link_to_external_site'); ?>" target="_blank">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Social Icons"/>
                              </a>
                        </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                    <?php
                    wp_reset_postdata();?>









        </div><!-- /.row -->
      </div><!-- /.container -->




















<div class="container">
  <div class="row">



      <div class="col-sm-6 mt-1">

        <a class="jet" href="/disclaimer/">Disclaimer</a> | <a href="/sitemap.xml/" target="_blank">Site Map</a>

    </div>


<div class="col-sm-6 mt-1">
<div class="mr-auto">
        <p class="text-right">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> | ABN 94 615 455 635</p>
</div>
</div>


  </div>
</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
