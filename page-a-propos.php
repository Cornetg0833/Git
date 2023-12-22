<?php get_header(); ?>

<section classe=" propos"> 
<?php
  $Apropos = new WP_Query([ // je crée une variable $Apropos
    'post_type' => 'A propos', // la je précise quel post_type je veux (dans mon cas "Apropos")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 3, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($Apropos->have_posts()): // ici je vérifie que $Apropos posède bien mes posts
?>
    <div class="container">
    <?php 
      while ($Apropos->have_posts()): // la je lance ma boucle sur mes posts contenu dans Apropos
      $Apropos->the_post(); // la récupère mon post
    ?>
    <h1 class="h1propos"><?php the_title(); ?> </h1>

    <div class="container d-flex">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> | A propos | <?php echo bloginfo('name'); ?>" height="200px" class="imgpropos">
        <p><?php the_content(); ?>
        </p>       
    </div>
    </div>
    <?php endwhile; ?>
    <?php else: ?>
<?php endif; ?>



    <div class="text-center backgrounpropos container-fluid">
        <?php $SportHive = new WP_Query([ // je crée une variable $SportHive
            'post_type' => 'Sport Hive', // la je précise quel post_type je veux (dans mon cas "SportHive")
            'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
            'limit' => 3, // dans mon cas je n'en ai besoin que de trois
            'orderby' => 'date', // je les trie par date 
            'date' => true // je récupéère ma date
             ]);

            if ($SportHive->have_posts()): ?>
        <div class="container text-center">
        <?php while ($SportHive->have_posts()): // la je lance ma boucle sur mes posts contenu dans SportHive
            $SportHive->the_post(); ?>
            <img class="text-center" id="logofooter" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> | Sport Hive | <?php echo bloginfo('name'); ?>">
                <p><?php the_content(); ?></p>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
    <?php endif; ?>
    </div>
    

<div class="container">
    <h2 class="h2propos">La vidéo</h2>
    <div class="d-flex">

    <video src="<?php echo get_template_directory_uri(); ?>/assets/img/SalleSport.mp4" alt="video" height="200px" autoplay muted loo class="proposvideo"></video>
    <p>Une vidéo a été créée en octobre 2023 par la <b>société GCAS</b>. 
    Le projet a été réalisé dans le but d’avoir une idée de ce que ressemble une salle de sport chez SportHive, de pouvoir observer les salles que nous proposons pour la formule Hive et de voir le matériel disponible pour nos adhérents.</p>
</div>
    </div>

    <div>
</section>
    <div>
    <div id="section-cible">
    <section class="container-fluid margincontacte divconta"> 
    <h1 class="texth1">Des <b>questions?</b></h1>
<div class="container d-flex justify-content-center">
  <form action="/action_page.php" class="minimalw">
    <label for="fname">Nom</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Prénom</label>
    <input type="text" id="lname" name="lastname">

      <label for="lname">Adresse mail</label>
    <input type="text" id="lname" name="mail" >
    
    <DIV class="test divconta">
       <label for="lname">Votre message</label>
      </DIV>
<textarea cols="57" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message"></textarea></span> </label>
</p>
  
<a href="#" class="btn btn-primary custom-button-kh">Envoyer</a>
  </form>
</div>
</section>
</div>
    
</div>


<?php get_footer(); ?> 