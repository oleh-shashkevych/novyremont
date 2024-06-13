<?php
/**
 * Template Name: Головна
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
    <section id="sectionMain" class="hero mb-5 py-4 py-lg-5">
        <div class="swiper-bg swiper d-lg-none">
            <div class="swiper-wrapper">
                <?php if( have_rows('hero_repeater_mobile') ): ?>
                    <?php while( have_rows('hero_repeater_mobile') ): the_row();?>
                        <div class="swiper-slide"><img loading="lazy" src="<?php the_sub_field('hero_repeater_img_mobile'); ?>" alt=""></div>
                    <?php endwhile; ?>  
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper-bg swiper d-none d-lg-block">
            <div class="swiper-wrapper">
                <?php if( have_rows('hero_repeater') ): ?>
                    <?php while( have_rows('hero_repeater') ): the_row();?>
                        <div class="swiper-slide"><img loading="lazy" src="<?php the_sub_field('hero_repeater_img'); ?>" alt=""></div>
                    <?php endwhile; ?>  
                <?php endif; ?>
            </div>
        </div>
        <div class="container" style="position: relative; z-index: 5;">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <h1 class="heading-1 mb-4 mb-lg-5">
                        Новий ремонт —<br>комплексне рішення<br>для&#160;вашого ремонту
                    </h1>
                    <a class="popmake-85 btn">Дізнатися вартість</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sectionAdvantages" class="advantages my-5 py-4 py-lg-5">
        <div class="block"></div>
        <div class="container">
            <div class="advantages__grid d-none d-sm-grid">
                <h2 class="heading-2 block-from-title">що дає<br><span class="clr-main-orange">комплексний</span><br>підхід?</h2>
                <div class="advantages__item block-from-right">
                    <span class="advantages__item-number">01</span>
                    <p class="advantages__item-text">Все в одному місці - від розробки дизайн проєкту, до реалізації ремонту під&nbsp;ключ</p>
                </div>
                <div class="advantages__item block-from-left">
                    <span class="advantages__item-number">02</span>
                    <p class="advantages__item-text">Чітке розуміння загального бюджету та термінів реалізації вашого проєкту</p>
                </div>
                <div class="advantages__item block-from-right">
                    <span class="advantages__item-number">03</span>
                    <p class="advantages__item-text">Якісно організований та послідовний процес, який збереже ваш час та нерви</p>
                </div>
            </div>
            <div class="advantages__grid d-sm-none">
                <h2 class="heading-2 block-from-title">що дає<br><span class="clr-main-orange">комплексний</span><br>підхід?</h2>
                <div class="advantages__item block-from-right">
                    <span class="advantages__item-number">01</span>
                    <p class="advantages__item-text">Все в одному місці -<br>від розробки дизайн проєкту,<br>до реалізації ремонту під&nbsp;ключ</p>
                </div>
                <div class="advantages__item block-from-left">
                    <span class="advantages__item-number">02</span>
                    <p class="advantages__item-text">Чітке розуміння загального бюджету та термінів реалізації вашого проєкту</p>
                </div>
                <div class="advantages__item block-from-right">
                    <span class="advantages__item-number">03</span>
                    <p class="advantages__item-text">Якісно організований та послідовний процес, який<br>збереже ваш час та нерви</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .projects__item:not(:nth-child(-n+6)) {
            display: none !important;
        }
    </style>
    <section id="sectionProjects" class="projects my-5 py-4 py-lg-5">
        <div class="container">
            <h2 class="heading-2 text-center mb-3 mb-lg-4 block-from-title d-sm-none">Наші <span class="clr-main-orange">проєкти</span></h2>
            <h2 class="heading-2 text-center mb-3 mb-lg-4 block-from-title d-none d-sm-block">Працюємо в <span class="clr-main-orange">різних</span> стилях</h2>
            <?php if( have_rows('proj_list') ): ?>
                <div class="projects__grid">
                    <?php while( have_rows('proj_list') ): the_row();?>
                        <div class="<?php the_sub_field('proj_list_gallery'); ?> projects__item d-flex flex-column justify-content-end py-1 py-lg-2 px-3 px-lg-4 block-from-left" style="background-image: url(<?php the_sub_field('proj_list_img'); ?>);">
                            <h3 class="heading-3 mb-3"><?php the_sub_field('proj_list_text'); ?><br><span class="clr-main-orange"><?php the_sub_field('proj_list_square'); ?></span></h3>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="read-more mt-3 mt-lg-5 block-from-right">
                <a href="/styles">дивитись більше</a>
            </div>
        </div>
    </section>

    <section class="demos my-5 py-4 py-lg-5">
        <div class="container">
            <h2 class="heading-2 block-from-title">У вас вже <span class="clr-main-orange">є</span> <span class="clr-main-orange d-none d-md-inline">дизайн</span> <span class="clr-main-orange">проєкт</span>?</h2>
            <h2 class="heading-2 mb-3 mb-lg-4 block-from-title">— Ми його <span class="clr-main-orange">реалізуємо</span>!</h2>
            <div class="swiper demos-swiper block-from-left d-none d-sm-block">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/new_york.png');" data-video-id="_s3Y65fPCHI"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/teremky.png');" data-video-id="VmTIXA0GBqE"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/crystal.png');" data-video-id="41E9JSDQZ3g"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/slavutich.png');" data-video-id="buE9dm0B_3U"></div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="video__grid d-sm-none">
                <div class="video__item block-from-right">
                    <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/new_york.png');" data-video-id="_s3Y65fPCHI"></div>
                </div>
                <div class="video__item block-from-left">
                    <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/teremky.png');" data-video-id="VmTIXA0GBqE"></div>
                </div>
                <div class="video__item block-from-right">
                    <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/crystal.png');" data-video-id="41E9JSDQZ3g"></div>
                </div>
                <div class="video__item block-from-left">
                    <div class="video-preview" style="background-image: url('https://novyremont.com/wp-content/uploads/2024/04/slavutich.png');" data-video-id="buE9dm0B_3U"></div>
                </div>
            </div>
            <div class="read-more mt-3 mt-lg-5 block-from-right">
                <a href="/video">дивитись більше</a>
            </div>
        </div>
    </section>

    <section id="sectionPrice" class="price my-5 py-4 py-lg-5">
        <div class="container">
            <h2 class="heading-2 text-center mb-3 mb-lg-4 block-from-title">наші <span class="clr-main-orange">послуги</span></h2>
            <div class="price__grid">
                <a href="/individual-design-project" class="price__item block-from-left">
                    <div class="price__item-content">
                        <h3 class="price__item-title d-sm-none">індивідуальний<br>дизайн проєкт</h3>
                        <h3 class="price__item-title d-none d-sm-block">індивідуальний дизайн проєкт</h3>
                        <ul class="price__item-list">
                            <li>Планувальні рішення</li>
                            <li>3D візуалізації</li>
                            <li>Технічні креслення</li>
                            <li>Специфікація матеріалів</li>
                            <li>Інтерактивний 3D тур</li>
                        </ul>                    
                    </div>
                    <p class="price__item-text">Від 15$ за кв.м</p>
                    <div class="price__item-btn-wrapper">
                        <div class="popmake-85 btn price__item-btn">Залишити заявку</div>
                    </div>
                </a>
                <a href="/turnkey-repairs" class="price__item block-from-left">
                    <div class="price__item-content">
                        <h3 class="price__item-title d-sm-none">реалізація<br>ремонту під&nbsp;ключ</h3>
                        <h3 class="price__item-title d-none d-sm-block">реалізація ремонту під&nbsp;ключ</h3>
                        <ul class="price__item-list">
                            <li>Підрахунок кошторису</li>
                            <li>Виконання ремонтних робіт</li>
                            <li>Закупівля будматеріалів</li>
                            <li>Вивіз будівельного сміття</li>
                            <li>Поетапна звітність</li>
                        </ul>                    
                    </div>
                    <p class="price__item-text">Від 200$ за кв.м</p>
                    <div class="price__item-btn-wrapper">
                        <div class="popmake-85 btn price__item-btn">Залишити заявку</div>
                    </div>
                </a>
                <a href="/accompaniment-n-equipment" class="price__item block-from-left">
                    <div class="price__item-content">
                        <h3 class="price__item-title">супровід та<br>комплектація</h3>
                        <ul class="price__item-list">
                            <li>Виїзди на об’єкт</li>
                            <li>Контроль реалізації проєкту</li>
                            <li>Комунікація з підрядниками</li>
                            <li>Підбір чистових матеріалів</li>
                            <li>Партнерські знижки</li>
                        </ul>                    
                    </div>
                    <p class="price__item-text">Від 15$ за кв.м</p>
                    <div class="price__item-btn-wrapper">
                        <div class="popmake-85 btn price__item-btn">Залишити заявку</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
