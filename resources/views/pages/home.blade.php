@extends('layouts.app')

@section('title', 'StuDoc — оформлення дипломних і курсових робіт за ДСТУ 8302:2015')
@section('description', 'Оформлення дипломних, курсових і магістерських робіт за ДСТУ 8302:2015 та вимогами кафедр. Від 200 грн. Відповідь у Telegram протягом 1–2 годин.')

@section('content')
    @include('partials.hero')
    @include('partials.services')
    @include('partials.how-it-works')
    @include('partials.faq')
    @include('partials.order-form')
    @include('partials.footer')
@endsection
