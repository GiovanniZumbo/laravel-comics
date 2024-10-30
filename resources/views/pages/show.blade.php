@extends('layout.app')

@section('main-content')
    <div class="bg-dark">
        <div class="container">

            <h1 class="text-center py-4 text-light">{{ $comic['title'] }}</h1>

            <div class="row my-4">
                <div class="col-6 text-center">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>

                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body">

                            </ul>
                            <li class="card-text"><b>Title: </b> {{ $comic['title'] }}</li>
                            <li class="card-text"><b>Series: </b> {{ $comic['series'] }}</li>
                            <li class="card-text"><b>Type: </b> {{ $comic['type'] }}</li>
                            <li class="card-text"><b>Description: </b> {{ $comic['description'] }}</li>
                            <li class="card-text"><b>Sale date: </b> {{ $comic['sale_date'] }}</li>
                            <li class="card-text"><b>Price: </b> {{ $comic['price'] }}</li>
                            <ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
