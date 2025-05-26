@extends('front.layouts.app')

@section('title', 'Welcome to Obito')

@section('content')

@include('front.index')
@include('front.about')
@include('front.blog')
@include('front.gallery')

@endsection