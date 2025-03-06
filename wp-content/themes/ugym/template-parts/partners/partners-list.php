<?php
$query = new WP_Query(['post_type' => 'partners']); ?>

<div class=".comtainer mx-auto">
  <div class="my-10">
    <ul class="grid xs:grid-cols-2 lg:grid-cols-3 items-stretch gap-6 md:gap-4">
      <?php if ($query->have_posts()):
          while ($query->have_posts()):

              $query->the_post();
              $discount_partner = get_field('discount_partners');
              $discount_all = get_field('discount_all');
              ?>
              <li class="modal-handler">
                <div class="w-full h-full text-center flex flex-col items-center rounded-2xl bg-neutral-800 p-2 md:p-4 py-6 md:py-10">
                  <img class="h-[70px] md:h-[110px] rounded-2xl mb-4 object-center object-fit" src="<?php the_post_thumbnail_url(
                      'large',
                  ); ?>" alt="partners_image">
                  <h3 class="w-full text-xl md:text-2xl font-semibold text-amber-500 mb-2"><?php echo get_the_title(); ?></h3>
                  <p class="flex-grow"><?php echo nl2br(
                      esc_html(get_field('description')),
                  ); ?></p>
                  <a href="#" data-modal-ref="#partners-modal-<?php echo get_the_ID(); ?>" class="modal-handler px-6 py-2 font-semibold mt-8 rounded-full -semibold bg-amber-500 text-white">Подробнее</a>
                </div>

                <!--Modal-->

                <div id="partners-modal-<?php echo get_the_ID(); ?>" class="hidden flex items-center justify-center fixed z-40 top-0 left-0 w-dvw h-dvh bg-black/70">
                  <section class="modal_window relative  md:flex-row  max-w-[90%] lg:max-w-[800px] overflow-hidden bg-neutral-800 shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
                    <div class="flex flex-col md:flex-row max-h-[65vh] md:max-h-[370px] gap-8 md:gap-12 overflow-y-scroll custom-scroll">
                      <span class="modal_close-btn absolute top-2 right-5 text-orange-6000 text-xl cursor-pointer">
                        <i class="fa-solid fa-xmark"></i>
                      </span>
                      <div class="md:w-1/2 left flex flex-col gap-10 items-center">
                        <img class="w-full rounded-3xl" src="<?php the_post_thumbnail_url(
                            'large',
                        ); ?>" alt="fitness hall">
                        <div class="flex flex-col md:flex-row gap-8">
                          <div class="text-center">
                            <p class="font-medium">Скидка для клиента</p>
                            <?php  ?>
                            <p class="mb-6 font-bold text-4xl text-amber-500"><?php echo !empty(
                                $discount_partner
                            )
                                ? $discount_partner
                                : $discount_all; ?></p>
                            <a href="#" data-modal-ref="#modal-buy" data-modal-title="Получить скидку" data-input-key="partner" data-input-value="<?php echo get_the_title() .
                                ': Скидка для клиента - ' .
                                $discount_partner; ?>" class="modal-handler px-7 py-3 bg-amber-500 font-semibold rounded-full text-white">Получить</a>
                          </div>
                          <div class="text-center">
                            <p class="font-medium">Скидка для всех</p>
                            <p class="mb-6 font-bold text-4xl text-amber-500"><?php echo $discount_all; ?></p>
                            <a href="#" data-modal-ref="#modal-buy" data-modal-title="Получить скидку" data-input-key="partner" data-input-value="<?php echo get_the_title() .
                                ': Скидка для всех - ' .
                                $discount_all; ?>" class="modal-handler px-7 py-3 bg-amber-500 font-semibold rounded-full text-white">Получить</a>
                          </div>
                        </div>
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
</div>