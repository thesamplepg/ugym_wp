<?php $promos = ['Промо 1', 'Promo 2', 'Promo 3']; ?>

<section class="py-16 bg-slate-100">
  <div class="comtainer mx-auto">
    <div class="py-20 px-10 bg-white rounded-2xl flex justify-center shadow-sm wow animate__animated animate__fadeInUp">
      <div class="w-full lg:w-1/2">
        <h3 class="text-2xl sm:text-3xl text-slate-800 font-bold mb-8 text-center">Получить больше информации</h3>
        <form method="post" action="<?php echo esc_url(
            admin_url('admin-post.php'),
        ); ?>" class="grid grid-cols-1 md:grid-cols-2 gap-5 font-medium">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="name" placeholder="Имя">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="phone" placeholder="Телефон">
          <input type="hidden" name="action" value="handle_contacts_form">
          <select name="promo" class="relative appearance-none col-span-2 px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
            <option selected>Выбрать акцию</option>
            <?php foreach ($promos as $promo): ?>
              <option value="<?php echo $promo; ?>"><?php echo $promo; ?></option>
            <?php endforeach; ?>
          </select>
          <input type="submit" class="md:col-span-2 w-full rounded-full mt-2 font-semibold text-center px-5 py-4 bg-amber-500 text-white" value="Отправить">
        </form>
      </div>
    </div>
  </div>
</section>