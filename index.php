<?php
session_start();
?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>David Perez-Acimovic - Développeur Web</title>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar">

    <header>

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-target=".navbar-collapse" class="navbar-toggle" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a href="#accueil"class="navbar-brand" href="#page-top">Accueil</a>
          </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="hidden"><a href="#page-top"></a></li>
                <li><a href="#a_propos">A propos</a></li>
                <li><a href="#aides">Aides financières</a></li>
                <li><a href="#projets">Projets</a></li>
              </ul>
            </div>
        </div>
      </nav>

    </header>

    <section>
      
      <div class="jumbotron row" id="accueil">
        <div class="container">

          <! Affichage des messages d'erreur ou de success du formulaire >

          <?php if (array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger col-sm-offset-2 col-sm-8 col-sm-offset-2 glyphicon glyphicon-warning-sign" data-toggle="popover">
              Votre message n'est pas parti car il contient une ou plusieurs erreurs :</br></br>
                <?= implode('<br>', $_SESSION['errors']); ?>
              </div>
            <?php endif; ?>

          <?php if (array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success col-sm-offset-1 col-sm-10 glyphicon glyphicon-ok" data-toggle="popover">
              Votre message a bien été envoyé.
            </div>
          <?php endif; ?>

          <h1>Votre futur développeur</h1>
            <p><a href="images/photo_profil.jpg"><img src="images/photo_profil_mini.jpg" class="img-circle" alt="David Perez-Acimovic" id="img-profil" title="Agrandir"/></a></p>
              <h3>David Perez-Acimovic</h3>
            
            <p>
              <a href="https://fr.linkedin.com/in/davidperezacimovic" target="_blanck"><img src="images/linkedin.png" alt"linkedin" title="linkedin" id="linkedin"/></a>
              <a href="https://fr.viadeo.com/fr/profile/david.perez-acimovic" target="_blanck"><img src="images/viadeo.png" alt"viadeo" title="viadeo"id="viadeo"/></a>
              <a href="http://www.doyoubuzz.com/david-perez-acimovic" target="_blanck"><img src="images/doyoubuzz.png" alt"doyoubuzz" title="doyoubuzz" id="doyoubuzz"/></a>
              <a href="https://github.com/pzdavid" target="_blanck"><img src="images/github.png" alt"linkedin" title="github" id="github"/></a>
            </p>

            <!Formulaire dans fenêtre modale>

            <button data-toggle="modal" href="#infos" class="btn btn-info btn-lg">Contact</button>
              <div class="modal fade" id="infos">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <p>David Perez-Acimovic</br>
                      64600 Anglet</br>
                      06 88 65 39 43</p>
                    </div>

                      <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="mail.php">

                      <div class="form-group">
                        <label for="mail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input required type="email" class="form-control" id="mail" name="mail" placeholder="Email" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ''; ?>" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nom" class="col-sm-2 control-label">Objet</label>
                        <div class="col-sm-10">
                          <input required type="text" class="form-control" id="objet" name="objet" placeholder="Objet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                          <textarea required id="textarea" type="textarea" rows="4" class="form-control" name="message" placeholder="Message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                        </div>
                      </div>
 
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Valider</button>
                          <button type="close" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="jumbotron row" id="a_propos">
        <div class="container">
         <div class=" col-lg-offset-1 col-lg-6">

            <h2>A propos</h2>

            <p> Bonjour et bienvenue sur mon site. Je m'appelle David et je suis à la recherche d'une entreprise pour un contrat de professionnalisation. 
            J'ai démarré ma reconversion professionnelle avec un BTS SIO lors duquel je me suis découvert une passion pour le développement. 
            Je souhaite continuer ma formation en licence pro <em>Métiers du numériques : conception, rédaction, réalisation web</em> à l'IUT Montaury d'Anglet. 
            Cette licence propose de plus une spécialisation <em>développements d'application distribués orientés Web</em>.</br></br>

            <a href="http://www.iutbayonne.univ-pau.fr/licences-pro/multimedia/developpement-dapplications-web.html" target="_blanck"class="btn btn-info" role="button">Licence pro</a></br></br>

            Agé de 34 ans et ayant une maturité professionnelle, je privilégie l'alternance car c'est pour moi la meilleure façon d'allier connaissances théoriques et bonnes pratiques professionnelles. 
            </br></br>

            Ma bonne connaissance du monde de l'entreprise, mon esprit d'équipe mais aussi ma capacité de mener un projet en toute autonomie 
            me permettront de devenir rapidement opérationnel.</br></br>

            En attendant, je continue à me former en suivant des mooc et cours sur internet (Openclassrooms, Grafikart...) et à pratiquer à travers différents projets (sites internet et applications web). </br></br>
            Afin de découvrir mon parcours et mes compétences, je vous propose de télécharger mon CV.</br></br>

            <a href="CV_david_perez_acimovic.pdf" target="_blanck"class="btn btn-info" role="button">Mon CV</a></p></br>

            <p>Pour toutes informations supplémentaires, vous pouvez me contacter par <a href="mailto:contact@david-perezacimovic.fr">mail</a> ou en utilisant
            le formulaire de <a href="index.php#accueil">contact</a>.</p>
            
        </div>

        <div class="col-lg-offset-1 col-lg-3" id="aides">
           </br></br>
           
            <h2>Aides financières</h2>

            <center><img src="images/money.png" id="bourse"/></center>
            <p>Afin de reduire le montant de votre investissement, vous pouvez bénéficier d'aides cumulées de 4000€ pour l'embauche en contrat de professionnalisation des + de 26 ans.
            Vous trouverez les détails si dessous  :</br></br>

            - l'AFE (aide forfaitaire à l'employeur) d'un montant de 2 000 €.</br>
            </br><a href="http://www.pole-emploi.fr/employeur/beneficiez-de-l-aide-forfaitaire-a-l-employeur-de-pole-emploi-pour-l-embauche-d-un-demandeur-d-emploi-inscrit-de-26-ans-ou-plus-@/article.jspz?id=60964" 
            class="btn btn-info" target="_blanck" role="button">En savoir plus</a></br></br>

            - les aides à l'embauche 2016 d'un montant de 2 000 €.</br>
            </br> <a href="https://www.service-public.fr/professionnels-entreprises/actualites/A10338"class="btn btn-info" target="_blanck" role="button">En savoir plus</a></p></br></br>
            </br></br></p>

          </div>
        </div>
      </div>


      <div class="jumbotron row" id="projets">
        <div class="container">

          <div  class="col-lg-3 hidden-xs hidden-sm hidden-md">
            <img src="images/travail.jpg" id="travail"/>
          </div>

            <div class="col-lg-offset-2 col-lg-6">

            <h2>Projets</h2>
            <center><img src="images/travail_mini.jpg" class="hidden-lg"/></center></br>
            <p>Je travaille actuellement sur différents projets personnels, ce qui me permet de pratiquer tout en continuant à apprendre.</br></br>

            <u>Création de sites web :</u></br></br>

              - newsletter pour ce site,</br>
              - création d'un autre site pour un groupe de musique avec newsletter et forum privé pour que les musiciens puissent échanger entre eux.</br></br>

            <u>Application web :</u></br></br>

            - générateur de playlist qui déterminera une playlist aléatoire en fonction du temps à jouer,</br>
            - générateur de gammes qui déterminera sur quelles gammes improviser en fonction des accords entrés.</br></br>

            Pour tout cela, j'utilise HTML, CSS et Bootstrap pour la mise en page et PHP/MySql pour les newsletter, le forum et les applications web. 
            J'utilise en plus quelques scripts javascript/JQuery.</br></br>

            Vous trouverez les codes sources de ces projets ainsi que de ce site sur mon compte <a href="https://github.com/pzdavid" target="_blanck">
            github</a>.
            </p>
            

          </div>
        </div>
      </div> 


    </section>
      
      <script src="bootstrap/js/jquery.min.js"></script> 
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="script.js"></script>

  </body>
</html>

<!Nettoyage des sessions>

<?php
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
  unset($_SESSION['inputs']);
?>