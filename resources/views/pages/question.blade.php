@extends('app')
@section('content')
    <div class='mt-5 card border-info py-2' style='width: 20rem;'>
        <div class='card-body'>
            <form action="{{ route('reponse.index') }}" method='POST'>
                <h5 class='card-title mb-3'> Questions </h5>
                <p class='card-text'>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($data as $q)
                        @if (!($i % 4))
                            <p class='text-info fs-6 mt-1'>{{ $q->lib_question }} </p>
                        @endif
                        <input type='radio' name='{{ $q->question_id }}' value='{{ $q->correct }}'
                            class='m-1' />{{ $q->lib_reponse }}"
                        </br>
                        @php
                        $i++; @endphp
                    @endforeach
                </p>
                <button type='submit' class='btn btn-info'>Valider</button>
            </form>
        </div>
    </div>
@endsection
