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
    if(isset($_POST("submit"))){
      $eleve1 = array('note1' => $_POST["note1-1"], 'note2' => $_POST["note1-2"], 'note3' => $_POST["note1-3"], 'note4' => $_POST["note1-4"]);
      print_r($eleve1);
      exit;
    }

    //$totalNotesEleve = 4;
    //$totalNotes = 12;
    //définition du tableau de notes
    $tableauNotes = array(
      "eleve1" => [<?php ?>,]
      "eleve2" => [13, 14, 15, 16],
      "eleve3" => [9, 10, 12, 14],
    );

    //affichage du tableau en brut
    print_r($tableauNotes);

    //Pour calculer les sommes individuelles
    foreach($tableauNotes as $eleves => $notes){
      //on déclare les variables que l'on réutilisera pour le calcul de la somme totale
      $sumNotes;
      //pour chacune des notes en valeur
      for($i=0; $i<4; $i++){
        //on utilise la fonction array_sum pour faire la somme des valeurs du tableau, et on y attribue une variable $sumNotes
        $sumNotes[$eleves] = array_sum($notes);
    //on affiche la somme pour chacun des élèves
    echo "Les sommes des notes pour les eleves individuels sont:"; print_r($sumNotes);
    //on utilise ce tableau $sumNotes pour effectuer la somme totale des notes
    $sumTotal = array_sum($sumNotes);
    //on renvoie le résultat total
    echo "La somme de toutes les notes est de:"; print_r($sumTotal);
    //Calcul des moyennes individuelles:
    echo "$sumNotes[1]";
    //calcul de la moyenne générale
    $mediumTotal = $sumTotal/$totalNotes;
    echo "La moyenne des eleves est de: $mediumTotal";
?>

  </body>
</html>
