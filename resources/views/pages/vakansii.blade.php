@extends('base')

@section('title', 'Доставка заказов — информация и форматы сотрудничества')

@section('description', 'Информационный сайт о формате и условиях деятельности в доставке заказов. Материалы помогут разобраться, как устроена работа курьером')

@section('content')

    <div class="vakansii">
        <div class="container">
            <h1 class="title">Вакансии</h1>

            <div class="row row_items vakansii__list">
                <div class="block item">
                    <a href="{{ config('app_site.link') }}" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/logo.webp') }}" class="item__img" alt="">
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
                            Подключиться
                        </a>
                    </div>
                </div>
                <div class="block item">
                    <a href="https://trk.ppdu.ru/click/D8VxjaBk?erid=Kra23uVC3" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/logo.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="https://trk.ppdu.ru/click/D8VxjaBk?erid=Kra23uVC3" target="_blank" class="item__name">
                        Курьер Яндекс Еды в Узбекистане
                    </a>
                    <div class="item__desc second_text">
                        Курьер Яндекс Еды в Узбекистане: свободный график, стабильный доход, бонусы, работа 24/7 в Ташкенте и регионах, пешком или на авто.
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
                            Подключиться
                        </a>
                    </div>
                </div>
                <div class="block item">
                    <a href="https://trk.ppdu.ru/click/mi13zRHK?erid=Kra23uVC3" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/logo.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="https://trk.ppdu.ru/click/mi13zRHK?erid=Kra23uVC3" target="_blank" class="item__name">
                        Курьер Яндекс.Еда в Казахстане
                    </a>
                    <div class="item__desc second_text">
                        Курьер Яндекс.Еды в Казахстане: свободный график, стабильный доход, бонусы, заказы 24/7, работа пешком, на велосипеде, авто или мотоцикле в крупных городах.
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
                            Подключиться
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="title">Другие вакансии</h1>

            <div class="row row_items vakansii__list">
                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/ruki.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Сервис «Руки» (Москва)
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge active">
                            Установка межкомнатных дверей
                        </div>
                        <div class="badge">
                            Сборка кухонь
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/burger.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Повар-кассир в Burger King
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge">
                            Официальное трудоустройство
                        </div>
                        <div class="badge">
                            Премии
                        </div>
                        <div class="badge">
                            Бонусы
                        </div>
                        <div class="badge">
                            Гибкий график
                        </div>
                        <div class="badge">
                            Карьерный рост
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/mark.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Кладовщик на склад Яндекс Маркет
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge">
                            Бесплатное общежитие
                        </div>
                        <div class="badge">
                            Сдельная оплата
                        </div>
                        <div class="badge">
                            Оплачиваемое обучение
                        </div>
                        <div class="badge">
                            Зарплата без задержек
                        </div>
                        <div class="badge">
                            Бесплатные обеды
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/pamp.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Менеджер агентской группы (Pampadu)
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge">
                            Оклад выше рынка
                        </div>
                        <div class="badge">
                            Высокий % с продаж
                        </div>
                        <div class="badge">
                            Отпуск за счёт компании
                        </div>
                        <div class="badge">
                            ДМС после испытательного срока
                        </div>
                        <div class="badge">
                            Удалённая работа
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/pamp.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Affiliate-менеджер в Pampadu
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge">
                            2 путешествия в год
                        </div>
                        <div class="badge">
                            Высокий процент от маржи
                        </div>
                        <div class="badge">
                            Релокация и проживание
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>

                <div class="block item">
                    <a href="#" target="_blank" class="item__img-wrap">
                        <img src="{{ asset('build/assets/images/pamp.webp') }}" class="item__img" alt="">
                    </a>
                    <a href="#" target="_blank" class="item__name">
                        Страховой агент (ОСАГО) - Pampadu
                    </a>
                    <div class="item__desc second_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi architecto
                        atque beatae consequuntur
                    </div>
                    <div class="item__badges">
                        <div class="badge active">
                            Средний заработок — 60 000 руб
                        </div>
                        <div class="badge">
                            Без бланков и офиса
                        </div>
                        <div class="badge">
                            Стабильные выплаты точно в срок
                        </div>
                        <div class="badge">
                            Без посредников
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#" target="_blank" class="item__link btn">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
