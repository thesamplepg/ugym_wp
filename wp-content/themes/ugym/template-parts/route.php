<section>
  <ul class="flex gap-2 text-xs">

    <li class="text-amber-500 flex items-center gap-2">
     <a href="<?php echo home_url(); ?>">Главная</a>
     <svg class="size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
     </svg>
    </li> 

    <?php for ($i = 0; $i < count($args); $i++) { ?>
      
    <li class="text-amber-500 flex items-center gap-2">
      <a href="<?php echo home_url() . $args[$i][1]; ?>"><?php echo $args[
    $i
][0]; ?></a>

      <?php if ($i < count($args) - 1): ?>
        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
      <?php endif; ?>
      
    </li>
    
    <?php } ?>
  </ul>  
</section>