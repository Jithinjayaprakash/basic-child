<?php
/**
 * The main template file.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>



<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-12">
				<?php the_title(); ?>
			</div>

			<div class="col-12">
				<?php echo the_content(); ?>
			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
