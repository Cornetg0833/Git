<?php get_header(); ?>

<section classe=" propos"> 
    <div class="container">
    <h1 class="h1propos">A propos </h1>

    <div class="container d-flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/homme_femme.png" alt="img" height="200px" class="imgpropos">
        <p><b>La salle de sport SportHive</b> a été créée en janvier 2023 par Guillaume 
            Cornet et Amira Samaali. 
            <br>L’idée d’une salle de sport où l’ont peu découvrir de nouvelles
            activités sportives chaque mois grâce aux différents coachs sportif 
            et à la <b>Formule Hive</b> qui permet aux amateurs ou aux professionnels 
            à proposer un cours de sport aux personnes ayant un abonnement.
        </p>       
    </div>
    </div>
    <div class="text-center backgrounpropos container-fluid">
        <div class="container text-center">
    <img class="text-center" id="logofooter" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Sport_Hive_blanc.png" alt="SportHive">
        <p>Le nom inventé par <b>Guillaume Cornet et Amira Samaali</b>, donne l’idée d’une salle de sport privé, familial et unie comme une ruche d’abeille. 
            « Hive » qui veut dire ruche en langue anglaise, les créateurs ont eu l’idée d’unir la couleur jaune et la signification du mot pour créer un 
            projet qui se dit familial et uni. Tout le monde est considéré et apprécié dans la salle de sport, les coachs toujours disponibles pour aider nos 
            adhérents ou leur proposer des coachings spécifiques pour chacun. </p>
</div>
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
  
<a href="#" class="btn btn-primary custom-button-sh">Envoyer</a>
  </form>
</div>
</section>
</div>
    
</div>


<?php get_footer(); ?> 