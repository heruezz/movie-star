@extends('layouts.main')
@section('container')
    <div class="grid grid-cols-12">
        <section class="col-span-10 col-start-2">
            <div class="row">
                <h4>Now Playing</h4>
                @foreach ($nowPlaying as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $item->poster_path }}"
                                alt="{{ $item->original_title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->original_title }}</h5>
                                Vote : {{ number_format($item->vote_average, 2) }}
                                <div class="text-end">
                                    <a href="/detail"
                                        class="btn btn-outline-primary stretched-link">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($loop->index == 3)
                    @break
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
