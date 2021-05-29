@extends('layouts.master')

@section('content')
    <home-page :slides="{{ json_encode($sliderMovies) }}" :movies="{{ json_encode($topMovieList) }}"></home-page>
@endsection
