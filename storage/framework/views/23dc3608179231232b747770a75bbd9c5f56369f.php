<!--шапка-->

<?php $__env->startSection('content'); ?>
<!-- _________________________________________________________________________________________________ -->
<section class="container my-5" id="onas">
    <div class="card"><!--карточка блока "О нас"-->
        <img class="man" src="<?php echo e(url('img')); ?>/chelic.jpg" alt="О нас"><!--изображение-->
        <div class="card-body">
            <h3 class="card-title my-4">О нашей компании</h3><!--Оглавление-->
            <p class="card-text onas"> «АванСтрой» предлагает ассортимент из более 500 кирпичей следующих видов:<!--основной текст-->
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
    <h2 class="title my-5">Наши изделия</h2>
    <div class="row"><!--сетка товаров-->
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="card kupit h-100"><!--карточка товара-->
                <img src="<?php echo e(url('img')); ?>/<?php echo e($product->img); ?>" alt="<?php echo e($product->name); ?>" class="card-img-top product_img"><!--картинка товара-->
                <div class="card-body">
                <h3 class="card-title mb-3"><?php echo e($product->name); ?></h3><!--имя товара-->
                    <h4>от <?php echo e($product->price); ?> ₽</h4><!--цена товара-->
                </div>
                <a href="<?php echo e(url('catalog/product')); ?>/<?php echo e($product->id); ?>" class="stretched-link"></a><!--ссылка на выбраный товар-->
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a class="btn btn-light btn-lg btn-block mt-2" href="<?php echo e(url('catalog')); ?>" role="button">Каталог наших изделий</a><!--кнопка на весь ассортитмент товара-->
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
                    <object class="cifry" data="<?php echo e(url('svg')); ?>/01.svg" type="image/svg+xml"></object>
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
                    <object class="cifry" data="<?php echo e(url('svg')); ?>/02.svg" type="image/svg+xml"></object>
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
                    <object class="cifry" data="<?php echo e(url('svg')); ?>/03.svg" type="image/svg+xml"></object>
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
                    <object class="cifry" data="<?php echo e(url('svg')); ?>/04.svg" type="image/svg+xml"></object>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\avanstroy\resources\views/about.blade.php ENDPATH**/ ?>