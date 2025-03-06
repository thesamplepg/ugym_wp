<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Партнеры', '/partners']];
?>

  <main class="py-[100px] pb-12">
    <div class="comtainer mx-auto">
      <header>
        <?php echo load_template($route_template, false, $route); ?>
        <h1 class="text-3xl md:text-4xl font-bold mt-2 text-white">Партнеры</h1>
      </header>
      <?php get_template_part('template-parts/partners/partners-list'); ?>
    </div>
  </main>

<?php get_footer(); ?>
