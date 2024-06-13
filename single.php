<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eq-temp-landing
 */

get_header();
?>
<main>
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	endwhile; // End of the loop.
	?>

    <section class="blog mb-5 pb-5">
        <div class="container py-5">
            <p class="subtitle-medium font-color-blue mb-2">Похожие новости</p>
            <h2 class="heading-2 mb-5">Читайте также</h2>
            <div class="row">
                <?php
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'post_date'
                );

                $query = new WP_Query( $args );

                // Цикл
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                    <div class="col-12 col-xl-4 mb-4">
                        <div class="benefit-item d-flex align-items-end rounded p-3" style="background: url(<?php the_post_thumbnail_url() ?>);">
                            <div class="benefit-text d-flex flex-column justify-content-between bg-color-blue p-4">
                                <span class="font-secondary-regular font-color-secondary-white"><?php the_date() ?></span>
                                <h4 class="heading-4 font-color-primary-white"><?php the_title() ?></h4>
                                <div class="font-color-secondary-white"><?php the_excerpt() ?></div>
                                <a href="<?php the_permalink() ?>" target="_blank" class="btn btn-yellow">Читать публикацию</a>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                }
                else {
                    // Постов не найдено
                }

                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    
<?php
get_footer();
