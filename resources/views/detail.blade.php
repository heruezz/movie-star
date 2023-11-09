@extends('layouts.main')
@section('container')
    <div class="row card mb-12" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $detail->poster_path }}"
                    alt="{{ $detail->original_title }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $detail->original_title }}</h2>
                    <p class="card-text"><small class="text-body-secondary">
                            {{ $detail->release_date }}
                            @foreach ($detail->genres as $genre)
                                {{ $genre->name }},
                            @endforeach
                            {{ \Carbon\CarbonInterval::minutes($detail->runtime)->cascade()->forHumans() }}
                        </small></p>
                    <p class="card-text">{{ $detail->overview }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
