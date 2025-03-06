<?php get_template_part('template-parts/contacts'); ?>

<footer class="bg-amber-500 py-14 text-white bg-neutral-800">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl font-bold text-amber-500">UGG</h2>
    <div class="flex gap-10 flex-wrap md:flex-nowrap">
      <article class="max-w-[300px]">
        <p class="font-medium mt-4 opacity-90">
          Профессиональное оборудование, групповые тренировки, индивидуальный подход, стильная атмосфера и зона отдыха.
        </p>
      </article>
      <nav class="grow">
        <ul class="flex flex-col gap-2 underline">
          <li>
            <a href="<?php echo home_url(
                '/blog',
            ); ?>" class="hover:opacity-80">Блог</a>
          </li>
          <li>
            <a href="<?php echo home_url(
                '/tarrifs',
            ); ?>" class="hover:opacity-80">Тарифы</a>
          </li>
          <li>
            <a href="<?php echo home_url(
                '/clubs',
            ); ?>" class="hover:opacity-80">Клубы</a>
          </li>
          <li>
            <a href="<?php echo home_url(
                '/promo',
            ); ?>" class="hover:opacity-80">Акции</a>
          </li>
          <li>
            <a href="<?php echo home_url(
                '/partners',
            ); ?>" class="hover:opacity-80">Партнеры</a>
          </li>
        </ul>
      </nav>
      <div class="font-medium text-right">
        <p><?php echo get_field('address', get_main_page_id()); ?></p>
        <p class="text-base mb-2"><?php echo get_field(
            'phone',
            get_main_page_id(),
        ); ?></p>
        <div class="flex gap-4 justify-end">
          <a href="https://api.whatsapp.com/send/?phone=77018428701" class="text-white text-2xl">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="https://www.instagram.com/underground_gym_ast/" class="text-white text-2xl">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <p class="mt-6">&copy; UndergroundGym 2025 </p>
  </div>
</footer>

<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</script>
<script defer src="https://mapgl.2gis.com/api/js/v1"></script>

<?php wp_footer(); ?>

</body>
</html>