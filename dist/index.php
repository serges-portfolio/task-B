<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Азалия</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <link rel="icon" href="favicon.png"/>
    <link rel="stylesheet" href="css/0style.css"/>
</head>
<body>
<header class="header">
    <nav class="header__menu-container">
        <img src="./assets/logo.svg" alt="logo" class="header__logo">
        <input type="checkbox" class="header__checkbox" id="burger">
        <label class="header__burger" for="burger">menu</label>
        <ul class="header__navigation">
            <li class="header__link">
                <a href="#">Тарифы</a>
            </li>
            <li class="header__link">
                <a href="#">Наши работы</a>
            </li>
            <li class="header__link">
                <a href="#">Калькулятор</a>
            </li>
            <li class="header__link">
                <a href="#">Дизайнеры</a>
            </li>
            <li class="header__link">
                <a href="#">Отзывы</a>
            </li>
        </ul>
        <div class="header__call-us">
            <p class="header__number">+7(495)151-86-20</p>
            <button class="header__callback">Заказать звонок</button>
        </div>
    </nav>
    <section class="header__design-project">
        <div class="header__banner-container">
            <h1 class="header__banner">Дизайн-проект квартир</h1>
            <ul class="header__we-offer">
                <li class="header__offer-item">Бесплатный выезд дизайнера</li>
                <li class="header__offer-item">3 варианта планировки</li>
                <li class="header__offer-item">3D-визуализация всех помещений</li>
                <li class="header__offer-item">Полный комплект чертежей</li>
            </ul>
        </div>
        <div class="header__calculate-cost">
            <div class="header__range-container">
                <p class="header__indicate-area">Укажите площадь помещения</p>
                <span id="range-value" class="header__range-value"></span>
                <p class="header__quad-meter">м<sup>2</sup></p>
                <input type="range" min="1" max="300" step="1" value="150" oninput="myFunction()" id="rangeNumber"
                       class="header__slider">
            </div>
            <div class="header__rooms-quantity header__choice-parametres">
                <p class="header__indicate-quantity-rooms">Укажите количество комнат</p>
                <label for="Choice1">
                    <input type="radio" id="Choice1" name="quantity-of-rooms" value="1"><i></i>1
                </label>
                <label for="Choice2">
                    <input type="radio" id="Choice2" name="quantity-of-rooms" value="2" checked><i></i>2
                </label>
                <label for="Choice3">
                    <input type="radio" id="Choice3" name="quantity-of-rooms" value="3"><i></i>3
                </label>
                <label for="Choice4">
                    <input type="radio" id="Choice4" name="quantity-of-rooms" value="4-or-more"><i></i>4 и более
                </label>
            </div>
            <div class="header__packages header__choice-parametres">
                <p class="header__indicate-package -bottom">Выберите пакет</p>
                <label for="package1" class="header__package-label">
                    <input type="radio" id="package1" name="packages" onchange="Selected()" value="pack1" checked><i></i>Эскизный
                </label>
                <label for="package2" class="header__package-label">
                    <input type="radio" id="package2" name="packages" onchange="Selected()" value="pack2"><i></i>Рабочий
                </label>
                <label for="package3" class="header__package-label">
                    <input type="radio" id="package3" name="packages" value="pack3"><i></i>Стилистический
                </label>
                <label for="package4" class="header__package-label">
                    <input type="radio" id="package4" name="packages" value="pack4"><i></i>Стандартный
                </label>
                <label for="package5" class="header__package-label">
                    <input type="radio" id="package5" name="packages" value="pack5"><i></i>Полный
                </label>
                <div class="header__description-package">
                    <p class="header__package-on">Пакет включает:</p>
                    <div class="header__package-on-box box1" id="box1">
                        <svg class="header__triangle-svg-left">
                            <polygon points="0,8 11,0 11,16"
                                     fill="#f0f5f8" stroke="#f0f5f8" stroke-width="1" />
                        </svg>
                        <p>- Обмерный план</p>
                        <p>- План расстановки мебели</p>
                        <p>- Рабочая документация для
  строителей</p>
                        <p>- 3D - визуализация</p>
                    </div>
                    <!--<div class="header__package-on-box box2">
                    <svg class="header__triangle-svg-left">
                            <polygon points="0,8 11,0 11,16"
                                     fill="#f0f5f8" stroke="#f0f5f8" stroke-width="1" />
                        </svg>
                        <p>-1</p>
                        <p>-2</p>
                        <p>-3</p>
                    </div>-->
                    <!--<div class="header__package-on-box box3">
                    <svg class="header__triangle-svg-left">
                            <polygon points="0,8 11,0 11,16"
                                     fill="#f0f5f8" stroke="#f0f5f8" stroke-width="1" />
                        </svg>
                        <p>-4</p>
                        <p>-5</p>
                        <p>-6</p>
                    </div>
                    <div class="header__package-on-box box4">
                    <svg class="header__triangle-svg-left">
                            <polygon points="0,8 11,0 11,16"
                                     fill="#f0f5f8" stroke="#f0f5f8" stroke-width="1" />
                        </svg>
                        <p>-7</p>
                        <p>-8</p>
                        <p>-9</p>
                    </div>
                    <div class="header__package-on-box box5">
                    <svg class="header__triangle-svg-left">
                            <polygon points="0,8 11,0 11,16"
                                     fill="#f0f5f8" stroke="#f0f5f8" stroke-width="1" />
                        </svg>
                        <p>-10</p>
                        <p>-11</p>
                        <p>-12</p>
                    </div>-->
                </div>
            </div>
            <div class="header__submit-container">
                <button type="button">Рассчитать стоимость</button>
            </div>
        </div>
    </section>
</header>
<main class="our-work">
    <div class="our-work__advantages">
        <h2 class="our-work__banner">Наши преимущества</h2>
        <div class="our-work__advantages-container">

            <div class="our-work__advantage-item -first-item">
                <h5 class="our-work__advantage-name -first-name">Опыт дизайнеров от 5 лет</h5>
                <p class="our-work__item-description">В нашем штате 11 дизайнеров с опытом от 5 лет. Каждый имеет
                    профильное образование, участвует в выставках. Это позволяет
                    оставаться в курсе последних тенденций и создавать
                    современные интерьеры.
                </p>
            </div>
            <div class="our-work__advantage-item -second-item">
                <h5 class="our-work__advantage-name -second-name">Полное сопровождение проекта</h5>
                <p class="our-work__item-description">Создаем наглядный дизайн-проект с удобной планировкой,
                    понятными чертежами для вас и строителей. Помогаем подбирать
                    мебель и отделочные материалы. Во время ремонта общаемся со
                    строителями, чтобы реализовать проект максимально точно.
                </p>
            </div>
            <div class="our-work__advantage-item -third-item">
                <h5 class="our-work__advantage-name -third-name">Соблюдение сроков и стоимости</h5>
                <p class="our-work__item-description">Фиксируем в договоре объем работ, сроки и точную стоимость.
                    Оплату можно разбить на этапы. Перед началом работы вносится
                    предоплата.
                </p>
            </div>
            <div class="our-work__advantage-item -fourth-item">
                <h5 class="our-work__advantage-name -fourth-name">Онлайн-презентация проекта</h5>
                <p class="our-work__item-description">Отправляем отчёты на почту или мессенджеры, чтобы сэкономить
                    ваше время. Готовый проект получается сдать быстрее на 20%.
                </p>
            </div>
        </div>
    </div>


    <div class="our-work__isotope">
        <h2 class="our-work__complete-works">Выполненные работы</h2>
        <form action="" class="our-work__form-flats">
            <select name="type" class="our-work__flats-select">
                <option disabled selected>Квартиры</option>
                <option value="Гостиная">Гостиная</option>
                <option value="Спальня">Спальня</option>
                <option value="Детская">Детская</option>
                <option value="Ванная">Ванная</option>
                <option value="Кухня">Кухня</option>
            </select>
        </form>


<!--____slider-mobile_____-->
        <div class="our-work__slider-mobile-container">
        <div class="our-work__slider-mobile">
            <!--<button type="button" class="our-work__buttons-mobile our-work__previous-button-mobile">
            </button>
            <button type="button" class="our-work__buttons-mobile our-work__next-button-mobile">
            </button>-->
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works1.png" alt="flat1" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works2.png" alt="flat2" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works3.png" alt="flat3" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
        </div>
        <div class="our-work__slider-mobile">
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works4.png" alt="flat4" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works5.png" alt="flat5" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>

            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works6.png" alt="flat6" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
        </div>
        <div class="our-work__slider-mobile">
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works7.png" alt="flat7" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works8.png" alt="flat8" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
            <div class="our-work__grid-item our-work__mobile-item">
                <img src="./assets/works9.png" alt="flat9" class="our-work__flat">
                <div class="our-work__design-style">
                    <p>Дизайн квартиры в современном стиле</p>
                    <p>60 дней</p>
                    <p>72 000 руб.</p>
                </div>

            </div>
        </div>
        </div>
<!--___slider-mobile-END____-->



        <div class="our-work__filter">
            <a class="active our-work__filter-button" href="#" data-filter="*">Квартиры</a>
            <a class="our-work__filter-button" href="#" data-filter=".living">Гостиная</a>
            <a class="our-work__filter-button" href="#" data-filter=".sleep">Спальня</a>
            <a class="our-work__filter-button" href="#" data-filter=".child">Детская</a>
            <a class="our-work__filter-button" href="#" data-filter=".bathroom">Ванная</a>
            <a class="our-work__filter-button" href="#" data-filter=".kitchen">Кухня</a>
        </div>
        <div class="grid our-work__grid" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 400 } }'>
                <div class="grid-sizer our-work__grid-sizer">

                <div class="our-work__grid-item grid-item living">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span class="">Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works1.png" alt="flat1" class="our-work__flat">
                </div>
                <div class="our-work__grid-item grid-item living">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works2.png" alt="flat2" class="our-work__flat">
                </div>
                <div class="our-work__grid-item grid-item sleep">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works3.png" alt="flat3" class="our-work__flat">
                </div>


                <div class="our-work__grid-item grid-item sleep">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works4.png" alt="flat4" class="our-work__flat">
                </div>
                <div class="our-work__grid-item grid-item sleep">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works5.png" alt="flat5" class="our-work__flat">
                </div>

                <div class="our-work__grid-item grid-item child">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works6.png" alt="flat6" class="our-work__flat">
                </div>


                <div class="our-work__grid-item grid-item child">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works7.png" alt="flat7" class="our-work__flat">
                </div>
                <div class="our-work__grid-item grid-item bathroom">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works8.png" alt="flat8" class="our-work__flat">
                </div>
                <div class="our-work__grid-item grid-item kitchen">
                    <div class="our-work__design-style">
                        <div class="our-work__look">
                            <img src="./assets/see.svg" alt="see">
                            <span>Смотреть</span>
                        </div>
                        <p>Дизайн квартиры в современном стиле</p>
                        <p>60 дней</p>
                        <p>72 000 руб.</p>
                    </div>
                    <img src="./assets/works9.png" alt="flat9" class="our-work__flat">
                </div>

            </div>
        </div>

        <div class="our-work__popup-background" id="modal-window">

            <div class="our-work__popup-container">
                <button class="close">
                    <img src="./assets/close-popup.png" alt="close">
                </button>
                <div class="our-work__popup-slider">
                    <button type="button" class="our-work__buttons our-work__previous-button">
                    </button>
                    <button type="button" class="our-work__buttons our-work__next-button">
                    </button>
                    <div class="our-work__slider-item">
                        <img src="./assets/popup-slide1.png" alt="slide1">
                    </div>
                    <div class="our-work__slider-item">
                        <img src="./assets/popup-slide2.png" alt="slide2">
                    </div>
                    <div class="our-work__slider-item">
                        <img src="./assets/popup-slide1.png" alt="slide3">
                    </div>
                </div>
                <div class="our-work__popup-description">
                    <h6>Квартира в современном стиле</h6>
                    <p><b>Адрес:</b> Москва, ул. Новослободская, 49/2</p>
                    <p><b>Площадь:</b> 44м<sup>2</sup></p>
                    <p><b>Срок:</b> 25 дней</p>
                    <p><b>Стоимость проекта:</b> 88 000 руб.</p>
                    <p><b>Автор:</b> Марина Метелкина</p>
                    <p>“Изначально интерьер предполагался
                        светлым, спокойным. Но когда проект
                        запустился и занимались подборкой
                        материала, то он стал меняться с каждым
                        днем, становясь все ярче. На выходе
                        интерьер небольшой квартиры получился с
                        множеством цветов, что только порадовало
                        заказчиков.”</p>
                </div>
            </div>
        </div>
    </div>





    <div class="our-work__consult">
        <div class="our-work__consult-container">
            <div class="our-work__consultant-help">
                <img src="./assets/1help.png" alt="help-woman">
            </div>
            <div class="our-work__help-for-you">
                <h3 class="our-work__help-banner">Не знаете, как расставить мебель и какой стиль выбрать?</h3>
                <p>Получите бесплатную консультацию дизайнера.</p>
                <form action="main.php" class="our-work__help-form">
                    <input type="hidden" name="site_form_id" value="help-form">
                    <input type="hidden" name="sait" value="<?=$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>">
                    <input type="hidden" name="1_referer" value="<?= base64_encode($_SERVER['REFERER'])  ?>"/>
                    <input type="hidden" name="ip_lida" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                    <input type="hidden" name="utm_source" value="<?=$_GET[utm_source];?>">
                    <input type="hidden" name="utm_medium" value="<?=$_GET[utm_medium];?>">
                    <input type="hidden" name="utm_campaign" value="<?=$_GET[utm_campaign];?>">
                    <input type="hidden" name="utm_term" value="<?=$_GET[utm_term];?>">
                    <input type="hidden" name="utm_content" value="<?=$_GET[utm_content];?>">
                    <input type="hidden" name="utm_keyword" value="<?=$_GET[keyword];?>">
                    <input type="hidden" name="str_perehoda" value="<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>">
                    <input type="hidden" name="metka" value="<?=$_GET[utm_m];?>">
                    <label for=""></label>
                    <input type="text" name="ima_kl" placeholder="Введите ваше имя">
                    <input type="tel" name="telefon_lida" placeholder="Введите телефон">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>








    <div class="our-work__designers">

    </div>
</main>
<article>
</article>
<section class="questions">
</section>
<map name="">
</map>
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/isotope-settings.js"></script>
<script src="js/Range.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/carousel-settings.js"></script>
<!--
<script src="js/flats-slider.js"></script>
-->
<script src="js/popup.js"></script>
</body>
</html>
