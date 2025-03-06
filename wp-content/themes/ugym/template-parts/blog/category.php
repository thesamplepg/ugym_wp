<?php
$categories = get_categories();
array_unshift($categories, (object) ['term_id' => 0, 'name' => 'Все']);
$active_category_id = get_queried_object()->term_id;

$active_styles = 'text-neutral-800 bg-amber-500';
$default_styles = 'text-amber-500 bg-neutral-800';
?>

<ul class="post_categories flex flex-wrap max-w-1/2 gap-y-6 gap-4">
  <?php foreach ($categories as $category): ?>
    <?php if ($category->term_id == 1) {
        continue;
    } ?>
    <li>
      <?php $is_active = $category->term_id == $active_category_id; ?>
      <a href="/ugym/blog?cat=<?php echo $category->term_id; ?>" 
         class="<?php echo $is_active
             ? $active_styles
             : $default_styles; ?> hover:opacity-70 transition-all capitalize shadow-xs px-4 py-2 text-xs font-semibold rounded-full <?php echo $is_active; ?>">
        <?php echo $category->name; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
