<?php get_header(); ?>

<section>
    <div class="row">
        <div class="container-fluid col-4 menujaune text-center">
            <ul class="nav flex-column ">
                <li class="profilliste "> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_profil.png" alt="toz"> 
                </li>
                <li class="color-list"><h3> <b>Pierre Carnier </b></h3></li>
                <li class="nav-item interliste ">
                    <a class="nav-link active btn btn-primary custom-button-noir container" aria-current="page" href="#">Mon profil</a>
                </li>
                <li class="nav-item interliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container" href="<?= home_url('/connexion-2');?>">Mes cours</a>
                </li>
                <li class="nav-item interliste findeliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container" href="<?= home_url('/connexion-3');?>">Calendrier</a>
                </li>
            </ul>
        </div>
        <div class="col-8 container">
            <div class="paddinginfo">
                <h3>Coordonées</h3>
                <div class="row fondnoir container">
                    <div class="col-3 offset-md-1">
                        <ul class="">
                            <li> Carnier </li>
                            <li> Pierre </li>
                            <li> 27ans </li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul class="">
                            <li> Pierre.Carnier@gmail.com </li>
                            <li> 0456/78.90.12 </li>
                            <li> Avenu de la chaudière, 32, 5001, Namure </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="paddinginfo">
                <h3>Abonnement</h3>
                <div class="container container-abo">
                <div class="hexagon-card-2 text-center text-hexa centered-abo">
                    <div class="">
                        <h3 class="">30€</h3>
                        <p class="">/4 semaines</p>
                    </div>   
                        <div class="d-flex text-center inner-shape-2 centrertext alignitem1">
                            <h5 class="fondjaune"> Student </h5>
                        </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>