@extends('front.layouts.app')

@section('title', 'Welcome to Obito')

@section('content')

{{-- Hero Section --}}
@include('front.index')

{{-- About Section --}}
@include('front.about')

{{-- Blog Section --}}
@include('front.blog')



{{-- Gallery Section --}}
@include('front.gallery')

@endsection