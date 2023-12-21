<?php get_header(); ?>


<section class="container-fluid">
    <video id="video-background" autoplay muted loop>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/SalleSport.mp4" type="video/mp4">
        <!-- Ajoutez des sources supplémentaires pour différents formats de vidéo si nécessaire -->
        Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
<!--
    <div id="video-content">
         Contenu supplémentaire peut être ajouté ici -->
      <!--  <h1>SportHive</h1>
        <p>La salle à taille de ruche</p>
    </div> -->
</section>

    <div class="container TitreSection">
        <H2>Formule <b>Hive</b></h2>
    </div>

<section class="cartemarbot"> 
<div class="container-fluid section-container blanc">
    <div class="row">
        <!-- Image à gauche (col-5) -->
        <div class="col-12 col-md-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banniere.png" alt="Votre Image" class="img-fluid section-image image-half borim ">
        </div>
        <!-- Texte à droite (col-12 col-md-7) -->

        <?php
  $formule_hive = new WP_Query([ // je crée une variable $services
    'post_type' => 'formule_hive', // la je précise quel post_type je veux (dans mon cas "formule_hive")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 3, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($formule_hive->have_posts()): ?>
        <div class="col-12 col-md-7">
            <div class="container ">
                    <div class="row container text-hive">
                    <?php while ($formule_hive->have_posts()): $formule_hive->the_post(); ?>
                            <div class=" container ">
                            <div class="row ">
                                <h4><?php the_title(); ?></h4>
                            <div class=" d-flex">
                                <p> <?php the_content(); ?></p>
                                <div class="text-hive-bouton">
                                    <a href="#" class="btn btn-primary custom-button-vh">Hive</a>
                                </div>
                            </div>
                            </div>
                            </div>
                            <?php endwhile; ?>
                    <?php else: ?>
                    
                    <?php endif; ?>
                    </div>
                    
            
        </div>
    </div>
</div>

<div class="container TitreSection text-center">
        <H2>Abonnements</h2>
    </div>

<!-- Carte avec ChatGPT -->

<section>
    <div class="container">
        <div class="row ali">
            <div class="col-md-4 ">
                <div class="card hexagon-card">
                    <div class="card-body">
                        <h3 class="card-title">30€</h3>
                        <p class="card-text">/4 semaines</p>
                        <a href="#" class="btn btn-primary custom-button-sh">Bouton</a>
                    </div>   
                        <div class="inner-shape centrertext alignitem1">
                            <h5 class="fondjaune"> Student </h5>
                            
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres cartes hexagonales ici si nécessaire -->
            <div class="col-md-4">
                <div class="card hexagon-card">
                    <div class="card-body">
                        <h3 class="card-title">35€</h3>
                        <p class="card-text">/4 semaines</p>
                        <a href="#" class="btn btn-primary custom-button-sh">Bouton</a> 
                    </div>
                        <div class="inner-shape centrertext alignitem1">
                            <h5 class="fondjaune"> Student </h5>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hexagon-card">
                    <div class="card-body">
                        <h3 class="card-title">42€</h3>
                        <p class="card-text">/4 semaines</p>
                    
                        <a href="#" class="btn btn-primary custom-button-sh">Bouton</a>
                    </div>
                        <div class="inner-shape centrertext alignitem1">
                            <h5 class="fondjaune"> VIP </h5>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- carouselle -->



<div class="container TitreSection text-end">
        <H2>Nos <b>Coachs</b></h2>
    </div>

    <?php
  $coachs = new WP_Query([ // je crée une variable $formule_hive
    'post_type' => 'coachs', // la je précise quel post_type je veux (dans mon cas "formule_hive")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 10, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($coachs->have_posts()): // ici je vérifie que $formule_hive posède bien mes posts
?>

    <section class="testi">
    <div class="container container-carou">
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-outlined"> Chevron_left</button>
            <div class="image-list">
                <?php while ($coachs->have_posts()): $coachs->the_post(); ?>
                <div>
                <img src="<?php the_post_thumbnail_url(); ?>" class="image-item form-card-img" alt="<?php the_title() ?> | service | <?php echo bloginfo('name'); ?>">
                    <h4 class="text-center"> <?php the_title(); ?> </h4>
                    <div>
                        <p class="textcoachs text-center"> <?php echo get_the_content(); ?> </p>
                    </div>
                </div>
                <?php endwhile; ?> 
            </div>
            <button id="next-slide" class="slide-button material-symbols-outlined"> Chevron_right</button>

        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb">

                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
  <h5>Il semblerait que notre équipe est composé de persone...</h5>
<?php endif; ?>
</section>


<!--formulaire contacte-->
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
  
<a href="#" class="btn btn-primary custom-button-sh">Envoyer</a>
  </form>
</div>
</section>
</div>



<?php get_footer(); ?> 