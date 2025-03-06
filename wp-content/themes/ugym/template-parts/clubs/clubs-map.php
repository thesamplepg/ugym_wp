<?php $clubs_map = str_replace(
    'height="600px"',
    'height="100%"',
    get_field('clubs_map', get_main_page_id()),
); ?>
<div class="mt-8 md:h-[500px] rounded-2xl shadow bg-neutral-800 overflow-hidden flex flex-wrap md:flex-nowrap wow animate__animated animate__fadeInUp">
  <section class="responsive-iframe w-full md:w-1/2 lg:w-2/3 h-[300px] md:h-full">
    <!-- <div id="clubs-map" class="w-full h-full"></div>  -->
    <?php echo $clubs_map; ?>
  </section>
  <section class="w-full md:w-1/2 lg:w-1/3 p-5 h-[300px] md:h-full">
    <ul class="clubs-map_locations h-full flex flex-col gap-3 overflow-y-scroll custom-scroll pr-1">
      <?php
      $query = new WP_Query(['post_type' => 'clubs']);
      if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
              <li data-club-location="<?php echo get_field(
                  'club_location',
              ); ?>">
                <a href="<?php echo get_the_permalink(); ?>">
                  <div class="p-2 justify-between border-b border-neutral-600">
                    <h3 class="flex items-center gap-2 font-semibold text-lg text-amber-500">
                      <i class="fa-solid fa-location-dot opacity-90 text-sm"></i>
                    <?php the_title(); ?> 
                    </h3>
                    <p class="my-2"><?php echo get_field('club_address'); ?></p>
                    <a class="text-amber-500 semibold flex items-center gap-2" href="<?php echo get_the_permalink(); ?>">Перейти</a>
                  </div>
                </a>
              </li>
      <?php
          endwhile;
      endif;
      ?>
      </li>
    </ul>
  </section>
</div>