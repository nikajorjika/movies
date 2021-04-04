@extends('layouts.master')

@section('content')
    <base-slider :slides="{{ json_encode($sliderMovies) }}">
    </base-slider>
    <base-list title="Movies" :movies="{{ json_encode($topMovieList) }}"></base-list>
@endsection
