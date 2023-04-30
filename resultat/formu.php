


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire3.css">
    <title>demande envoyé</title>
</head>


    <body>
    <?php

        //Ouverture d'une connection a la base de donnée.
// "localhost:3310"=nom du du serveur
// "formulaire"=nom de base de donnée
//"root "=nom d'utilisateur
$db= mysqli_connect("localhost:3310","root","","formulaire") ;
//j'ai chané le numero des ports par défaut  apaches et my sql parce j'avais dejà des applis qui utilsait ces numero de port
//port apache =8012
//port Mysql =3310

// j'ai crée la base de donnéée avec phpmyadmin et j'ai utilisé xamp
    if(isset ($_POST['envoyer'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $choix = $_POST['choix'];
    $echeance = $_POST['echeance'];
    $souhait = $_POST['souhait'];
    $intituler = $_POST['intituler'];
    $descrip = $_POST['descrip'];

    //Prepare la requête d'insertion (sql)
    //Récuper les  informations saisie dans le formulaire et les insert dans la  base de données sql

    $insertion="INSERT INTO information(nom,prenom,email,choix,echeance,souhait,intituler) VALUES ('$nom' ,'$prenom ','$email','$choix','$echeance','$souhait','$intituler')";
    
    //Execute la requête d'insertion des information dans la base de donnée
    $exec=mysqli_query($db,$insertion);

     // Test la presence d'erreur lors de l'insertion des informations dans la base donnée  
    if ($exec){
        echo "votre demande à bien été enregistre";
    }else{
        echo"il y a eu  un problème lors de la transmission du  formulaire" ; 
    }
    
    }
    //Selectionne tous les élements  de la table de ma base de donnée en seletionnent le dernier element  ajouté
    // L requête "ODER BY id DESC LIMIT 1" permet de récuperer le dernier ajout  

    $affichage=('SELECT * FROM information ORDER BY id DESC LIMIT 1');
    // Permet d'executé la requête pour que je puisse afficher le resultat sur la page
    $affiches=mysqli_query($db,$affichage);

    
    ?>
    <form class="grand">
        <!--grand div encadre tous le code-->


        

        <h2>VOTRE DEMANDE</h2>
        <!--deuxième grand div-->
        <div class="grand2">

            <div class="information">
                 <label> a la demande de :</label><br><br>

            <!-- <span class="champ_de_text">-->

                
                    <?php
                    // Fait appel a la requête pour afficher le resultat sur  le page 
                   foreach($affiches as $affiche):?>
                    
                        <?= "Nom: ",$affiche['nom']?><br><br>
                         <?="Prenom: ",$affiche['prenom'] ?><br><br>
                         <?="email: ",$affiche['email']?>
                    
                    <?php endforeach;
            
                  ?>
        
                 <br><br>


            </div> 

            <div class="information">
                <div class="echeance">
                    <label> Echeance :</label>
                    <br><br>

                        <?php foreach($affiches as $affiche):?>
                        <?="Echeance sous ",$affiche['choix']?>
                        <?php endforeach;?>
                        <br>
                        <br>

                        <label>Nature de la demande : </label>
                        <br><br>
                        <?php foreach($affiches as $affiche):?>
                        <?= $affiche['echeance']?>
                        <?php endforeach;?>
                


                         <br>
                        <br>
                   
                        <?php
                        
                        ?>
                        <?php foreach($affiches as $affiche):?>
                        <?="Réponse attendu sous ",$affiche['souhait']?>
                        <?php endforeach;?>
              </div>


            </div>
            <div class="intituler">
            <label>Intitulé du projet</label>
                <br>
                <br>
                <?php foreach($affiches as $affiche):?>
                        <?= $affiche['intituler']?>
                        <?php endforeach;?>
                <br>
                <br>
               <label>Description</label>
               <br><br>
               <textarea class="description" >
                    <?php
                    /* Ici j'ai  directemant affiché la description avec php sans passé par la base de donnée parce que lorsqué j'insert la description dans la base de donnée
                    j'ai des erreur je ne sais pas pourquoi. */ 
                    echo $_POST['descrip'];
                    ?>
                </textarea>
            </div>


        </div>

    </form>
</body>

</html>