<?php
/**
 * Template Name: Проєкт 2
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
    <section class="project-single single-page my-4 my-lg-5 py-4 py-lg-5">
        <div class="container">
            <div class="project-single__heading">
                <h1 class="heading-2 block-from-left"><span class="clr-main-orange">Ремонт</span><br>під ключ</h1>
                <p class="block-from-left d-none d-sm-flex">
                    Якісний ремонт - це завжди поєднання 3х важливих складових: якісний дизайн проєкт, якісні матеріали, професійні підрядники.<br>
                    Ми займаємось реалізацією не лише власних проєктів,<br>а й допомагаємо тим, кому потрібен надійний підрядник.<br>Тому, якщо у вас є дизайн проєкт - відправляйте його нам<br>і ми вас детально проконсультуємо
                </p>
                <p class="block-from-left d-sm-none">Якісний ремонт - це завжди поєднання 3х важливих складових: якісний дизайн проєкт, якісні матеріали, професійні підрядники.<br>Ми займаємось реалізацією не лише власних проєктів, а й допомагаємо тим, кому потрібен надійний підрядник. Тому, якщо у вас є дизайн проєкт - відправляйте його нам і ми вас детально проконсультуємо</p>
            </div>
            <h3 class="project-single__title block-from-left">З чого почати ремонт</h3>
            <ul class="project-single__list block-from-left">
                <li><span>01</span>Професійний огляд об’єкту</li>
                <li><span>02</span>Вивчення дизайн проєкту</li>
                <li><span>03</span>Підготовка кошторису на ремонт</li>
                <li class="mt-4">Правильно сформований кошторис та графік робіт - це гарантія спокою для наших клієнтів</li>
            </ul>
            <h3 class="project-single__title block-from-left mb-0">Реалізація з нами - це комфортно, зручно і прозоро</h3>
            <div class="project-single__squad">
                <div class="project-single__squad-item block-from-left">
                    <span>Створюємо робочий чат для зручної комунікації команди. Поетапні звіти, рахунки та оплати, питання та пропозиції - все в одному місці</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Не лише виконуємо роботи, а й беремо на себе всі інші турботи: закупівля матеріалів, організація доставок, вивіз будівельного сміття та інше</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Зручна поетапна оплата за фактом виконаних робіт. Вам не потрібно турбуватись за якість чи кошти, адже все максимально чітко та прозоро</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Договір та гарантія. Ми працюємо офіційно і за договором, а також надаємо гарантію на виконані роботи</span>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row align-center justify-content-between mb-4 mb-sm-0" style="gap: 40px;">
                <div class="read-more block-from-right">
                    <a href="/accompaniment-n-equipment">Супровід та комплектація</a>
                </div>
                <div class="read-more block-from-right alt">
                    <a href="/individual-design-project">Дизайн проєкт</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
