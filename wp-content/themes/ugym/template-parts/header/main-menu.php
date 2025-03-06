<?php
$phone = get_field('phone', get_main_page_id()); ?>
<div class="main-header_menu fixed top-0 z-50 w-full bg-neutral-800">
  <div class="comtainer mx-auto py-4 flex items-center gap-5">
    <div class="main-header_logo text-3xl text-amber-500 font-bold mr-8 grow"><a href="<?php echo home_url(); ?>">UGG</a></div>
    <ul class="main-header_nav lg:flex hidden list-none grow gap-8 justify-center text-amber-500 font-semibold">
      <li class="relative group">
        <a href="<?php echo home_url(
            '/clubs',
        ); ?>">Клубы <i class="fa-solid fa-caret-down ml-1"></i></a>
        <!--Nested menu-->
        <div class="absolute left-[-50%] hidden group-hover:block pt-2">
          <ul class="shadow custom-scroll w-[250px] max-h-[300px] bg-neutral-800 rounded-lg text-amber-500 font-medium overflow-hidden overflow-y-scroll">
            <?php
            $query = new WP_Query(['post_type' => 'clubs']);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); ?>
            <li>
              <a class="block p-2 px-3 hover:opacity-80" href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
            <?php
                endwhile;
            endif;
            ?>
          </ul>
        </div>
      </li>
      <li><a href="<?php echo home_url(); ?>/tarrifs">Тарифы</a></li>
      <li><a href="<?php echo home_url(); ?>/partners">Партнеры</a></li>
      <li><a href="<?php echo home_url(); ?>/promo">Акции</a></li>
      <li><a href="<?php echo home_url(); ?>/blog">Блог</a></li>
    </ul>
    <button data-modal-ref="#modal-buy" class="modal-handler main-header_buy-btn lg:block hidden bg-amber-500 text-white font-semibold px-5 py-3 rounded-full">Купить абонимент</button>
    <a href="tel:<?php echo $phone; ?>" class="main-header_phone md:block hidden font-semibold text-white"><?php echo $phone; ?></a>
    <span id="mobile-menu_btn" class="main-header_mobile-bar lg:hidden text-2xl text-amber-500">
      <i class="fa-solid fa-bars"></i>
    </span>
  </div>
</div>