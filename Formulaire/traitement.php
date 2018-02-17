<DOCTYPE html>
<html>
<body>
<?php
try{
  require('connectionBD.php');
  // requette d'insertion dans la base de donnée
  $requete=$con->prepare("INSERT INTO Etudiants(NOM,PRENOM,ADRESSE,VILLE,CODE)
                          VALUES(:nom,:prenom,:adresse,:ville,:code)"
                          );

 function secure($info){
                $info = trim($info);
                $info = stripslashes($info);
                $info = strip_tags($info);
                return $info;
          }
          $nom = secure($_POST['nom']);
          $prenom = secure($_POST['prenom']);
          $adresse = secure($_POST['adresse']);
          $ville = secure($_POST['ville']);
          $code = secure($_POST['code']);
 
  $resultat = $requete->execute();

}catch(PDOException $e){
  echo 'Erreur!!! '.$e->getMessage();
  echo 'Echec de la connexion avec la base de donnée';
}
?>
</body>
</html>