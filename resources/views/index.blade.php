<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



    <title>Test Tech - Kirian JOURAND</title>
</head>
<body>
<div class="container mt-4">
    <h1>Test Technique APITIC - Kirian JOURAND</h1>
    <button type="button" class="btn btn-primary mt-5">Ajouter</button>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pseudo</th>
            <th>Race</th>
            <th>Point de vie</th>
            <th>Armure</th>
            <th>Détail</th>
            <th>Propriétaire</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach ($personnages as $personnage){
                echo('<tr>');
                    echo("<td>{$personnage->pseudo}</td>");
                    echo("<td style=\"background-color: {$personnage->classe->couleur}\">{$personnage->race->nom}</td>");
                    echo("<td style=\"background-color: {$personnage->classe->couleur}\">{$personnage->pv}</td>");
                    echo("<td style=\"background-color: {$personnage->classe->couleur}\">{$personnage->armure->materiau}</td>");
                    echo("<td style=\"background-color: {$personnage->classe->couleur}\">TODO</td>");
                    echo("<td style=\"background-color: {$personnage->classe->couleur}\">{$personnage->proprietaire}</td>");
                    echo("<td>
                        <button
                            type=\"button\"
                            class=\"btn btn-primary mx-3 my-2\"
                        >Editer</button>

                        <button
                            type=\"button\"
                            class=\"btn btn-danger\"
                            data-bs-toggle=\"modal\"
                            data-bs-target=\"#deleteModal\"
                        >Supprimer</button>
                    </td>");
                echo('</tr>');
            }
            ?>
        </tbody>
    </table>
</div>

@include('modals.deleteModal')

<script src="{{asset('js/app.css')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
