@extends('layouts.master')
@section('meta-title', config('app.name').' | Home Page')

@section('content')
    @include('site._partials.banner-carousel')
    @include('site._partials.call-to-action-box')
    @include('site._partials.ts-features')
    @include('site._partials.facts')
    @include('site._partials.ts-service-area')
    @include('site._partials.project-area')
    @include('site._partials.content')
    @include('site._partials.subscribe')
    @include('site._partials.news')
@endsection


