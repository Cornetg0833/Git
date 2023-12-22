<?php get_header(); ?>

<section>
    <div class="row">
        <div class="container-fluid col-4 menujaune text-center">
            <ul class="nav flex-column ">
                <li class="profilliste "> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_profil.png" alt="toz"> 
                </li>
                <li class="color-list"><h3> <b>Pierre Carnier</b></h3></li>
                <li class="nav-item interliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container" aria-current="page" href="<?= home_url('/connexion_1');?>">Mon profil</a>
                </li>
                <li class="nav-item interliste ">
                    <a class="nav-link active btn btn-primary custom-button-noir container" aria-current="page" href="<?= home_url('/connexion-2');?>">Mes cours</a>
                </li>
                <li class="nav-item interliste findeliste ">
                    <a class="nav-link btn btn-primary custom-button-noir container" href="<?= home_url('/connexion-3');?>">Calendrier</a>
                </li>
            </ul>
        </div>
        <div class="col-8 container">
            <div class="paddinginfo">
                    <h3>Cours auquels je participe</h3>
                <div class="row fondnoir container">
                    <div class="col-2 offset-md-1">
                        <div class="cours-card d-flex">
                        <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursblanc ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card d-flex">
                        <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursblanc ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card d-flex">
                        <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursblanc ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card d-flex">
                        <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursblanc ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card d-flex">
                            <div class="card-button-plus d-flex">
                                <a href="#" class="boutonplus2"><img class="plus" src="<?php echo get_template_directory_uri(); ?>/assets/img/plus_blanc.png" alt="plus"></a>
                            </div>
                        </div>
                        <p class="coursblanc ">Ajouter des cours</p>
                    </div>
                </div>
            </div>
            <div class="paddinginfo">
                    <h3>Cours que je donne</h3>
                <div class="row container fondtrans">
                    <div class="col-2 offset-md-1">
                        <div class="cours-card-2 d-flex">
                        <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursnoir ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card-2 d-flex">
                            <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursnoir ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card-2 d-flex">
                            <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursnoir ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card-2 d-flex">
                            <img src="#" alt="">
                                <div class="card-button-b">
                                    <a href="#" class="btn btn-primary custom-button-b">Annuler</a>
                                </div>
                        </div>
                        <p class="coursnoir ">tatata</p>
                    </div>
                    <div class="col-2">
                        <div class="cours-card-2 d-flex">
                            <div class="card-button-plus d-flex">
                                <a href="#" class="boutonplus"><img class="plus" src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.png" alt="plus"></a>
                            </div>
                        </div>
                        <p class="coursnoir ">Ajouter des cours</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>