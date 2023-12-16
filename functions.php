<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus WordPress

function wpbootstrap_styles_scripts() {
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', false, '1.0.0', true);
  wp_enqueue_script('scripts', get_template_directory_uri().'/js/script.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

// Fonction pour ajouter le support des types MIME pour les vidéos
function ajouter_types_mime_video($mimes) {
  $mimes['mp4'] = 'video/mp4'; // Ajoutez le type MIME pour les fichiers MP4
  $mimes['webm'] = 'video/webm'; // Ajoutez le type MIME pour les fichiers WebM
  $mimes['ogg'] = 'video/ogg'; // Ajoutez le type MIME pour les fichiers Ogg

  return $mimes;
}

// Ajouter le support des types MIME pour les vidéos
add_filter('upload_mimes', 'ajouter_types_mime_video');

