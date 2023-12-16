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
        <H2>Formule Hive</h2>
    </div>

<section class="cartemarbot"> 
<div class="container-fluid section-container blanc">
    <div class="row">
        <!-- Image à gauche (col-5) -->
        <div class="col-12 col-md-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banniere.png" alt="Votre Image" class="img-fluid section-image image-half">
        </div>
        <!-- Texte à droite (col-12 col-md-7) -->
        <div class="col-12 col-md-7">
            <div class="container ">
                    <div class="row ">
                            <div class="col-12 ">
                                <p> Grâce à la formule Hive, vous allez pouvoir proposer un cours de sport dans nos 
                                    salles mis à votre disposition.  </p>
                             <button type="button" class="btn btn-warning">Warning</button>
                            </div>
                        <div class="row ">
                            <div class="col-12">
                                <p> Si vous souhaitez participer à un cours, les réservations se feront sur votre compte
                                    Admin que vous recevez lors de l’activation de votre abonnement.</p>
                                <button type="button" class="btn btn-warning">Warning</button>
                            </div>
                        </div>
                    </div>
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
        <div class="row">
            <div class="col-md-4">
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

<div class="container TitreSection text-center">
        <H2>Nos Coach</h2>
    </div>

<section class="espacement">
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="card col coach-card" style="width: 18rem;">
            <div class="card-body">
                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/subhaan-saleem-Jf7hr7ZQzg8-unsplash.jpg" class="card-img-top" alt="coach 1">
                    
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div>
            <div class="card col" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>" class="card-img-top" alt="coach 2">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>" class="card-img-top" alt="coach 3">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col" style="width: 18rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>" class="card-img-top" alt="coach 4">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<img src="<?php echo get_template_directory_uri();?> /assets/img/banniere.png" alt="coach 1">

<!--
<section class="container cartemar">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="card-title">Titre de la carte</h5>
                    <p class="card-text">Contenu de la carte.</p>
                    <a href="#" class="btn btn-primary">Bouton</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="card-title">Titre de la carte</h5>
                    <p class="card-text">Contenu de la carte.</p>
                    <a href="#" class="btn btn-primary">Bouton</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">
                    <h5 class="card-title">Titre de la carte</h5>
                    <p class="card-text">Contenu de la carte.</p>
                    <a href="#" class="btn btn-primary">Bouton</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="hexagon">
                <div class="hex-content">
                    <h4>Prix 1</h4>
                    <button class="btn btn-primary">Acheter</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="hexagon">
                <div class="hex-content">
                    <h4>Prix 2</h4>
                    <button class="btn btn-primary">Acheter</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="hexagon">
                <div class="hex-content">
                    <h4>Prix 3</h4>
                    <button class="btn btn-primary">Acheter</button>
                </div>
            </div>
        </div>
    </div>
</div>

-->

<?php get_footer(); ?>