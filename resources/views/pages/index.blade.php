@extends('layouts.master')

@section('content')
<base-slider :slides="{{json_encode([["id" => 1],["id" => 2],["id" => 3],["id" => 4],["id" => 5]])}}"></base-slider>
<base-list></base-list>
@endsection
