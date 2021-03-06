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
    <button
        type="button"
        class="btn btn-primary mt-5"
        data-bs-toggle="modal"
        data-bs-target="#formAddPersoModal"
    >Ajouter</button>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pseudo</th>
            <th>Race</th>
            <th>Point de vie</th>
            <th>Armure</th>
            <th>Détails</th>
            <th>Propriétaire</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($listPersonnages as $personnage)
                <tr>
                    <td>{{$personnage->pseudo}}</td>
                    <td style="background-color: {{$personnage->classe->couleur}}">
                        {{$personnage->race->nom}}
                    </td>
                    <td style="background-color: {{$personnage->classe->couleur}}">
                        {{$personnage->pv}}
                    </td>
                    <td style="background-color: {{$personnage->classe->couleur}}">
                        {{$personnage->armure->materiau}}
                    </td>
                    <td style="background-color: {{$personnage->classe->couleur}}">
                        Je suis un {{$personnage->classe->nom}}
                        avec la spécialisation {{$personnage->specialisation->type}},
                        mon action préféré est {{$personnage->classe->actionpref}}
                    </td>
                    <td style="background-color: {{$personnage->classe->couleur}}">
                        {{$personnage->proprietaire}}
                    </td>
                    <td>
                        <button
                            type="button"
                            class="btn btn-primary mx-3 my-2"
                            data-bs-toggle="modal"
                            data-bs-target="#formEditPersoModal"
                            onclick="fillForm({{$personnage->personnage_id}})"
                        >Editer</button>

                        <button
                            type="button"
                            class="btn btn-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            onclick="storePersoToDelete({{$personnage->personnage_id}})"
                        >Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('modals.formAddPersoModal')
@include('modals.formEditPersoModal')
@include('modals.deleteModal')

{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="{{asset('js/app.js')}}"--}}
{{--    listSpecialisation='{!! json_encode($listeSpecialisation) !!}'--}}
{{--    listPersonnages='{!! json_encode($listPersonnagesJSON) !!}'--}}
{{--></script>--}}
<script type="text/javascript" src="{{asset('js/formAddPersoModal.js')}}" listSpecialisation='{!! json_encode($listeSpecialisation) !!}'></script>
<script type="text/javascript" src="{{asset('js/deletPersoModal.js')}}" listPersonnages='{!! json_encode($listPersonnagesJSON) !!}'></script>
<script type="text/javascript" src="{{asset('js/formEditPersoModal.js')}}"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
