@extends('layouts.app')

@section('title', 'StuDoc — оформлення дипломних і курсових за ДСТУ | 24–48 годин')
@section('description', 'Оформимо дипломну, курсову чи магістерську роботу за вимогами вишу. ДСТУ 8302:2015, методичка, поля, нумерація. Швидко — 24–48 годин. Від 200 грн.')

@section('content')
    @include('partials.hero')
    @include('partials.services')
    @include('partials.how-it-works')
    @include('partials.faq')
    @include('partials.order-form')
    @include('partials.footer')
@endsection
