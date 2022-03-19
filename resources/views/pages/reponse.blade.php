@extends('app')
@section('content')
    <div class='mt-5 card border-info py-3' style='width: 20rem;'>
        <div class='card-body'>
            <h5 class='card-title mb-3'> Résultat </h5>
            <p class='card-text'>
                Voici votre score: {{ $note }} sur {{ $size }} .</br>
            </p>
        </div>
    </div>
@endsection
