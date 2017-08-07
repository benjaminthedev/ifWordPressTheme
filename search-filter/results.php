<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      http://www.designsandcode.com/
 * @copyright 2015 Designs & Code
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>





<?php


global $searchandfilter;
$sf_current_query = $searchandfilter->get(720)->current_query();
if ((!$sf_current_query->is_filtered())&&($sf_current_query->get_search_term()=="")) {
  echo '<div>Please use the search bar above.</div>';
} else {

	while ($query->have_posts())
	{
		$query->the_post();

		?>
		<div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<p><br /><?php the_excerpt(); ?></p>
			<?php
				if ( has_post_thumbnail() ) {
					echo '<p>';
					the_post_thumbnail("small");
					echo '</p>';
				}
			?>
			<p><?php the_category(); ?></p>
			<p><?php the_tags(); ?></p>
			<p><small><?php the_date(); ?></small></p>

		</div>

		<hr />
		<?php
	}

	if (function_exists('wp_pagenavi'))
	{
		echo "<br />";
		wp_pagenavi( array( 'query' => $query ) );
	}

}



 ?>












	<?php
}
else
{
	echo "No Results Found";
}
?>
