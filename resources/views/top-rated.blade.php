@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <h4>{{ $title }}</h4>
                    @foreach ($topRated as $item)
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="card">
                                <img class="card-img-top"
                                    src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $item->poster_path }}"
                                    alt="{{ $item->original_title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->original_title }}</h5>
                                    vote: {{ number_format($item->vote_average, 2) }}
                                    <div class="text-end">
                                        <a href="/detail/{{ $item->id }}"
                                            class="btn btn-outline-primary stretched-link">Preview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $topRated->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
