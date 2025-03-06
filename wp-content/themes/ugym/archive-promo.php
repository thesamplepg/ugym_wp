<?php get_header(); ?>
<?php
$route_template = locate_template('template-parts/route.php');
$route = [['Акции', '/promo']];
?>

  <main class="py-[100px] pb-12">
    <div class="comtainer mx-auto">
      <header>
        <?php echo load_template($route_template, false, $route); ?>
        <h1 class="text-3xl md:text-4xl font-bold mt-2 text-white">Акции UGG</h1>
      </header>
      <ul class="my-5 md:my-10 grid gap-10 md:gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
        <li class="h-full">
          <a href="" data-modal-ref="#promo-modal-<?php echo get_the_ID(); ?>" class="h-full modal-handler">
            <div class="promo-item w-full flex flex-col h-full bg-neutral-800 hover:shadow shadow-sm rounded-2xl overflow-hidden">
              <header class="flex items-end bg-slate-700 min-h-[120px] p-5 rounded-2xl bg-center bg-cover bg-no-repeat bg-[url('<?php the_post_thumbnail_url(
                  'medium',
              ); ?>')]">
                <h3 class="max-w-[60%] text-2xl text-white font-bold">
                  <?php the_title(); ?> 
                </h3>
              </header>
              <article class="p-6 py-3">
                <?php if (get_field('promo_seasonal')): ?>
                  <span class="px-4 py-1 bg-amber-500 text-neutral-800 font-semibold text-xs rounded-full mb-2 inline-block">Сезонная</span> 
                <?php endif; ?>
                <p>
                  <?php echo get_field('about'); ?>
                </p>
              </article>
              <a href="" data-modal-ref="#promo-modal-<?php echo get_the_ID(); ?>" class="modal-handler flex items-center gap-3 p-6 pt-0 mt-2 block text-amber-500 font-semibold">
                Узнать больше 
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </a>
          <div id="promo-modal-<?php echo get_the_ID(); ?>" class="hidden flex items-center justify-center fixed z-40 top-0 left-0 w-dvw h-dvh bg-black/70">
            <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-neutral-800 shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
              <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                <span class="modal_close-btn absolute top-2 right-5 text-orange-6000 text-xl cursor-pointer">
                  <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                  <img class="w-full rounded-3xl" src="<?php echo get_field(
                      'image',
                  ); ?>" alt="fitness hall">
                  <a href="#" data-modal-ref="#modal-buy" data-input-key="partner" data-input-value="<?php the_title(); ?>" class="modal-handler px-7 py-3 bg-amber-500 font-semibold rounded-full text-white">Выбрать</a>
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
  </main>

<?php get_footer(); ?>
