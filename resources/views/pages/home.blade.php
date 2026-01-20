@extends('base')

@section('title', 'Доставка заказов — информация и форматы сотрудничества')

@section('description', 'Информационный сайт о формате и условиях деятельности в доставке заказов. Материалы помогут разобраться, как устроена работа курьером')

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
