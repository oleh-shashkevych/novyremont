<?php
/**
 * Template Name: Блог
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

<main>
        <section class="bg-color-primary-white inner-shadow py-5">
            <div class="container">
				<nav aria-label="breadcrumb mb-2 mb-lg-3">
					<ol class="breadcrumb subtitle-medium font-color-blue mb-2">
						<?php
						if(function_exists('bcn_display'))
						{
								bcn_display();
						}
						?>
					</ol>
				</nav>
                <h2 class="heading-2">Весь мир “Живой Вселенной” на вашем экране</h2>
            </div>
        </section>
		<?php the_field('main-title'); ?>
        <section class="blog mb-5 pb-5">
            <div class="container py-5">
                <div class="row">
					<?php
						if ( have_posts() ) {
							$i = 0;
							while ( have_posts() ) {
								$i++;
								the_post();
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
					?>
                </div>
				<?php 
					$args = array(
						'show_all'     => false, // показаны все страницы участвующие в пагинации
						'end_size'     => 1,     // количество страниц на концах
						'mid_size'     => 1,     // количество страниц вокруг текущей
						'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
						'prev_text'    => __('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 13C22.5523 13 23 12.5523 23 12C23 11.4477 22.5523 11 22 11L22 13ZM1.29289 11.2929C0.902369 11.6834 0.902369 12.3166 1.29289 12.7071L7.65685 19.0711C8.04738 19.4616 8.68054 19.4616 9.07107 19.0711C9.46159 18.6805 9.46159 18.0474 9.07107 17.6569L3.41421 12L9.07107 6.34314C9.46159 5.95262 9.46159 5.31946 9.07107 4.92893C8.68054 4.53841 8.04738 4.53841 7.65686 4.92893L1.29289 11.2929ZM22 11L2 11L2 13L22 13L22 11Z" fill="#6B6B6B"/></svg>'),
						'next_text'    => __('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 11C1.44772 11 1 11.4477 1 12C1 12.5523 1.44772 13 2 13V11ZM22.7071 12.7071C23.0976 12.3166 23.0976 11.6834 22.7071 11.2929L16.3431 4.92893C15.9526 4.53841 15.3195 4.53841 14.9289 4.92893C14.5384 5.31946 14.5384 5.95262 14.9289 6.34315L20.5858 12L14.9289 17.6569C14.5384 18.0474 14.5384 18.6805 14.9289 19.0711C15.3195 19.4616 15.9526 19.4616 16.3431 19.0711L22.7071 12.7071ZM2 13H22V11H2V13Z" fill="#292929"/></svg>'),
						'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
						'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
						'screen_reader_text' => __( 'Навігація' ),
						'class'        => '', // CSS класс, добавлено в 5.5.0.
					);

					echo get_the_posts_pagination( $args ); 
					
				?>
            </div>
        </section>

<?php
get_footer();
