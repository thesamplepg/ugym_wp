<?php $query = new WP_Query(['post_type' => 'partners']); ?>
<section class="py-16 bg-white">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 text-center">Вместе с нами</h2>
    <ul class="flex flex-wrap justify-center gap-4 mt-8">
      <?php if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
              <li data-modal-ref="#partners-modal-<?php echo get_the_ID(); ?>" class="modal-handler ">
                <a href="" class="py-4 px-6 border transition-all rounded-full block">
                  <img class="h-8" src="<?php the_post_thumbnail_url(
                      'medium',
                  ); ?>" alt="partner_logo">
                </a>
              </li>
      <?php
          endwhile;
      endif; ?>
    </ul>
  </div>
</section>