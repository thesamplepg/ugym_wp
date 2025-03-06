<?php
$query = new WP_Query([
    'post_type' => 'tarrifs',
    'order' => 'ASC',
]);
$color_palate = [
    'orange' => 'amber-500',
    'teal' => 'teal-600',
    'slate' => 'white',
];
?>

<div class="wow animate__animated animate__fadeInUp tarrifs flex justify-center items-center lg:justify-between flex-wrap gap-10 md:gap-5">
  <?php if ($query->have_posts()):
      while ($query->have_posts()):

          $query->the_post();
          $color = $color_palate[get_field('tarrifs_color')];
          $shadow = get_field('tarrifs_best') ? 'shadow-lg' : 'shadow-sm';
          ?>

          <div class="tarrif-block w-full md:w-[320px] py-8 px-6 bg-neutral-800 rounded-2xl <?php echo $shadow; ?>">
            <?php if (get_field('tarrifs_best')): ?>
              <p class="text-slate-600 text-xs uppercase mb-2 font-medium">лучший выбор</p>
            <?php endif; ?>
            <h3 class="text-3xl text-<?php echo $color; ?> font-bold"><?php the_title(); ?></h3>
            <ul class="tarrif-block_list flex flex-col gap-2 my-6">
            <?php
            $content = get_field('tarrifs_content');
            foreach ($content as $item): ?>
              <li class="flex gap-2 items-center relative <?php echo $item[
                  'included'
              ]
                  ? ''
                  : 'text-gray-400'; ?>">
                <?php if ($item['included']): ?>
                  <i class="text-green-500 fa-solid fa-check"></i>
                <?php else: ?>
                  <i class="text-gray-400 fa-solid fa-xmark"></i>
                <?php endif; ?>

                <?php echo $item['content']; ?> 
                <?php if ($item['information']): ?>
                  <div class="group">
                    <i class="fa-solid fa-circle-question text-amber-500 cursor-pointer"></i>
                    <div class="modal-info font-normal text-xs hidden group-hover:block absolute left-0 z-10 top-6 px-6 md:w-[100%] py-4 bg-black/70 text-white rounded-lg">
                      <?php echo $item['information']; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </li>
            <?php endforeach;
            ?>
            </ul>
            <h4 class="tarrif-block_price mb-3 text-<?php echo $color; ?> font-semibold">
              <span class="text-xl"><?php echo get_field(
                  'tarrifs_price',
              ); ?></span> в месяц
            </h4>
            <a href="#" data-modal-ref="#modal-buy" data-input-key="tarrif" data-input-value="<?php the_title(); ?>" class="modal-handler tarrif-block_btn px-8 py-3 block text-center bg-<?php echo $color ==
'white'
    ? 'neutral-900'
    : $color; ?> text-white font-semibold rounded-full">
              Купить
            </a>
          </div>
  <?php
      endwhile;
  endif; ?>
</div>
<?php wp_reset_postdata(); ?>
