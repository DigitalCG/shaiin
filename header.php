<!DOCTYPE html>
<html lang="heb">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo('name');?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_directory')?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php bloginfo('template_directory')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_directory')?>/css/agency.css" rel="stylesheet">

</head>

<body id="page-top" dir="rtl">

  <!-- Navigation -->




  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Shaiin</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

<div class="collapse navbar-collapse" id="navbarResponsive">

<?php wp_nav_menu( array(
          'theme_location'  => ‘Menu1’,
          'menu'            => '',
          'container'       => 'ul',
          'container_class' => 'nav-link js-scroll-trigger',
          'container_id'    => 'navbar-nav text-uppercase ml-auto',
          'menu_class'      => '',
          'menu_id'         => 'navbar-nav text-uppercase ml-auto',
        ) );?>
        
         <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">מוצרי ביטוח ופיננסים</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">ביטוח הנסיעות לחו"ל</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">דרך ארץ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">מי אנחנו</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">צרו קשר</a>
          </li>
        </ul> -->
      </div> 
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" ><?php bloginfo('name');?></div>
        <div class="intro-heading"><?php bloginfo('description'); ?></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>