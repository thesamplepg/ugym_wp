<?php
$query_args = [
    'post_type' => 'blog',
    'post_per_page' => 3,
    'order_by' => 'date',
];
$query = new WP_Query($query_args);
if (have_posts()) {
    the_post();
}
function trim_to_words($text, $word_limit = 5)
{
    $words = explode(' ', $text);
    $trimmed_words = array_slice($words, 0, $word_limit);
    return implode(' ', $trimmed_words);
}
?>

<div class="blog-sidebar p-5 py-3 pb-5 bg-neutral-800 rounded-2xl sticky top-[100px]">
  <h3 class="mb-4 font-bold text-base">Актуально</h3>
  <ul class="flex flex-col gap-5">
    <?php if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
      <li>
        <a class="flex gap-3 items-center text-amber-500" href="<?php echo get_the_permalink(); ?>">
          <img class="w-16 h-16 rounded-lg object-cover object-center" src="<?php the_post_thumbnail_url(
              'small',
          ); ?>" alt="post_image">
          <h4 class="text-xs font-semibold w-full">
            <?php echo trim_to_words(get_the_title(), 10); ?>
          </h4>
        </a>
      </li>
    <?php
        endwhile;
    endif; ?>
  </ul>
</div>