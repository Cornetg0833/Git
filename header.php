<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>


<nav class="navbar bg-body-tertiary">
  <div class="container">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li>
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_Final.png" alt="SportHive" width="30" height="24">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Disabled</a>
        </li>
    </ul>
    </div>
</nav>
