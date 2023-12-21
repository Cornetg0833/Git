<?php get_header(); ?>

<div class="container TitreSection3 text-center">
        <H2> <b>Connexion</b></h2>
    </div>


<section class="container">
    <div>   
        <div class="fondcon"> 
            <div class="container padco">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Ne partagez pas vos informations personnelles avec autrui</div>
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check tex">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-primary custom-button-sh" href="<?= home_url('/connexion_1');?>">Connexion</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>


<!--<form class="text-center container ">
                <div class="mb-3 container ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                    <div class="mb-3 container">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                    <div class="mb-3 form-check container">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>