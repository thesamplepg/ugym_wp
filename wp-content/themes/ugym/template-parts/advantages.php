<?php
$query = new WP_Query(['post_type' => 'advantages', 'order' => 'ASC']);
$color_palate = [
    'orange' => 'amber-500',
    'teal' => 'teal-600',
    'slate' => 'slate-800',
];
?>

<section class="advantages py-8">
  <div class="comtainer mx-auto">
    <ul class="advantages_list z-10 mt-[-3rem] flex gap-10 md:gap-5 justify-center lg:justify-between flex-wrap">
      <?php if ($query->have_posts()):
          while ($query->have_posts()):
              $query->the_post(); ?>
        <li>
          <div class="advantages_item max-w-full md:max-w-[320px] bg-neutral-800 shadow-sm rounded-2xl overflow-hidden">
            <header class="flex items-end bg-<?php echo $color_palate[
                get_field('color')
            ]; ?> min-h-[120px] p-5 rounded-2xl bg-right-bottom bg-no-repeat bg-[url('<?php the_post_thumbnail_url(
     'medium',
 ); ?>')]">
              <h3 class="max-w-[60%] text-2xl text-white font-bold">
                <?php the_title(); ?> 
              </h3>
            </header>
            <article class="p-5">
              <?php echo get_field('about'); ?>
            </article>
            <a href="#" data-modal-ref="#advantages-modal-<?php echo get_the_ID(); ?>" class="modal-handler flex items-center gap-3 p-5 pb-8 block text-amber-500 font-semibold">
              Узнать больше 
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
          <div id="advantages-modal-<?php echo get_the_ID(); ?>" class="hidden flex items-center justify-center fixed z-40 top-0 left-0 w-dvw h-dvh bg-black/70">
            <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-neutral-800 shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
              <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                <span class="modal_close-btn absolute top-2 right-5 text-orange-6000 text-xl cursor-pointer">
                  <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                  <img class="w-full rounded-3xl" src="<?php echo get_field(
                      'image',
                  ); ?>" alt="fitness hall">
                  <a href="<?php echo home_url(
                      '/clubs',
                  ); ?>" class="px-7 py-3 bg-amber-500 font-semibold rounded-full text-white">Выбрать клуб</a>
                </div>
                <div class="md:w-1/2">
                  <h3 class="text-2xl text-amber-500 font-semibold mb-4"><?php the_title(); ?></h3>
                  <div class="wordpress-content text-white/90">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </section>
          </div> 
        </li>
      <?php
          endwhile;
      endif; ?>
    </ul>
  </div>
</section>
<?php wp_reset_postdata(); ?>
