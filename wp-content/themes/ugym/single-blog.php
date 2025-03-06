<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$category_template = locate_template('template-parts/blog/category.php');
$route = [['Блог', '/blog']];
$categories = ['новости', 'тренировки', 'события', 'питание'];
$categories_params = ['categories' => $categories, 'activeIndex' => 0];
if (have_posts()) {
    the_post();
}
?>

  <main class="py-[100px] pb-12 min-h-dvh">
    <div class="comtainer mx-auto">
      <header>
        <div class="py-10 pt-3">
          <?php echo load_template(
              $category_template,
              false,
              $categories_params,
          ); ?>
        </div> 
        <?php echo load_template($route_template, false, $route); ?>
      </header>
      <div class="block lg:grid grid-cols-[5fr_2fr] gap-5 my-10 relative">
        <section class="bg-neutral-800 rounded-2xl p-8 md:p-10">
          <h1 class="text-3xl text-amber-500 md:text-4xl font-bold mb-10"><?php the_title(); ?></h1>
          <img class="rounded-2xl mb-10" src="<?php the_post_thumbnail_url(
              'large',
          ); ?>" alt="fitness">
          <div class="wordpress-content text-white">
            <?php the_content(); ?>
          </div>
        </section>
        <section class="hidden lg:block">
          <?php get_template_part('template-parts/blog/sidebar'); ?>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
