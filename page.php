<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eq-temp-landing
 */

get_header();
?>
<section class="default-page single-page my-4 my-lg-5 py-4 py-lg-5">
	<div class="container">
		<h1 class="heading-2 clr-main-orange text-center mb-3 mb-lg-4 block-from-left"><?php the_title(); ?></h1>
		<div class="default-page__content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
