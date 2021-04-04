@extends('layouts.master')

@section('content')
    <base-details-page :movie="{{ json_encode($movie) }}"></base-details-page>
@endsection
