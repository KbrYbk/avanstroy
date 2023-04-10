@extends('layouts.app')<!--шапка-->

@section('content')
<div class="container my-5">
    <h2 class="title my-5">{{ $category->name }}</h2>



    <div class="row">
        <div class="catalog_sort my-3">
            <a class="btn btn-light btn-lg mb-3 float-md-start" href="{{url('catalog')}}" role="button">Назад</a>
            <div class="my-3 float-md-end">
                <a href="{{ url('catalog/'.$category->id.'?sort_by=name&sort_order='.($sort_by == 'name' && $sort_order == 'asc' ? 'desc' : 'asc')) }}">Сортировка по имени</a> |
                <a href="{{ url('catalog/'.$category->id.'?sort_by=price&sort_order='.($sort_by == 'price' && $sort_order == 'asc' ? 'desc' : 'asc')) }}">Сортировка по цене</a>
            </div>
        </div>
        @foreach($products as $product)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="card kupit h-100"><!--карточка товара-->
                <img src="{{url('img')}}/{{$product->img}}" alt="{{$product->name}}" class="card-img-top product_img"><!--картинка товара-->
                <div class="card-body">
                    <h3 class="card-title mb-3">{{$product->name}}</h3><!--имя товара-->
                    <h4>от {{$product->price}} ₽</h4><!--цена товара-->
                </div>
                <a href="{{url('catalog/product')}}/{{$product->id}}" class="stretched-link"></a><!--ссылка на выбраный товар-->
            </div>
        </div>
        @endforeach
    </div>
</div>
<section class="container my-5" id="mehanizm">
    <h2 class="title my-5">Механизм приобретения блоков</h2>
    <div class="row row-cols-xl-2 row-cols-md-1 my-5">
        <div class="col mb-4">
            <div class="card h-100 kakzakaz ">
                <div class="">
                    <object class="cifry" data="{{url('svg')}}/01.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="{{url('img')}}/zakazat.png" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h4>Заказать изделия можно:</h4>
                    </div>
                    <div class="card-text">
                        1. Путем отправления заявки на электронную почту E-mail: <a href="mailto:avanstroy@mai.ru">avanstroy@mai.ru</a>
                        с указанием
                        размеров дверных или оконных проемов, ширины и высоты нужной перемычки, необходимым
                        количеством штук, точным адресом доставки и телефона заказчика.
                        <br>
                        <br>

                        2. Позвонив по телефону: <a href="tel:+79293684677">+7 929 368-46-77</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 kakzakaz ">
                <div class="">
                    <object class="cifry" data="{{url('svg')}}/02.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="{{url('img')}}/card.png" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h4>Оплата за товар</h4>
                    </div>
                    <div class="card-text">
                        Осуществляется после согласования стоимости, количества и сроков изготовления. Договор
                        оплаты и счет направляется заказчику на электронную почту.
                        <br>
                        <br>
                        Принимается любой способ оплаты: картой, банковским переводом, наличными.
                        <br>
                        <br>
                        После получения платежа менеджер согласовывает дату, время и способ доставки.
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 kakzakaz ">
                <div class="">
                    <object class="cifry" data="{{url('svg')}}/03.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="{{url('img')}}/izgotovlenie.png" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h4>Изготовление</h4>
                    </div>
                    <div class="card-text">
                        Осуществляется после 100% предоплаты за товар.
                        <br>
                        Срок изготовления
                        от 3 до 7 дней, в зависимости от объема заказа и очередности.
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 kakzakaz ">
                <div class="">
                    <object class="cifry" data="{{url('svg')}}/04.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="{{url('img')}}/truck.png" alt="">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h4>Доставка</h4>
                    </div>
                    <div class="card-text">
                        Доставка товара осуществляется автомобильным транспортом.
                        <br>
                        <br>
                        Стоимость доставки зависит от объема покупки и удаленности пункта выгрузки товара от склада
                        и рассчитывается менеджером нашей компании после обработки заявки.
                        <br>
                        <br>
                        Вместе с партией груза клиенту на руки передаются накладная, паспорта качества и сертификаты
                        на товар.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5 info">
    <h2 class="title my-5">Просим ознакомиться с дополнительной информацией
        по оформлению заказа и доставке</h2>
    <div class="text">
        <ul>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> Блоки перевозятся на
                поддонах, упакованных в стрейч-пленку, которая защищает стройматериал
                от атмосферных осадков и механических повреждений во время погрузки, транспортировке и разгрузке
            </li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> При оформлении
                заказа следует
                указать точный адрес пункта доставки и телефон получателя груза.</li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> Товар загружается и
                отправляется со склада после того, как получатель товара подтвердит готовность его принять.</li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> В день доставки
                следует
                постоянно находиться на связи по указанному номеру телефона, чтобы водитель предварительно сообщил о
                прибытии машины. Если приемщик товара не доступен или не отвечает, дата поставки переносится на
                другое время.</li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> Въезд к месту
                выгрузки товара
                должен соответствовать габаритами грузового автомобиля. В ином случае, об этом следует сообщить
                менеджеру, оформляющему доставку.</li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> Если территория, где
                находится пункт доставки, охраняется, заказчик должен оформить пропуск или принять товар перед
                въездом на территорию.</li>
            <li class=""><object data="{{url('svg')}}/spisok.svg" type="image/svg+xml"></object> Заказчику нужно
                обеспечить
                машине беспрепятственный подъезд к месту разгрузки (дорога должна иметь твердое покрытие шириной не
                менее 3 м, достаточную площадь с радиусом разворота не менее 15 м). Если требования не соблюдаются,
                товар будет доставлен максимально близко к месту планируемой выгрузки.</li>
        </ul>
    </div>
    <script src="resources/js/spisok.js"></script>
</section>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5" id="kontakty">
    <h2 class="title my-5">Наши Контакты</h2>
    <div class="kontakty_numder">
        <div class="kontakty_info d-flex">
            <object data="{{url('svg')}}/Zvonok.svg" type="image/svg+xml"></object>
            <a href="tel:+79293684677">+7 929 368-46-77</a>
        </div>
        <div class="kontakty_info d-flex">
            <object data="{{url('svg')}}/Mail.svg" type="image/svg+xml"></object>
            <a href="mailto:avanstroy@mai.ru">avanstroy@mai.ru</a>
        </div>
    </div>
    <div class="map my-4">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad2a46b62740da2d52d9f168e1f6292206d69a3ebfa514993b3d073c3e3ba3c5f&amp;source=constructor" width="650" height="400" frameborder="0"></iframe>
    </div>
</section>

@endsection