<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercices PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <strong><label for="eleve1">Eleve 1 :</label></strong><br>
      <label for="">Note 1</label>
        <input type="text" name="note1-1" value=""><br>
      <label for="">Note 2</label>
        <input type="text" name="note1-2" value=""><br>
      <label for="">Note 3</label>
        <input type="text" name="note1-3" value=""><br>
      <label for="">Note 4</label>
        <input type="text" name="note1-4" value=""><br>

      <strong><label for="eleve2">Eleve 2 :</label></strong><br>
      <label for="">Note 1</label>
        <input type="text" name="note2-1" value="note-1"><br>
      <label for="">Note 2</label>
        <input type="text" name="note2-2" value="note-2"><br>
      <label for="">Note 3</label>
        <input type="text" name="note2-3" value="note-3"><br>
      <label for="">Note 4</label>
        <input type="text" name="note2-4" value="note-4"><br>

      <strong><label for="eleve3">Eleve 3 :</label></strong><br>
      <label for="">Note 1</label>
        <input type="text" name="note3-1" value="note-1"><br>
      <label for="">Note 2</label>
        <input type="text" name="note3-2" value="note-2"><br>
      <label for="">Note 3</label>
        <input type="text" name="note3-3" value="note-3"><br>
      <label for="">Note 4</label>
        <input type="text" name="note3-4" value="note-4"><br>
      <input type="submit" name="submit">Valider</input>
      </form>

    <?php
    $valuesIndiv;
    $valuesTotal;
    $mediumIndi;
    $mediumTotal;
    $sumTotal;
    $sumNotes;
    $nbNotesTotal = 12;
    $nbNotesIndi = 4;
    //déclaration des variables $eleve afin de récupérer les datas
    $eleve1;
    $eleve2;
    $eleve3;
    //récupération des données passées dans le formulaire et association aux variables eleves
    if(isset($_POST["submit"])){
      $eleve1 = array('note1' => $_POST["note1-1"], 'note2' => $_POST["note1-2"], 'note3' => $_POST["note1-3"], 'note4' => $_POST["note1-4"]);
      $eleve2 = array('note1' => $_POST["note2-1"], 'note2' => $_POST["note2-2"], 'note3' => $_POST["note2-3"], 'note4' => $_POST["note2-4"]);
      $eleve3 = array('note1' => $_POST["note3-1"], 'note2' => $_POST["note3-2"], 'note3' => $_POST["note3-3"], 'note4' => $_POST["note3-4"]);
    };

    //définition du tableau de notes
    $tableauNotes = array(
      "eleve1" => $eleve1;
      "eleve2" => $eleve2;
      "eleve3" => $eleve3;
    );
    //affichage du tableau en brut
    print_r($tableauNotes);

    //on analyse chacune des valeurs du tableau $tableauNotes
    foreach($tableauNotes as $eleves => $notes){
      //on déclare les variables que l'on réutilisera pour le calcul de la somme totale
      $sumNotes;
      //comme le tableauNotes a comme valeur d'autres tableaux (les tableaux $eleves), on réitere un foreach pour analyser toutes les datas dans les tableaux $eleves
      foreach($eleve as $noteNb => $note){
        //on utilise la fonction array_sum pour faire la somme des valeurs du tableau, et on y attribue une variable $sumNotes
        $sumNotes[$eleve] = array_sum($note);
      };
      //Calcul des moyennes individuelles:
      $mediumIndi = $sumNotes[$eleve]/$nbNotesIndi;
      echo "La moyenne de l'eleve est $mediumIndi";

    //calcul de la somme totale des notes
    $sumTotal = array_sum($sumNotes[$eleve][$note]);

    //calcul de la moyenne générale
    $mediumTotal = $sumTotal/$totalNotes;
    echo "La moyenne des eleves est de: $mediumTotal";
?>

  </body>
</html>
