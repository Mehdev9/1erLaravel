@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/liste.css">
    <title>Etudiants</title>
</head>

<body>
    <h1>Tout les étudiants</h1>
    <div class="liste">
    @foreach ($users as $user)
            <ul>
                <li class="list-group-item list-group-item-secondary d-flex justify-content-center align-items-center">
                    <span class="badge bg-primary rounded-pill">{{ $user->id }} </span>
                    <p>{{ $user->name }}</p>
                </li>
                {{-- <li><a href="{{$user->id}}"><p>{{$user->name}}</p></a></li> --}}
            </ul>
            @endforeach
        </div>
</body>

</html>
