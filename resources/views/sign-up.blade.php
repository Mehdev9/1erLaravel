@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sign.css">

    <title>sign-up</title>
</head>

<body>
    <h1>Formulaire d'inscriptions d'étudiants</h1>
    <form action="{{ route('saveUser') }}" method="post">
        @csrf
        <fieldset>
            <legend>Remplissez ces champs</legend>
            <div class="mb-3">
                <label for="name" class="form-label">Nom </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom </label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="mb-3">
                <label for="ddn" class="form-label">Date de naissance </label>
                <input type="date" class="form-control" id="ddn" name="ddn">
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">adresse Email </label>
                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="mail">
                <div id="emailHelp" class="form-text">Nous ne partagerons pas votre email.</div>
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" placeholder="entrez votre mot de passe" name="mdp">
            </div>
            <div>
                <button type="submit" class="btn btn-danger">Retour</button>
                <button type="submit" class="btn btn-success">Inscription</button>
            </div>
        </fieldset>
    </form>

</body>

</html>
