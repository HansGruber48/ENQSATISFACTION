<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">
    <input type="button">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container">

        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>

<?php
var_dump($_GET);
$notation = '⚫⚫⚫⚫⚫';
$resultat = 0;
echo "<br>";
if ($_GET == null) {
    echo '<a href="?step=1">Commencer</a><br>';
}

if (isset($_GET['step']) && ($_GET['step'] == '1')) {
    echo '
    <h2>Question 1</h2>
    <p>L\'agent a-t-il été agréable ?</p>
        <a href="?step=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
        <a href="?step=2" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
        <a href="?step=2" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->';
        if (isset($_POST['btn btn-success']))
           $resultat +=2;
        else if (isset($_POST['btn-secondary'])) 
           $resultat++;
    }
if (isset($_GET['step']) && ($_GET['step'] == '2')) {
    echo '<p>question2</p><a href="?step=3">lien 2</a>
        <p>L\'agent a-t-il bien compris le problème ? </p>
        <a href="?step=3" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
        <a href="?step=3" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
        <a href="?step=3" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->';
        if (isset($_POST['btn-success']))
          $resultat +=2;
        else if (isset($_POST['btn-secondary'])) 
          $resultat++;
    }
if (isset($_GET['step']) && ($_GET['step'] == '3')) {
    echo '<p>question3</p><a href="?step=4" >lien 3</a>
        <p>L\'agent a-t-il résolu le problème ? </p>
        <a href="?step=4" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
        <a href="?step=4" role="button" class="btn btn-danger">non</a> <!-- enlève 1 point -->';
         if (isset($_POST['btn-success']))
          $resultat++;
        else if ($resultat != 0) $resultat--;}
for ($i=0;$i<$resultat;$i++) $notation[$i] = '⭐';
echo "Merci pour votre notation : $notation <!-- le nombre d'étoiles représente le nombre de points cumulés -->";
if (isset($_GET['step']) && ($_GET['step'] == '4')) {
    if (!$_GET) {
          ?>
          echo '<p>Votre problème n\'a pas été résolu.</p>
          <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
          <br>';                  
          <form method="GET" action="">
          <p>
            <label for="Surname">nom : </label>
            <input type="text" name="Surname" required />
          </p>
          <p>
            <label for="phone">Votre numéro de téléphone:</label>
            <input type="tel" id="phone" name="phone" pattern="0[1-7][0-9]{8}">
          </p>
          </p>
          <input type="hidden" name="hiddenParam" value="myHiddenValue" />
          <p>
              <label for="message">message : </label>
              <br>
              <textarea name="message" rows="8" cols="45"></textarea>
          </p>
          <p>
              <input type="checkbox" name="call" value="true" id="case" /> <label for="case">j'accepte d'être rappelé</label>
          </p>
          <p>
              <input type="submit" value="Envoyer" required />
          </p>
          </form> }}
          <?php
          else {
          echo '<h2>Réponses au formulaire</h2>';
          foreach ($_GET as $key => $value) {
        echo "<p>" . $key . " : " . $value . "</p>";}
              }}
            ?>