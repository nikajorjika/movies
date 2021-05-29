@extends('layouts.master')

@section('content')
    <details-page :movie="{{ json_encode($movie) }}"></details-page>
@endsection
