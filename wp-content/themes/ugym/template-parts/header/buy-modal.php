<div id="modal-buy" class="hidden flex items-center justify-center fixed z-50 top-0 left-0 w-dvw h-dvh bg-black/70">
  <section class="modal_window relative flex flex-col md:flex-row gap-8 md:gap-12 lg:max-w-[800px] max-h-[65vh] md:max-h-[450px] overflow-hidden bg-neutral-800 shadow p-10 rounded-2xl animate__animated animate__fadeInDown animate__faster">
    <span class="modal_close-btn absolute top-2 right-5 text-amber-500 text-xl cursor-pointer">
      <i class="fa-solid fa-xmark"></i>
    </span>
    <div class="w-full">
      <h3 class="form-title text-2xl sm:text-3xl font-bold mb-8 text-center">Оставить заявку</h3>
      <form method="post" action="<?php echo esc_url(
          admin_url('admin-post.php'),
      ); ?>" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-neutral-800 font-medium">
        <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="name" placeholder="Имя">
        <input type="text" class="w-full px-5 py-4 bg-gray-200 rounded-full border border-white hover:bg-gray-100 focus:border-gray-200" name="phone" placeholder="Телефон">
        <input type="text" class="hidden" id="input-data-tarrif" name="tarrif" value="">
        <input type="text" class="hidden" id="input-data-club" name="club" value="">
        <input type="text" class="hidden" id="input-data-partner" name="partner" value="">
        <input type="hidden" class="hidden" name="action" value="handle_contacts_form">
        <input type="submit" class="cursor-pointer md:col-span-2 w-full rounded-full mt-2 font-semibold text-center px-5 py-4 bg-amber-500 text-white" value="Отправить">
      </form>
    </div>
  </section>
</div> 