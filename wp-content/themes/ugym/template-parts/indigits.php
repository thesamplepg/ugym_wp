<?php $in_digits = get_field('in_digits', get_main_page_id()); ?>
<section class="py-16">
  <div class="comtainer mx-auto">
    <div class="relative p-10 md:p-16 text-white rounded-3xl bg-neutral-800 shadow overflow-hidden">
      <div class="absolute w-full h-full top-0 left-0"></div>
      <div class="relative z-10">
        <article class="w-full md:w-2/3">
          <h2 class="wow animate__animated animate__fadeInLeft text-4xl md:text-5xl font-bold mb-6">
            <?php echo $in_digits['in_digits_title']; ?>
          </h2>
          <p class="font-medium">
            <?php echo $in_digits['in_digits_subtitle']; ?>
          </p>
        </article>
        <ul class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-5">
          <?php foreach ($in_digits['in_digits_list'] as $data): ?>
            <li class="wow animate__animated animate__fadeInUp font-semibold text-2xl">
              <span class="text-4xl font-bold text-amber-500"><?php echo $data[
                  'digit'
              ]; ?></span>
              <span><?php echo explode(' ', $data['text'], 2)[0]; ?></span>
              <p><?php echo explode(' ', $data['text'], 2)[1]; ?></p>
            </li>
          <?php endforeach; ?>
        </ul> 
      </div>
    </div>
  </div>
</section>