<?php
get_header(); ?>
<?php
if (have_posts()) {
    the_post();
}
$faq_template = locate_template('template-parts/faq.php');
$faq = get_field('club_faq');
$promos = get_field('club_promos');
?>


<?php get_template_part('template-parts/clubs/header'); ?>

<main class="single-clubs pt-[280px] md:pt-[228px] bg-neutral-900">
  
  <?php get_template_part('template-parts/clubs/club-info'); ?>
  <?php get_template_part('template-parts/clubs/tarrifs'); ?>
  <?php get_template_part('template-parts/clubs/promo-slider'); ?>
  <?php get_template_part('template-parts/clubs/contacts'); ?>
  <?php get_template_part('template-parts/clubs/coaches'); ?>
  <?php echo load_template($faq_template, false, $faq); ?>

</main>


<?php get_footer(); ?>
