<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UGym</title>
  <meta name="description" content="Крупнейшая в Астане сеть фитнес-центров Underground GYM. 12 филиалов, финские сауны, занятия по йоге и стретчингу.">
  <meta name="keywords" content="фитнес, тренировки, астана, тренер, спорт">
  <meta name="author" content="Underground Gym">
  <meta property="og:title" content="Underground GYM — Фитнес-клубы в Астане">
  <meta property="og:description" content="Тренировки, сауны, йога и стретчинг. 12 филиалов в Астане. Запишитесь на бесплатное занятие!">
  <meta property="og:image" content="https://ugym.biz.kg/wp-content/uploads/2025/01/promo-image.jpg">
  <meta property="og:url" content="https://ugym.kz">
  <meta property="og:type" content="website">

  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></noscript>

  <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>

  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></noscript>

  <script src="https://cdn.tailwindcss.com"></script>
  <?php wp_head(); ?>
</head>
<body class="text-sm overflow-x-hidden bg-neutral-900 text-white">
  
  <?php $phone = get_field('phone', get_main_page_id()); ?>

  <!-- Header -->

  <?php get_template_part('template-parts/header/buy-modal'); ?> 
  <?php get_template_part('template-parts/header/form-success-popup'); ?>

  <header class="main-header w-full">

    <!-- Main menu -->

    <?php get_template_part('template-parts/header/main-menu'); ?> 
    
    <!-- Mobile menu -->

    <?php get_template_part('template-parts/header/mobile-menu'); ?> 

  </header>