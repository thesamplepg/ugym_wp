<section class="py-16 pt-10 md:pt-16">
  <div class="comtainer mx-auto">
    <h2 class="text-4xl font-bold text-white">Последние публикации</h2>
    <ul class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
      <?php
      $args = [
          'post_type' => 'blog',
          'posts_per_page' => 6,
      ];
      $query = new WP_Query($args);

      if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
        <li>
          <?php get_template_part('template-parts/blog/card'); ?>
        </li>
      <?php
          endwhile;
      endif;
      ?>
    </ul>
    <div class="mt-8 text-center">
      <a href="/ugym/blog" class="py-3 px-8 font-semibold rounded-full shadow-sm bg-amber-500 inline-block text-white">Еще</a>
    </div>
  </div>
</section>