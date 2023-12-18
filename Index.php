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
                                    <a href="#" class="btn btn-primary custom-button-vh">Bouton</a>
                            </div>
                        <div class="row ">
                            <div class="col-12">
                                <p> Si vous souhaitez participer à un cours, les réservations se feront sur votre compte
                                    Admin que vous recevez lors de l’activation de votre abonnement.</p>
                                    <a href="#" class="btn btn-primary custom-button-vh">Bouton</a>
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
        <H2>Nos Coachs</h2>
    </div>

<section class="">
    <div class="container text-center sectionpad">
        <div class="row align-items-start">
        <div class="card col " style="width: 18rem;">
            <div class="coach-card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coach1.jpg" alt="Votre Image" class=" img-fluid section-image icard-img-top">
                    </div>
                    <div class="card-body">
                        <h4 class="card-text">name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col " style="width: 18rem;">
            <div class="coach-card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coach1.jpg" alt="Votre Image" class=" img-fluid section-image icard-img-top">
                    </div>
                    <div class="card-body">
                    <h4 class="card-text">name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card col " style="width: 18rem;">
            <div class="coach-card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coach1.jpg" alt="Votre Image" class=" img-fluid section-image icard-img-top">
                    </div>
                    <div class="card-body">
                    <h4 class="card-text">name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <<div class="card col " style="width: 18rem;">
            <div class="coach-card ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coach1.jpg" alt="Votre Image" class=" img-fluid section-image icard-img-top">
                    </div>
                    <div class="card-body">
                    <h4 class="card-text">name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--formulaire contacte-->
<section class="container-fluid">
<div class="divconta">
  <h1 class="texth1">Des <b>questions?</b></h1>
  <form action="/action_page.php">
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
  
    <input type="submit" value="Envoyer">
  </form>
</div>
</section>


<?php get_footer(); ?>