
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=*, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="champ.css">
    </head>
<!--Je vous  ai mis un enregistrement video de mon ecran-->
    <body>

   <!--la balise <form> est utiliser pour créer un formulaire pour la saisie des données utilisateur-->

    <!--"action=" indique l'adresse de l'envoi-->

    <!--<merhod=""> indique sous quel forme seront envoyé les réponses et <POST> correspond à un envoi de données stockées dans le corps de la requête -->

        <form class="grand" method="post" action="formu.php">
            <!--grand div encadre tous le code-->


           <h1>Editeur de script</h1>

            <h2>Nous soumettre votre projet</h2>
            <!--deuxième grand div-->
            <div class="grand2">

                <div class="information">
                    <!--j'ai utiliser la même class pour les deux cases a gauche -->
                    <span> <label > Nom</label>
             <span class="champ_de_text"><input type="text" name="nom"></span>
                    </span>
                    <br><br>
<!--les name spécifie le nom des éléments que je pourrais apppeler après pour la récuperation des informations-->
                    <span> <label >Prenom </label><span class="champ_de_text"><input type="text " name="prenom"></span></span>
                    </span>
                    <br>
                    <br>
                    <span><label >Email</label>
                    <span class="champ_de_text"><input type="email" name="email"></span>
                    </span>
                </div>

                <div class="information">
                    <div class="echeance">
                        <label > Echeance </label><br>

                        <dd> <input type="radio" name="choix" value="3 mois">sous 3 mois<br>
                            <input type="radio" name="choix" value=" 3 à 6 mois ">3 à 6 mois<br>
                            <input type="radio"name="choix" value="plus 6 mois">plus de 6 mois</dd>

                        <br>
                        <br>
                    </div>
                    <div class="echeance">
                        <label>Nature de la demande </label>
                        <br>
                        <br>
                        <input type="checkbox"name="echeance" value=" investissement"><label> investissement</label>
                        <br>
                        <br>
                        <input type="checkbox" name="echeance"value=" presentation"><label> presentation de conseil</label>
                        <br>
                        <br>
<!--<select > permet de faire une liste déroulante(avec les balises OPTION) -->
                        <label>reponse souhaitée sous <select name=souhait></label>
                        <option value="8 jours">8 jours</option>
                        <option value="2 semaines">2 semaines</option>
                        <option value="1 mois">1 mois</option>
                        <option value="2 mois">2 mois</option>
                        </select>
                    </div>

                </div>
                <div class="intituler">
                    <span> <label>Intitulé du projet</label><span class="champ_de_text"><input type="text" name="intituler"></span>
                    </span>
                    <br>
                    <br>
                    <label>Description du projet</label>
                    <br>
                    <br>
                    <input class="description" type="text" name="descrip">
                </div>
                 <button class="envoyer" type="submit" name="envoyer">Envoyer</button>
               <button type="reset"class="reinisialiser">Réinitialiser</button>


            </div>

        </div>

    </body>

    </html>


