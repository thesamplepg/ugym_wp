<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Клубы', '/clubs']];
?>

<section class="clubs-header bg-neutral-800 z-30 fixed w-full pt-[76px]">
  <div class="comtainer mx-auto py-4">
    <?php echo load_template($route_template, false, $route); ?>
    <h1 class="text-3xl md:text-4xl font-bold mt-4"><?php the_title(); ?></h1>
  </div>
  <nav class="bg-neutral-600 py-4 transition-all">
    <div class="comtainer mx-auto">
      <ul class="flex gap-10 text-xs text-amber-500 font-bold">
        <li>
          <a href="#tarrifs-section" class="hover:opacity-60">Тарифы</a>
        </li>
        <li>
          <a href="#coaches-section" class="hover:opacity-60">Тренеры</a>
        </li>
        <li>
          <a href="#promo-section" class="hover:opacity-60">Акции</a>
        </li>
        <li>
          <a href="#contacts-section" class="hover:opacity-60">Контакты</a>
        </li>
      </ul>
    </div>
  </nav>
</section>