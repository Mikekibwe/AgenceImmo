@extends('base')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence immobilière du Haut-katanga</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda consectetur culpa dolorum ea eaque eius
                eveniet illum laboriosam, modi nisi nostrum nulla, provident quis repellendus sunt suscipit veritatis voluptatem.</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach($properties as $property)
            <div class="col">
                @include('property.card')
            </div>
            @endforeach
        </div>
    </div>

@endsection
