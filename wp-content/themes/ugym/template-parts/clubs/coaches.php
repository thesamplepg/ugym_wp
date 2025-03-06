<?php
$coaches = get_field('club_coaches'); ?>
<section class="py-16 pt-8" id="coaches-section">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl font-bold mb-6">Тренеры</h2>
    <div class="coaches-swiper swiper">
      <div class="swiper-wrapper">
        <?php foreach ($coaches as $coach):

            $coach_name = get_the_title($coach);
            $coach_avatar = get_the_post_thumbnail_url($coach);
            $coach_content = apply_filters(
                'the_content',
                get_post_field('post_content', $coach),
            );
            ?>
          <div class="swiper-slide w-1/2 pr-3 sm:w-1/6 wow animate__animated animate__fadeInUp">
            <div class="group cursor-pointer modal-handler" data-modal-ref="#coaches-modal-<?php echo $coach; ?>">
              <img class="rounded-2xl object-center object-cover max-h-[220px] w-full" src="<?php echo $coach_avatar; ?>" alt="avatar">
              <a class="block text-center mt-3 font-medium group-hover:text-amber-500 transition-all" href="#"><?php echo $coach_name; ?></a>
            </div>
          </div>
        <?php
        endforeach; ?>
      </div>
    </div>
    <div class="coaches-modals">
      <?php foreach ($coaches as $coach):

          $coach_title = get_the_title($coach);
          $coach_avatar = get_the_post_thumbnail_url($coach);
          $coach_content = apply_filters(
              'the_content',
              get_post_field('post_content', $coach),
          );
          ?>
          <div id="coaches-modal-<?php echo $coach; ?>" class="z-30 hidden flex items-center justify-center fixed top-0 left-0 w-dvw h-dvh bg-black/70">
            <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-white shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
              <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                <span class="modal_close-btn absolute top-2 right-5 text-amber-500 text-xl cursor-pointer">
                  <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                  <img class="w-full rounded-3xl" src="<?php echo $coach_avatar; ?>" alt="fitness hall">
                </div>
                <div class="md:w-1/2">
                  <h3 class="text-2xl font-semibold mb-4"><?php echo $coach_title; ?></h3>
                  <div class="wordpress-content"><?php echo $coach_content; ?></div>
                </div>
              </div>
            </section>
          </div> 
      <?php
      endforeach; ?>
    </div>
  </div>
</section>