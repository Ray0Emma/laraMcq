@extends('app')
@section('content')
    <div class='mt-5 card border-info py-2' style='width: 20rem;'>
        <div class='card-body'>
            <h5 class='card-title mb-3'> Liste des QCM </h5>
            @foreach ($data as $d)
                <p class='card-text'>
                    <a href='{{ 'question.php?id=' . $d->id }}' class='link-dark'>
                        {{ $d->lib_formlaire }} </a></br>
                </p>
            @endforeach
        </div>
    </div>
@endsection
