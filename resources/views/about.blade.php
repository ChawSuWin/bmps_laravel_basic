@extends('layouts.master')

@section('title', 'About')

@section('css')

        <link rel='stylesheet' href='{{asset('css/about.css')}}'>

@endsection

@section('content')
<h2 class='Text'>This is About</h2>
{{-- <img src="images/tulips.jpg" alt="Tulips"> --}}

<img src="{{url('images/tulips.jpg')}}">
@endsection

@section('js')
    <script src="{{asset('js/about.js')}}"></script>
@endsection
