<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boujmil réservation | Trouvez des offres incroyables sur Dawya</title>
    <link rel="stylesheet" href="../Front-end-tools/bootstarp/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="sweetalert.min.js"></script>
</head>
<body>
  <nav class="nav">
    <div class="container py-2">
            <div class="logo">
                <img src="../Front-end-tools/dawya logo png.png" alt="">
            </div>
            <div class="links">
                <a href="">A propos</a>
                <a href="">BOUJMIL</a>
                <a href="">Activités</a>
                <a href="">Contact</a>
            </div>
    </div>
</nav> 
<div class="pc-nav container">
    <div class="logo log">
        <img src="../Front-end-tools/dawya logo png.png" alt="">
    </div>
    <i class="fa-solid fa-bars icon"></i>
</div>
<div class="mobile-nav">
        <a href="">A propos</a>
        <a href="">BOUJMIL</a>
        <a href="">Activités</a>
        <a href="">Contact</a>
</div>

    <section class="banner">
        <div class="container con pt-5">
            <div class="row cont g-0">
                <div class="col-md-5">
                    <img src="../Front-end-tools/5TT.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="col-md-7 wrapper">
                    <form class="form-reserve" method="POST"  action="https://sheetdb.io/api/v1/fx60folkpzv9p" id="sheetdb-form" onsubmit="return submitForm(this);">
                        <h3 class="pt-5 pb-3 text text-center" style="font-family: 'Lemon/Milk', sans-serif;">Réservation</h3>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Prénom" class="form-control shadow-none" name="data[Prénom]" maxlength="64" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Nom" class="form-control shadow-none" name="data[Nom]" maxlength="64" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="email" placeholder="Adresse e-mail" class="form-control shadow-none" name="data[email]" maxlength="64" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Confirmer adresse e-mail" class="form-control shadow-none" name="data[emailConfirmation]" maxlength="64" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="tel" placeholder="Mobile" class="form-control shadow-none" name="data[Mobile]" maxlength="60" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Âge" class="form-control shadow-none" name="data[Âge]" maxlength="60" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Ville" class="form-control shadow-none" name="data[Ville]" maxlength="60" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Pays" class="form-control shadow-none" name="data[Pays]"  maxlength="60" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="lab" for="état" style="cursor: pointer;">
                                <input class="rad" type="radio" name="data[État]" id="état" value="Seul(e)" required>&nbsp;
                                Seul(e)
                            </label>
                            <label for="état0" style="cursor: pointer;">
                                <input class="rad" type="radio" name="data[État]" value="Un couple" id="état0">&nbsp;
                                Un couple
                            </label>
                            <label for="état1" style="cursor: pointer;">
                                <input class="rad1" type="radio" name="data[État]" value="En famille" id="état1">&nbsp;
                                En famille
                            </label>
                            <label for="état2" style="cursor: pointer;">
                                <input class="rad0" type="radio" name="data[État]" value="Entre amis" id="état2" required>&nbsp;
                                Entre amis
                            </label>
                            <label for="état3" style="cursor: pointer;">
                                <input class="rad0" type="radio" name="data[État]" value="En groupe" id="état3">&nbsp;
                                En groupe
                            </label>
                            <label for="état4" style="cursor: pointer;">
                                <input class="rad1" type="radio" name="data[État]" value="Une Entreprise" id="état4">&nbsp;
                                Une Entreprise
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="number" placeholder="Nombre d’adultes" min="1" class="form-control shadow-none" name="data[Nombre d’adultes]"  required>  
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Nombre d’enfants (-12 ans)" min="1" class="form-control shadow-none" name="data[Nombre d’enfants]" required> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gx-5">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Date de départ" onfocus="(this.type='date')" class="form-control shadow-none" name="data[Date de départ]" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Date de fin" onfocus="(this.type='date')" class="form-control shadow-none" name="data[Date de fin]" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-seck">
                            <select id="sel" name="data[Durée souhaitées]">
                                <option selected disabled class="opt">Durée souhaitées</option>
                                <option class="opt" value="matin">Matin</option>
                                <option class="opt" value="apres midi">Après midi</option>
                                <option class="opt" value="journee complete">Journée complète</option>
                                <option class="opt" value="2 jours">2 jours</option>
                            </select>
                            <br>
                            <br>
                            <div class="multiselect">
                                <div class="selectBox" onclick="showCheckboxes()">
                                  <select id="seck">
                                    <option>Sélectionner type(s) d’activité(s) souhaitées</option>
                                  </select>
                                  <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                  <label for="one">
                                    <input type="checkbox" id="one" name="data[Offres]" value="Randonnée Douce - 2h30 -" />Randonnée Douce - 2h30 -</label>
                                  <label for="two">
                                    <input type="checkbox" id="two" name="data[Offres]" value="Randonnée Dynamique - 2h30 -" />Randonnée Dynamique - 2h30 -</label>
                                  <label for="three">
                                    <input type="checkbox" id="three" name="data[Offres]" value="Randonnée ARTISTIQUE SUR LE Sentier Land art Dawya - 3h -" />Randonnée ARTISTIQUE SUR LE Sentier Land art Dawya - 3h -</label>
                                  <label for="four">
                                    <input type="checkbox" id="four" name="data[Offres]" value="Atelier Bien être - 3h -" />Atelier Bien être - 3h -</label>
                                  <label for="five">
                                    <input type="checkbox" id="five" name="data[Offres]" value="Stage Botanique - 3h30 -" />Stage Botanique - 3h30 -</label>
                                  <label for="six">
                                    <input type="checkbox" id="six" name="data[Offres]" value="Promenade familiale AVEC un âne - 4h -" />Promenade familiale AVEC un âne - 4h -</label>
                                  <label for="seven">
                                    <input type="checkbox" id="seven" name="data[Offres]" value="Promenade familiale AVEC un âne - 6h30 -" />Promenade familiale AVEC un âne - 6h30 -</label>
                                  <label for="eight">
                                    <input type="checkbox" id="eight" name="data[Offres]" value="Stage DE CREATION Land Art - 4h -" />Stage DE CREATION Land Art - 4h -</label>
                                  <label for="nine">
                                    <input type="checkbox" id="nine" name="data[Offres]" value="Observation du ciel - 3h -" />Observation du ciel - 3h -</label>
                                  <label for="ten">
                                    <input type="checkbox" id="ten" name="data[Offres]" value="Stages bien-être & énergie - 4h -" />Stages bien-être & énergie - 4h -</label>
                                  <label class="change" for="eleven">
                                    <input type="checkbox" id="eleven" name="data[Offres]" value="retraite dawya bien-être - 8h -" />retraite dawya bien-être - 8h -</label>
                                  <label class="change" for="twelve">
                                    <input type="checkbox" id="twelve" name="data[Offres]" value="retraite dawya bien-être - 2 jours -" />retraite dawya bien-être - 2 jours -</label>
                                  <label class="change" for="thirteen">
                                    <input type="checkbox" id="thirteen" name="data[Offres]" value="Package Dawya découvertes - 8h" />Package Dawya découvertes - 8h</label>
                                  <label class="change" for="fourteen">
                                    <input type="checkbox" id="fourteen" name="data[Offres]" value="Package Dawya découvertes - 2 jours -" />Package Dawya découvertes - 2 jours -</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            Souhaitez-vous un repas Jbala sur place préparé par les femmes du Douar Boujmil ?
                            <label for="Ah" style="cursor: pointer;">
                                <input type="checkbox" name="data[Repas]" id="Ah" value="Déjeuner">
                                Déjeuner
                            </label>&nbsp;
                            <label for="Lae" style="cursor: pointer;">
                                <input type="checkbox" name="data[Repas]" id="Lae" value="Dîner">
                                Dîner
                            </label>
                            <br>
                            <br>
                            Souhaitez vous dormir chez l’habitant du Douar ?
                            <br>
                            <label for="Oui" style="cursor: pointer;">
                                <input type="radio" name="data[Dormir]" id="Oui" value="La veille">
                                La veille
                            </label>&nbsp;
                            <label for="Non" style="cursor: pointer;">
                                <input type="radio" name="data[Dormir]" id="Non" value="Le soir même">
                                Le soir même
                            </label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-now" placeholder="Souhaits particuliers" id="msg_box" name="data[Souhaits particuliers]" maxlength="88"></textarea>
                            <br>
                            <br>
                            Comment avez-vous connu notre site internet ?
                            <br>
                            <label class="couleur" for="input-group9" style="cursor: pointer;">
                                <input type="radio" name="data[ConnaisseNous]" id="input-group9" value="Réseaux sociaux">
                                Réseaux sociaux
                            </label>&nbsp;
                            <label class="couleur" for="input-group10" style="cursor: pointer;">
                                <input type="radio" name="data[ConnaisseNous]" id="input-group10" value="Publicité Internet">
                                Publicité Internet
                            </label>&nbsp;
                            <label class="couleur" for="input-group11" style="cursor: pointer;">
                                <input type="radio" name="data[ConnaisseNous]" id="input-group11" value="Moteur de recherche">
                                Moteur de recherche 
                            </label>&nbsp;
                            <label class="couleur" for="input-group12" style="cursor: pointer;">
                                <input type="radio" name="data[ConnaisseNous]" id="input-group12" value="Autre">
                                Autre
                            </label>
                            <br>
                            <br>
                            <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                        </div>    
                        <div class="form-group">
                            <input type="submit" name="submit" value="VALIDER">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>


    <script src="../Front-end-tools/bootstarp/bootstrap.min.js"></script>
    <script>
            var form = document.getElementById('sheetdb-form');
        form.addEventListener("submit", e => {
          e.preventDefault();
          fetch(form.action, {
              method : "POST",
              body: new FormData(document.getElementById("sheetdb-form")),
          }).then(
              response => response.json()
          ).then((html) => {
            // you can put any JS code here
            // window.open('index.php', '_blank');

          });
        });
    </script>
    <script>
        var expanded = false;

        function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }

        }
        function submitForm(form) {
        swal({
            title: "Ce formulaire sera validé",
            text: "Merci de l’intérêt que vous portez à nos activités et nos expériences insolites en pleine nature... Pour mieux répondre à vos souhaits de découvertes avec Dawya Natures, nous vous remercions de bien vouloir nous donner quelques informations indispensables pour vous proposer notre offre la plus adapter et un budget bien sûr. Ces informations resterons confidentielles et nous nous engageons à ne pas les utiliser hors de nos propres activités",
            icon: "success",
            buttons: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });
        return false;
    }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>

<!-- <?php 


?> -->