@extends('base')

@section('title', 'Доставка заказов — информация и форматы сотрудничества')

@section('description', 'Информационный сайт о формате и условиях деятельности в доставке заказов. Материалы помогут разобраться, как устроена работа курьером')

@section('content')

    @include('includes.main_section')

    <div class="container home">
        <div class="row row_items home_vakansii vakansii__list">
            <div class="block item ru">
                <a href="{{ config('app_site.link') }}" target="_blank" class="item__img-wrap">
                    <img src="{{ asset('build/assets/images/moto.svg') }}" class="item__img" alt="">
                </a>
                <a href="{{ config('app_site.link') }}" target="_blank" class="item__name">
                    Курьер в Яндекс.Еда/Яндекс.Лавка (РФ)
                </a>
                <div class="item__desc second_text">
                    Работа курьером Яндекс Еды: свободный график, стабильный доход до 3500 ₽ в день, пешком, на
                    велосипеде или авто, подходит для подработки и основного заработка
                </div>
                <div class="item__badges">
                    <div class="badge active">
                        Доход до 3 500 рублей в день
                    </div>
                    <div class="badge">
                        Гарантии
                    </div>
                    <div class="badge">
                        Бонусы
                    </div>
                    <div class="badge">
                        Большое количество заказов
                    </div>
                </div>
                <div class="item__footer">
                    <a href="{{ config('app_site.link') }}" target="_blank" class="item__link btn">
                        Откликнуться
                    </a>
                </div>
            </div>
            <div class="block item uz">
                <a href="https://trk.ppdu.ru/click/D8VxjaBk?erid=Kra23uVC3" target="_blank" class="item__img-wrap">
                    <img src="{{ asset('build/assets/images/moto.svg') }}" class="item__img" alt="">
                </a>
                <a href="https://trk.ppdu.ru/click/D8VxjaBk?erid=Kra23uVC3" target="_blank" class="item__name">
                    Курьер Яндекс Еды в Узбекистане
                </a>
                <div class="item__desc second_text">
                    Курьер Яндекс Еды в Узбекистане: свободный график, стабильный доход, бонусы, работа 24/7 в Ташкенте
                    и регионах, пешком или на авто.
                </div>
                <div class="item__badges">
                    <div class="badge">
                        Комфортный график
                    </div>
                    <div class="badge">
                        Гарантии
                    </div>
                    <div class="badge">
                        Бонусы
                    </div>
                    <div class="badge">
                        Большое количество заказов
                    </div>
                </div>
                <div class="item__footer">
                    <a href="https://trk.ppdu.ru/click/D8VxjaBk?erid=Kra23uVC3" target="_blank" class="item__link btn">
                        Откликнуться
                    </a>
                </div>
            </div>
            <div class="block item kz">
                <a href="https://trk.ppdu.ru/click/mi13zRHK?erid=Kra23uVC3" target="_blank" class="item__img-wrap">
                    <img src="{{ asset('build/assets/images/moto.svg') }}" class="item__img" alt="">
                </a>
                <a href="https://trk.ppdu.ru/click/mi13zRHK?erid=Kra23uVC3" target="_blank" class="item__name">
                    Курьер Яндекс.Еда в Казахстане
                </a>
                <div class="item__desc second_text">
                    Курьер Яндекс.Еды в Казахстане: свободный график, стабильный доход, бонусы, заказы 24/7, работа
                    пешком, на велосипеде, авто или мотоцикле в крупных городах.
                </div>
                <div class="item__badges">
                    <div class="badge">
                        Комфортный график
                    </div>
                    <div class="badge">
                        Гарантии
                    </div>
                    <div class="badge">
                        Бонусы
                    </div>
                    <div class="badge">
                        Большое количество заказов
                    </div>
                </div>
                <div class="item__footer">
                    <a href="https://trk.ppdu.ru/click/mi13zRHK?erid=Kra23uVC3" target="_blank" class="item__link btn">
                        Откликнуться
                    </a>
                </div>
            </div>
        </div>
{{--        <div class="view-all__wrap off_lg_bot">--}}
{{--            <a href="{{ route('vakansii') }}" class="view-all">--}}
{{--                Все вакансии--}}
{{--            </a>--}}
{{--        </div>--}}
        @include('includes.trans')
        @include('includes.pay')
        @include('includes.req')
        @include('includes.maps')
        @include('includes.section_down')
    </div>

@endsection
