<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>


    <!-- <div class="container sticky-top col-10 align-self-center"> -->
  <nav class="navbar bg-secondary ">
    <div class="container container-fluid sticky-top col-10 align-self-cente">
      <a class="navbar-brand colorfont" href="#">A propos</a>
      <a class="navbar-brand colorfont" href="#">Cours</a>
      <a class="navbar-brand colorfont" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_Final.png" alt="SportHive" width="100%" height="100%">
            </a>
      <a class="navbar-brand colorfont" href="#">Abonnement</a>
      <a class="navbar-brand colorfont" href="#">Contact</a>
    </div>
    <div class="connexion d-flex justify-content-end ">
        <a class="nav-link colorfont" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_connexion.png" 
            alt="LogoConnexion" width="22px" height="19px">Connexion </a>
    </div>
  </nav>
  
<!-- </div> -->