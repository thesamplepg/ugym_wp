<section class="py-16">
  <div class="comtainer mx-auto">
    <div class="py-20 px-10 bg-neutral-800 rounded-2xl flex justify-center shadow-sm wow animate__animated animate__fadeInUp">
      <div class="w-full lg:w-1/2">
        <h3 class="text-2xl sm:text-3xl font-bold mb-8 text-center">Получить больше информации</h3>
        <form method="post" action="<?php echo esc_url(
            admin_url('admin-post.php'),
        ); ?>" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-neutral-800 font-medium">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="name" placeholder="Имя">
          <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="phone" placeholder="Телефон">
          <input type="hidden" name="action" value="handle_contacts_form">
          <input type="submit" class="md:col-span-2 w-full cursor-pointer rounded-full mt-2 font-semibold text-center px-5 py-4 bg-amber-500 text-white" value="Отправить">
        </form>
      </div>
    </div>
  </div>
</section>