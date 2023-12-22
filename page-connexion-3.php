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
                    <a class="nav-link btn btn-primary custom-button-noir container"  href="<?= home_url('/connexion_1');?>">Mon profil</a>
                </li>
                <li class="nav-item interliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container" href="<?= home_url('/connexion-2');?>">Mes cours</a>
                </li>
                <li class="nav-item interliste findeliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container active" href="#">Calendrier</a>
                </li>
            </ul>
        </div>
        <div class="col-8 container">
            <div class="paddinginfo">
                <h3>Calendrier</h3>
            </div>
            <div class="container">

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>