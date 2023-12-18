<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Raleway:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary nacolor bgcolor">
  <div class="container-fluid">
    <a  href="<?= home_url('/index');?>" class="navbar-brand"><img id="logoheader" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_Final.png" alt="SportHive" width="100%" height="100%">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Abonnements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Contacte</a>
        </li>
      </ul>
      <a  href="<?= home_url('/connexion_1');?>" class="nav-link conex"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_connexion.png" 
              alt="LogoConnexion" width="22px" height="19px">Connexion </a>
    </div>
  </div>
</nav>