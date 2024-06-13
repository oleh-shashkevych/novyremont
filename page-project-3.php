<?php
/**
 * Template Name: Проєкт 3
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
                <h1 class="heading-2 heading-2--small block-from-left"><span class="clr-main-orange">Супровід</span> та<br>комплектація</h1>
                <p class="block-from-left">Реалізація дизайн проєкту - це надскладний процес, який потребує не лише активної залученості, а й уваги до деталей. Адже на кожному етапі ремонту потрібно враховувати безліч нюансів, кожен з яких є невід’ємною частиною кінцевого результату</p>
            </div>
            <h3 class="project-single__title block-from-left">Авторський супровід - це</h3>
            <ul class="project-single__list block-from-left">
                <li><span>01</span>Присутність та комунікація в робочому чаті проєкту</li>
                <li><span>02</span>Поетапні виїзди на об’єкт для перевірки на відповідність реалізованих робіт до дизайн проєкту</li>
                <li><span>03</span>Консультація підрядників щодо реалізації дизайн проєкту</li>
                <li><span>04</span>Пропозиції щодо вирішення питань реалізації, внесення відповідних коректив у проєкт</li>
            </ul>
            <h3 class="project-single__title block-from-left">Комплектація - це</h3>
            <ul class="project-single__list block-from-left">
                <li><span>01</span>Організація підбору чистових (оздоблювальних) матеріалів у магазинах та шоурумах</li>
                <li><span>02</span>Консультація при підборі чистових матеріалів та предметів інтер’єру</li>
                <li><span>03</span>Організація закупівель та доставок чистових матеріалів та предметів інтер’єру на об’єкт</li>
                <li><span>04</span>Взаємодія з меблевими підрядниками та декораторами</li>
            </ul>
            <h3 class="project-single__title block-from-left mb-0">В результаті ви отримаєте</h3>
            <div class="project-single__squad d-none d-sm-grid">
                <div class="project-single__squad-item block-from-left">
                    <span>Максимальну відповідність результату<br>до візуалізацій дизайн проєкту</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Професійний підхід<br>та збережений власний час</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Спеціальні знижки на матеріали<br>від наших партнерів та постачальників</span>
                </div>
            </div>
            <div class="project-single__squad d-sm-none">
                <div class="project-single__squad-item block-from-left">
                    <span>Максимальну відповідність результату до візуалізацій дизайн проєкту</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Професійний підхід та збережений власний час</span>
                </div>
                <div class="project-single__squad-item block-from-left">
                    <span>Спеціальні знижки на матеріали від наших партнерів та постачальників</span>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row align-center justify-content-between mb-4 mb-sm-0" style="gap: 40px;">
                <div class="read-more block-from-right">
                    <a href="/individual-design-project">Дизайн проєкт</a>
                </div>
                <div class="read-more block-from-right alt">
                    <a href="/turnkey-repairs">Ремонт під ключ</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
