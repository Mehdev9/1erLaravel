@extends('layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Myapp</title>
</head>
<body>
    <h1>Créer un nouvel article</h1>

    <form method="POST">
        <fieldset>
            <legend>Créer votre post</legend>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom </label>
                <input type="text" class="form-control" id="nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom </label>
                <input type="text" class="form-control" id="prenom">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Image</label>
                <input type="file" class="form-control" id="titre">
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Article</label>
                <textarea class="form-control" id="article" ></textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-danger">Retour</button>
                <button type="submit" class="btn btn-success">Poster</button>
            </div>
        </fieldset>
    </form>

</body>
</html>