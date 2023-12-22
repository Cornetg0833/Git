<?php get_header(); ?>
<section class="">
    <section class="cartemarbot container-fluid"> 
        <div class="row">
            <div class="col-6 ">
                <div class="container margehive">
                    <h3 class="margehivetitre">Formule <b>Hive</b></h3>
                    <p>Grâce à la <b>formule Hive</b>, vous allez pouvoir proposer un cours de 
                        sport dans nos salles mis à votre disposition.  
        
                        <br><b>Si vous souhaitez participer à un cours</b>, les réservations se feront sur
                        votre compte Admin que vous recevez lors de l’activation de votre 
                        abonnement.
        
                        <br>Vous trouverez ci-dessous <b>le calendrier</b> avec les différents cours de 
                        sport proposé du mois. Si vous souhaitez proposer un cours ou 
                        réserver un cours, veuillez vous connecter sur votre compte.
                    </p>
                        <div class="text-center">
                            <a class="btn btn-primary custom-button-sh margeboutonhive" href="<?= home_url('/#');?>">Participer</a>
                            <a class="btn btn-primary custom-button-sh margeboutonhive" href="<?= home_url('/#');?>">Proposer </a> 
                        </div>
                </div>
            </div>
            <div class="col-6 ">
                <img class="img-fluid mt-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/baniere_jaune.png" alt="" >
            </div>
        </div>  
    </section>

    <section class="container">
        <div class="container TitreSection">
            <H2>Le <b>Calendrier</b></h2>
        </div>

        <div class="workinprogress text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Work in progress.png" alt="" class="imgwork">
        </div>
    </section>

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
<?php get_footer(); ?>