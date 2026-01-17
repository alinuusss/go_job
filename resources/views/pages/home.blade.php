@extends('base')

@section('title', 'Доставка заказов')

@section('description', '')

@section('content')

    @include('includes.main_section')

    <div class="container home">
        @include('includes.trans')
        @include('includes.pay')
        @include('includes.req')
        @include('includes.maps')
        @include('includes.section_down')
    </div>

@endsection
