<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$category_template = locate_template('template-parts/blog/category.php');
$route = [['Блог', '/blog']];
$categories = ['новости', 'тренировки', 'события', 'питание'];
$categories_params = ['categories' => $categories, 'activeIndex' => 0];
?>

  <main class="py-[100px] pb-12">
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
        <h1 class="text-3xl md:text-4xl font-bold mt-2 text-white">Блог</h1>
      </header>

      <section class="py-10">
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php if (have_posts()):
              the_post(); ?>
          <li>
            <?php get_template_part('template-parts/blog/card'); ?>
          </li>
          <?php
          endif; ?>
        </ul>
      </section>

    </div>
  </main>

<?php get_footer(); ?>
