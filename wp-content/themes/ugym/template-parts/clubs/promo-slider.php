<?php
$promo_slides = get_field('club_promos'); ?>
<section id="promo-section" class="promo-slider pb-16 pt-[90px]">
  <div class="comtainer mx-auto">
    <div class="promo-swiper swiper h-[350px] md:h-[400px] rounded-2xl shadow group">
      <div class="absolute z-10 w-full h-full p-6 md:p-10 flex items-end">
        <div class="w-full h-full lg:w-2/3 flex flex-col">
          <div class="promo-swiper_text grow relative text-3xl md:text-4xl">
            <?php foreach ($promo_slides as $slide): ?>
            <h2 class="absolute bottom-0 animate__animated animate__faster text-white font-bold uppercase"><?php echo $slide[
                'promo_offer'
            ]; ?></h2>
            <?php endforeach; ?>
          </div>
          <section class="flex items-center mt-4 gap-4">
            <a class="shadow text-white bg-amber-500 px-8 py-3 rounded-full font-bold" href="<?php echo home_url(); ?>/clubs">Выбрать клуб</a>
            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-all">
              <span class="arrows-left opacity-60 hover:opacity-90 bg-amber-500 text-white rounded-full w-[44px] h-[44px] flex items-center justify-center cursor-pointer hover:scale-105 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
              </span>
              <span class="arrows-right opacity-60 hover:opacity-90 bg-amber-500 text-white rounded-full w-[44px] h-[44px] flex items-center justify-center cursor-pointer hover:scale-105 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
              </span>
            </div>
          </>
        </div>
      </div>
      <div class="swiper-wrapper h-full">
        <?php foreach ($promo_slides as $slide): ?>
          <div class="swiper-slide w-full h-full bg-center bg-cover bg-[url('<?php echo $slide[
              'promo_image'
          ]; ?>')]">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>