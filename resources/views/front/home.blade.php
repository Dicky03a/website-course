@extends('front.layouts.app')

@section('title', 'Welcome to Obito')

@section('content')

@includeIf('front.index')
@includeIf('front.about')
@includeIf('front.blog')
@includeIf('front.prestasi')

<x-footer />
@endsection