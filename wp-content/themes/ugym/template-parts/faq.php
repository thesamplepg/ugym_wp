<section class="py-16">
  <div class="comtainer mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-white">Часто задаваемы вопросы</h2>
    <div class="mt-10 flex flex-wrap justify-center lg:flex-nowrap gap-16 lg:gap-20">
      <ul class="faq-questions w-full lg:w-1/2 flex flex-col gap-5">
        <?php foreach ($args as $faq): ?>
        <li class="wow animate__animated animate__fadeInUp text-base bg-neutral-800 group cursor-pointer rounded-xl shadow-sm overflow-hidden">
          <header class="relative z-20 flex items-center justify-between gap-4 bg-neutral-800 py-4 px-6 text-white rounded-xl shadow-sm font-semibold">
            <?php echo $faq['faq_question']; ?>
            <span class="text-3xl group-hover:rotate-45 transition-all">
              <i class="fa-solid fa-circle-plus text-teal-600"></i>
            </span>
          </header>
          <article class="hidden faq-answer relative z-10 py-4 px-6 text-sm bg-neutral-800">
            <?php echo $faq['faq_answer']; ?>
          </article>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="w-full lg:w-1/2 wow animate__animated animate__fadeInUp">
        <h3 class="text-white text-xl md:text-2xl font-semibold">Остались еще вопросы ?</h3>
        <p class="text-white mt-2 mb-8 max-w-96">Напишите нам ваши вопросы, мы потстараемся ответить в кратчайшие сроки.</p>
        <section class="flex gap-5">
          <a href="#" class="text-white flex items-center gap-2 bg-teal-600 py-3 px-8 font-semibold rounded-full">WhatsApp <i class="fa-brands fa-whatsapp"></i></a>
          <a href="#" class="text-white flex items-center gap-2 bg-teal-600 py-3 px-8 font-semibold rounded-full">Telegram <i class="fa-brands fa-telegram"></i></a>
        </section>
      </div>
    </div>
  </>
</section>