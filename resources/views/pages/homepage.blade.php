@extends('layout.app')

@section('main-content')
    {{-- Jumbotron --}}

    <section id="jumbotron">
        <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}">
    </section>

    {{-- Comic List --}}

    <section id="comic-list" class="bg-dark py-5">
        <div class="container">
            <div class="row row-cols-6">

                @forelse ($comics as $index => $comic)
                    <div class="col  g-2">
                        <div class="card h-100">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top py-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $comic['title'] }}</p>

                                <a href="{{ route('comic.show', $index) }}">More Info</a>
                            </div>
                        </div>

                    </div>

                @empty
                    <p>Non sono presenti numeri in archivio.</p>
                @endforelse ($comics as $comic)

            </div>

            </ul>
        </div>
    </section>

    </div>
@endsection
