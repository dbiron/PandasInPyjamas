<!doctype html>
<html lang="fr">
<!--++++++++ Head ++++++++-->

<head>
    <!---------- Meta tags requis ---------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---------- Keywords et Description en dynamique ---------->
    <meta name="keywords"
        content="<?php if (isset($keywords)) {echo $keywords;} else {echo "ESport, Team, Jeux-Vidéo, Game, Counter-Strike";} ?>">
    <meta name="description"
        content="<?php if (isset($description)) {echo $description;} else {echo "Pandas in Pyjamas - Le site de la Team Esport";} ?>">
    <!-- CSS Sheets -->
    <!---------- Appel de Jquery ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!---------- Appel de Font-Awesome ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!---------- Appel du Favico ---------->
    <link rel="shortcut icon" type="image/ico" href="app\public\images\favico.ico" />
    <!---------- Appel de la feuille de style ---------->
    <link rel="stylesheet" href="app/public/css/style.css">
    <!---------- Title en dynamique ---------->
    <title><?php if (isset($title)) {echo $title;} else {echo "Pandas in Pyjamas - Le site de la Team Esport";} ?>
    </title>
</head>
<!--++++++++ Head (END) ++++++++-->