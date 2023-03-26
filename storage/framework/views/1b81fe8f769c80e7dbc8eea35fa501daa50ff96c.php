

<?php $__env->startSection('content'); ?>
<!-- <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid hu">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="logo d-flex">
                    <a class="navbar-brand" href="#">
                        <img class="logo_img" src="resources/img/logo.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#onas">
                                О нас
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#izdelia">
                                Наши изделия
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#mehanizm">
                                Механизм приобретения блоков
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#kontakty">
                                Наши Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="adres d-flex mx-3">
                    <object type="image/svg+xml" data="resources/svg/mapflag.svg">
                        <img src="resources/svg/mapflag.svg">
                    </object>
                    <p class="Omsk">Омск<br></p>
                </div>
                <div class="navbar_phone mx-3">
                    <a href="tel:+79293684677">+7 929 368-46-77</a>
                </div>
            </div>
        </nav>
    </header> -->
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5" id="onas">
    <div class="card">
        <img class="man" src="<?php echo e(url('img')); ?>/chelic.jpg" alt="">
        <div class="card-body">
            <h3 class="card-title my-4">О нашей компании</h3>
            <p class="card-text onas"> «АванСтрой» предлагает ассортимент из более 500 кирпичей следующих видов:
                строительный (поризованный, щелевой, полнотелый), облицовочный (лицевой), клинкерный печной
                (шамотный, огнеупорный), силикатный (в том числе и рустированный), ручной формовки
                гиперпрессованный (сухопресованный). <br><br> Вы можете выбрать из 500 видов кирпича высокого
                качества от
                европейских производителей. <br><br>В наличии также продукция от проверенных российских заводов, по
                качеству не ниже европейских. Для ценителей дизайна мы предлагаем декоративный кирпич из
                Германии. <br><br>Вся продукция сертифицирована, мы предоставляем тепловизор, кран манипулятор и
                доставку по всей Омской Области. </p>
        </div>
    </div>
</section>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5" id="izdelia">
    <h2 class="title">Наши изделия</h2>
    <div class="d-flex mt-4">
        <div class="row">
            <div class="col-md-3 col-lg-2 mb-1">
                <a href="gazobeton.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/gazoblok.png" alt="газобетонный">
                        <div class="card-body">
                            <h4 class="card-title">от 182,00 ₽</h4>
                            <p class="card-text">Блок газобетонный</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="klink.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/клинкерный.png" alt="клинкерный">
                        <div class="card-body">
                            <h4 class="card-title">от 129,60 ₽</h4>
                            <p class="card-text">Клинкерный кирпич</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="keramik.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/keram.png" alt="керамический">
                        <div class="card-body">
                            <h4 class="card-title">от 163,00 ₽</h4>
                            <p class="card-text">Блок керамический</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="pystotel.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/rad.png" alt="пустотелый">
                        <div class="card-body">
                            <h4 class="card-title">от 16,00 ₽</h4>
                            <p class="card-text">Кирпич рядовой пустотелый</p>
                        </div>
                    </div>

            </div>
            <div class="col-md-3 mb-1">
                <a href="giper.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/гиперпресо.png" alt="гиперпресо">
                        <div class="card-body">
                            <h4 class="card-title">от 29,70 ₽</h4>
                            <p class="card-text">Кирпич гиперпрессованный</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="silikat.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/silikat.png" alt="силикатный">
                        <div class="card-body">
                            <h4 class="card-title">от 38,47 ₽</h4>
                            <p class="card-text">Кирпич силикатный</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="plit.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/plita.png" alt="plita">
                        <div class="card-body">
                            <h4 class="card-title">от 7974 ₽</h4>
                            <p class="card-text">Плиты перекрытий</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-1">
                <a href="keram.html">
                    <div class="card kupit">
                        <img class="w-100" src="<?php echo e(url('img')); ?>/keramzitobetonnyj-blok.png" alt="дебил">
                        <div class="card-body">
                            <h4 class="card-title">от 143,00 ₽</h4>
                            <p class="card-text">Блок стеновой керамзитобетонный</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5">
    <h2 class="title">Фото наших изделий</h2>
    <div class="row my-5">
        <div class="col-md-4 mb-4">
            <img class="prosmotr w-100 " src="<?php echo e(url('img')); ?>/nasharabota (1).png" alt="Блоки">
        </div>
        <div class="col-md-4 mb-4">
            <img class="prosmotr w-100 " src="<?php echo e(url('img')); ?>/nasharabota (2).png" alt="Блоки">
        </div>
        <div class="col-md-4 mb-4">
            <img class="prosmotr w-100 " src="<?php echo e(url('img')); ?>/nasharabota (3).png" alt="Блоки">
        </div>
    </div>
</section>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5" id="mehanizm">
    <h2 class="title my-5">Механизм приобретения блоков</h2>
    <div class="row row-cols-xl-2 row-cols-md-1 my-5">
        <div class="col mb-4">
            <div class="card h-100 kakzakaz ">
                <div class="">
                    <object class="cifry" data="resources/svg/01.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="<?php echo e(url('img')); ?>/zakazat.png" alt="">
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
                    <object class="cifry" data="resources/svg/02.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="<?php echo e(url('img')); ?>/card.png" alt="">
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
                    <object class="cifry" data="resources/svg/03.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="<?php echo e(url('img')); ?>/izgotovlenie.png" alt="">
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
                    <object class="cifry" data="resources/svg/04.svg" type="image/svg+xml"></object>
                    <img class="imgmech" src="<?php echo e(url('img')); ?>/truck.png" alt="">
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
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> Блоки перевозятся на
                поддонах, упакованных в стрейч-пленку, которая защищает стройматериал
                от атмосферных осадков и механических повреждений во время погрузки, транспортировке и разгрузке
            </li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> При оформлении
                заказа следует
                указать точный адрес пункта доставки и телефон получателя груза.</li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> Товар загружается и
                отправляется со склада после того, как получатель товара подтвердит готовность его принять.</li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> В день доставки
                следует
                постоянно находиться на связи по указанному номеру телефона, чтобы водитель предварительно сообщил о
                прибытии машины. Если приемщик товара не доступен или не отвечает, дата поставки переносится на
                другое время.</li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> Въезд к месту
                выгрузки товара
                должен соответствовать габаритами грузового автомобиля. В ином случае, об этом следует сообщить
                менеджеру, оформляющему доставку.</li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> Если территория, где
                находится пункт доставки, охраняется, заказчик должен оформить пропуск или принять товар перед
                въездом на территорию.</li>
            <li class=""><object data="<?php echo e(url('svg')); ?>/spisok.svg" type="image/svg+xml"></object> Заказчику нужно
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
            <object data="<?php echo e(url('svg')); ?>/Zvonok.svg" type="image/svg+xml"></object>
            <a href="tel:+79293684677">+7 929 368-46-77</a>
        </div>
        <div class="kontakty_info d-flex">
            <object data="<?php echo e(url('svg')); ?>/Mail.svg" type="image/svg+xml"></object>
            <a href="mailto:avanstroy@mai.ru">avanstroy@mai.ru</a>
        </div>
    </div>
    <div class="map my-4">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad2a46b62740da2d52d9f168e1f6292206d69a3ebfa514993b3d073c3e3ba3c5f&amp;source=constructor" width="650" height="400" frameborder="0"></iframe>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\avanstroy\resources\views/index.blade.php ENDPATH**/ ?>