<?php
$poids =34.0;
$taille=1.57;

$bmi=$poids/($taille*$taille);
var_dump($bmi);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>exercice 0.1_2</title>
</head>
<body>
<h1>Exercice 21/09/2022</h1>
<br>
<H2>Travaille 2</H2>
<table class="tb1">
    <thead>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Taille</th>
        <th>Poids</th>
        <th>Bmi</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>H1234</td>
        <td>Filali</td>
        <td>Xavier</td>
        <td>1,57</td>
        <td>34</td>
        <td><?php echo $bmi?></td>
    </tr>
    <tbody\>

</table>

</body>
</html>
