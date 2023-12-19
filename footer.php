<?php wp_footer(); ?>
</body>
<footer class="bg_footer">
    <section class="container-fuid bg_footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-5 ms-auto order-1 contenuf respfooterfals align-self-center">
                <p class="ft_color">78 Avenue de Journole 5001  Namur, Belgique </p>
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.4719130116287!2d4.36516067570676!3d50.85946265783115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c370c43d6195%3A0x94b0e4b9ad97de02!2sHaute%20%C3%89cole%20ISFSC!5e0!3m2!1sfr!2sbe!4v1702468516125!5m2!1sfr!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-3 offset-1 order-2 contenuf respfooterfals align-self-center">
                <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link " href="#">A propos</a></li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#">Cours</a> </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#">Abonnements</a> </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#">Contacte</a></li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#">Connexion</a> </li>
                    </ul>
                </div>
                <div class="col-3 order-3 contenuf respfooterfals align-self-center">
                    <img class="logofooter d-flex justify-content-start" id="logoheader" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_blanc.png" alt="SportHive">
                    <h5>Restez actif</h5>
                    <p>Nous vous enverrons des newsletters de notre blogs et les potentielles changements dans notre salle.</p>
                    <div class="input-group mb-3 gap-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn " type="button" id="button-addon2"><img class="" id="logo_envoyer" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_envoyer.png" alt="envoyer"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fuid bg_footer respfootertrue">
        <div class="container">
            <div class="row ">
                <div class="order-3 contenuf d-flex flex-column mb-3">
                <p class="ft_color text-center">78 Avenue de Journole 5001  Namur, Belgique </p>
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.4719130116287!2d4.36516067570676!3d50.85946265783115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c370c43d6195%3A0x94b0e4b9ad97de02!2sHaute%20%C3%89cole%20ISFSC!5e0!3m2!1sfr!2sbe!4v1702468516125!5m2!1sfr!2sbe" width="100%" height="70%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-10 offset-1 order-2 contenuf d-flex justify-content-center ">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link text-center" href="#">A propos</a></li>
                        <li class="nav-item ">
                            <a class="nav-link text-center" href="#">Cours</a> </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center" href="#">Abonnements</a> </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center" href="#">Contacte</a></li>
                        <li class="nav-item ">
                            <a class="nav-link text-center" href="<?= home_url('/connexion_1');?>">Connexion</a> </li>
                    </ul>
                </div>
                <div class="d-flex flex-column mb-3 justify-content-center ">
                    <div class="p-2 "><img class="logofooter " id="logofooter" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_blanc.png" alt="SportHive">
                     </div>
                    <div class="p-2"><h5 class="text-center">Restez actif</h5>
                     </div>
                    <div class="p-2"><p class="text-center">Nous vous enverrons des newsletters de notre blogs et les potentielles changements dans notre salle.</p>
                     </div>
                    <div class="p-2 text-center boutonenv"><input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <br>
                        <<button class="btn " type="button" id="button-addon2"><img class="" id="logo_envoyer" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_envoyer.png" alt="envoyer"></button>
                    </div>
                     </div>      
                    </div>
                
                </div>
            </div>
        </div>

    </section>
    <section class=" border-top border-warning container-fluid">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-6 me-auto">
                    <nav class="nav container">
                        <a class="nav-link basfooter link-light fw-light" href="#">copyright </a>
                        <a class="nav-link basfooter link-light fw-light" href="#">Politique de confidentialité </a>
                        <a class="nav-link basfooter link-light fw-light" href="#">Cookies </a>
                        <a class="nav-link basfooter link-light fw-light" href="<?= home_url('/conditions-general');?>">Conditions générales </a>
                    </nav>
                </div>
                <div class="col-3 text-end">
                
                            <a class="" href="#"><img class="imgtaille" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_fb.png" alt="fb"></a>
                            <a class="" href="#"><img class="imgtaille" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_insta.png" alt="fb"></a>
                            <a class="" href="#"><img class="imgtaille" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_mail.png" alt="fb"></a>
        
                </div>
            </div>
        </div>
    </section>
</footer>
</html>
