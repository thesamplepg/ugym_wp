<?php
$faq_template = locate_template('template-parts/faq.php');
$faq_questions = get_field('faq', get_main_page_id());
$visable = get_field('visable', get_main_page_id());
?>

<?php get_header(); ?>


<main class="main-page">

<?php $visable['promo-slider'] &&
    get_template_part('template-parts/promo-slider'); ?>
<?php $visable['advantages'] &&
    get_template_part('template-parts/advantages'); ?>
<?php $visable['tarrifs'] &&
    get_template_part('template-parts/main-page/tarrifs'); ?>
<?php $visable['in_digits'] && get_template_part('template-parts/indigits'); ?>
<?php echo $visable['faq'] &&
    load_template($faq_template, true, $faq_questions); ?>
<?php $visable['blog'] && get_template_part('template-parts/main-page/blog'); ?>
<?php $visable['clubs_map'] &&
    get_template_part('template-parts/main-page/map'); ?>
<?php $visable['partners'] &&
    get_template_part('template-parts/main-page/partners'); ?>

</main>


<?php get_footer(); ?>
