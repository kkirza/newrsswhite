<!doctype html><html lang="ru">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Главная</title>
</head>

<body id="body_id">
<!--
<div class="index_main_preloader" id="index_main_preloader">
    <div class="preloader_hidden_zone_1">
    <div class="index_preloader_black_logo_hider" id="index_preloader_black_logo_hider"></div>
    <img src="img/logo_black.png" class="preloader_logo_black" id="preloader_logo_black">
    </div>
    <div class="index_black_preloader_zone" id="index_black_preloader_zone">
        <div class="preloader_hidden_zone_1">
            <div class="index_preloader_black_logo_hider_2" id="index_preloader_black_logo_hider_2"></div>
            <img src="img/logo_white.png" class="preloader_logo_black" id="preloader_logo_white">
        </div>
    </div>
</div>-->
<?php require('req/menu.php') ?>
<?php require('req/popup.php') ?>
<div class="main_main_area background_fixed">
    <div class="flex_level flex_level_desktop">
        <img src="img/logo_white.png" class="logo_main">
        <?php require ('req/upMenu.php')?>
    </div>
    <div class="main_main_area_text_area" style="margin-left: 3vw;">
        <div style="font-size: 6vw;font-family: 'Montserrat_Light_Plus_Weight'; font-weight: 100; color: white; margin-top: 8vw">ШКОЛА</div>
        <div style="font-size: 10vw;font-family: 'Montserrat_Black'; font-weight: 900; color: white; margin-top: -3vw">ВОКАЛА</div>
        <div style="font-size: 10vw;font-family: 'Montserrat_Black'; font-weight: 900; color: white; margin-top: -4.5vw">И МУЗЫКИ</div>
        <div style="font-size: 4vw;font-family: 'Montserrat_Light'; font-weight: 100; color: white; margin-top: -3vw">Для взрослых и детей</div>
    </div>

    <div class="main_main_area_first_lesson">
        <div class="main_main_area_first_lesson_text">Первый урок<br> БЕСПЛАТНО</div>
        <form style="text-align: right">
            <input placeholder="Телефон" id="phone" style="height: 3vw; width: 20vw; border-radius: 10px; border: none; font-size: 1.5vw; font-weight: 100; margin-top: 1vw;text-align: center; -webkit-appearance: none;">
            <br>
            <button class="all_green_button_form light_Montserrat_plus" >Оставить заявку</button>
        </form>
    </div>
</div>


    <div class="">
        <img src="img/index_what_is_rockstar.png" width="70%" height="auto" style="margin-left: 15vw; margin-top: 2vw;position: relative; z-index: 3; pointer-events: none" >
        <div class="flex_level" style="margin-top: -6vw">
            <div>
                <div class="header_all stroke hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ЧТО ТАКОЕ</span></div>
                <div class="header_all hidden_overflow" style="margin-top: -2.2vw; color: #E21D2F"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ROCKSTAR</span></div>
                <div class="header_all red_stroke hidden_overflow" style="margin-top: -2.2vw; color: #E21D2F"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ROCKSTAR</span></div>
                <div class="header_all red_stroke hidden_overflow" style="margin-top: -2.2vw; color: #E21D2F"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ROCKSTAR</span></div>
            </div>
            <div>
                <div class="header_all stroke hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ЧТО ТАКОЕ</span></div>
                <div class="header_all stroke hidden_overflow" style="margin-top: -2.2vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ЧТО ТАКОЕ</span></div>
                <div class="header_all stroke hidden_overflow" style="margin-top: -2.2vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ЧТО ТАКОЕ</span></div>
                <div class="header_all stroke hidden_overflow" style="margin-top: -2.2vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ЧТО ТАКОЕ</span></div>
            </div>
        </div>
        <img src="img/index_what_is_rockstar_cards.png" width="50%" height="auto" style="margin-left: 25vw; margin-top: -10vw; pointer-events: none; position: relative; z-index: 20">
        <div style="width: 100%; position: relative;overflow: hidden">
        <img src="img/index_what_is_rockstar_collage.png" width="100%" height="auto" style="margin-left: 35vw; pointer-events: none">
            <img src="img/stars.png" width="10%" height="auto" style="position: absolute; top: 7vw; margin-left: 2vw">
            <div class="book_Futura" style="width: 40vw; position: absolute; top: 10vw; margin-left: 2vw">"Хочу сказать ребятам из школы огромное спасибо за те позитивные эмоции и заряд энергии, которые они дарят каждому своему ученику! Рада, что однажды я к вам пришла"</div>
            <img src="img/index_what_is_rockstar_down_stars.png" width="10%" height="auto" style="position: absolute; top: 20vw; margin-left: 2vw">
        </div>
        <img src="img/index_what_is_rockstar_cards_2_n.png" width="60%" height="auto" style="margin-left: 2vw; margin-top: -14vw; position: relative; z-index: 4">
        <div class="index_what_is_rockstar_first_song background_options background_fixed" style="position: relative">
            <div class="header_all" style="color: #E21D2F; margin-left: 1vw">НЕ ВАЖНО</div>
            <img src="img/cross_on_word.svg" class="position_absolute" style="width: 10vw; height: auto; top: 8vw; left: 27vw">
            <img src="img/cross_on_word.svg" class="position_absolute" style="width: 15vw; height: auto; top: 11vw; left: 12vw">
            <div class="light_Montserrat" style="font-size: 4vw; color: white; line-height: 95%; margin-left: 1vw; text-transform: uppercase; margin-top: -1vw">сколько тебе лет <br>и твой уровень </div>
            <div class="header_all" style="color: white; margin-left: 1vw; margin-top: 16vw;text-transform: uppercase">Через 4 занятия</div>
            <div class="light_Montserrat" style="font-size: 4vw; color: white; line-height: 95%; margin-left: 1vw; text-transform: uppercase; margin-top: -1vw">ты сыграешь свою<br><span style="font-weight: 800; color: #E21D2F">ПЕРВУЮ ПЕСНЮ</span></div>
            <img src="img/fire-joypixels.gif" width="25%" height="auto" style="position: absolute; right: 4vw; top: 22vw">
        </div>
    </div>

<div style="text-align: center; margin-top: 5vw" class="mobile_version">
    <div class="header_all">ЧТО ТАКОЕ</div>
    <div class="header_all color_red" style="color: #E21D2F; margin-top: -4vw">ROCKSTAR</div>

    <div class="margin_center" style="width: 80%; margin-top: 5vw">
    <div class="book_Futura" style="font-size: 7vw; line-height: 90%;">место без границ, где ты можешь проявиться и где тебя принимают</div>
        <div class="light_Futura" style="font-size: 6vw; margin-top: 4vw; line-height: 90%">Место, где нет белого верха и черного низа, но есть понимание тебя и того, что ты любишь. Место без границ, с полным погружением в любимое дело, это и есть <span style="color: #E21D2F; font-size: 6vw;" class="book_Futura">ШКОЛА РОКА - новый взгляд на обучение музыке.</span> </div>
        <div class="light_Futura" style="font-size: 6vw; margin-top: 4vw; line-height: 90%">Место, в котором вот уже 10 лет дружат люди и музыка. Место, где никто не захейтит твой музыкальный вкус, правда, может слегка направит его в нужное русло.</div>
    </div>
</div>


<div>
    <div>
    <div class="header_all stroke" style="margin-left: 1vw;margin-top: 4vw; overflow: hidden;"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">КОМУ</span></div>
    <div class="header_all stroke hidden_overflow" style="margin-left: 1vw;margin-top: -2.2vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ПОДОЙДЕТ</span></div>
        <div class="header_all hidden_overflow" style="margin-left: 1vw;margin-top: -2.2vw; color: #E21D2F; position: relative; z-index: 3"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">НАША ШКОЛА</span></div>
    </div>
    <img src="img/picture_guitar.png" width="30%" height="auto" style="margin-left: 50vw; margin-top: -15vw">
    <div class="flex_level" style="margin-top: -8vw; position: relative; z-index: 4">
        <div class="index_our_school_selector_left" id="index_our_school_selector_left" style="position: relative">
            <div class="cursor_pointer_zone" id="index_our_school_selector_left_cursor_pointer_zone"></div>
            <div class="blacker" id="index_our_school_selector_left_blacker" ></div>
            <div id="index_our_school_selector_left_prev_text" class="index_our_school_selector_left_prev_text">
            <div class="light_Montserrat" style="text-align: center; margin-top: 2vw"><span style="border-bottom: solid white .1vw; color: white">СМОТРЕТЬ</span></div>
            <div class="bold_Montserrat" style="transform: rotate(-90deg); font-size: 4vw; color: white; width: 25vw; margin-top: 27vw; margin-left: -5vw"><span style="color: #E21D2F">Л</span>ЮБИТЕЛИ</div>
            </div>
            <div id="index_our_school_selector_left_text" class="index_our_school_selector_left_text" style="position: absolute">
                <div class="black_Montserrat" style="color: white; font-size: 4vw; line-height: 90%; margin-left: 2vw; margin-top: 13vw">ЛЮБИТЕЛИ</div>
                <div class="book_Futura" style="margin-left: 2vw; color: white; width: 80%; margin-top: 1.5vw">Поможем, если ты уже когда-то занимался музыкой, но в процессе столкнулся с трудностями. Не можешь освоить какой-то технический элемент или не понимаешь, как разобраться в теории,чтобы продвинуться дальше.
                    <br><br>
                    Разберем все твои вопросы и поможем выйти на новый уровень.</div>
                <div class="light_Futura hover_pointer popup_open_button" style="margin-top: 3vw; margin-left: 2vw"><span class="all_green_button">Хочу на бесплатный урок</span></div>
            </div>
        </div>
        <div class="index_our_school_selector_middle" id="index_our_school_selector_middle" style="position: relative">
            <div class="cursor_pointer_zone" id="index_our_school_selector_middle_cursor_pointer_zone"></div>
            <div id="index_our_school_selector_middle_blacker" class="blacker"></div>
            <div id="index_our_school_selector_middle_prev_text" class="index_our_school_selector_middle_prev_text">
                <div class="light_Montserrat" style="text-align: center; margin-top: 2vw"><span style="border-bottom: solid white .1vw; color: white">СМОТРЕТЬ</span></div>
                <div class="bold_Montserrat" style="transform: rotate(-90deg); font-size: 4vw; color: white; width: 36vw; margin-top: 22.8vw; margin-left: -11vw"><span style="color: #E21D2F">Н</span>ОВИЧКИ</div>
            </div>
                <div id="index_our_school_selector_middle_text" class="index_our_school_selector_middle_text" style=" z-index: 3">
            <div class="black_Montserrat" style="color: white; font-size: 4vw; line-height: 90%; margin-left: 2vw; margin-top: 13vw">НОВИЧКИ</div>
            <div class="book_Futura" style="margin-left: 2vw; color: white; width: 80%; margin-top: 1.5vw">Каждый учитель в нашей школе знает, как от самых основ привести  ученика к уверенному владению навыком и выступлениям на 300+ человек на наших отчетниках. И нам не важно, сколько тебе лет.<br><br> Обучаемся постепенно и от простых вещей переходим к более сложным. Из твоих любимых песен выберем ту, которую ты можешь освоить прямо сейчас и начинаем обучение с нее.</div>
                <div class="light_Futura hover_pointer popup_open_button" style="margin-top: 3vw; margin-left: 2vw"><span class="all_green_button">Хочу на бесплатный урок</span></div>
                </div>
        </div>

        <div class="index_our_school_selector_right"  id="index_our_school_selector_right" >
            <div class="cursor_pointer_zone" id="index_our_school_selector_right_cursor_pointer_zone"></div>
            <div id="index_our_school_selector_right_blacker" class="blacker"></div>
            <div id="index_our_school_selector_right_prev_text" class="index_our_school_selector_right_prev_text">
            <div class="light_Montserrat" style="text-align: center; margin-top: 2vw"><span style="border-bottom: solid white .1vw; color: white">СМОТРЕТЬ</span></div>
            <div class="bold_Montserrat" style="transform: rotate(-90deg); font-size: 4vw; color: white; width: 40vw; margin-top: 21vw; margin-left: -12vw"><span style="color: #E21D2F">П</span>РОФИ</div>
            </div>
            <div id="index_our_school_selector_right_text" class="index_our_school_selector_right_text" style="z-index: 3">
                <div class="black_Montserrat" style="color: white; font-size: 4vw; line-height: 90%; margin-left: 2vw; margin-top: 13vw">ПРОФИ</div>
                <div class="book_Futura" style="margin-left: 2vw; color: white; width: 80%; margin-top: 1.5vw">Каждый из учителей школы может дать специальные знания людям, которые занимаются музыкой уже давно. Закрыть теоретические “пробелы”, отработать разные направления, сложные технические приемы и импровизацию.
                    <br><br>
                    Опытные музыканты с нами становятся более грамотными.</div>
                <div class="light_Futura hover_pointer popup_open_button" style="margin-top: 3vw; margin-left: 2vw"><span class="all_green_button">Хочу на бесплатный урок</span></div>
            </div>
            </div>
    </div>
    <div style="overflow: hidden; margin-top: -4vw">
    <img src="img/index_our_school_posters.png"   class="index_our_school_posters">

</div>
<div>
    <div class="header_all stroke hidden_overflow" style=" text-align: center; margin-top: -4vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">НА ЗАНЯТИЯХ</span></div>
    <div class="header_all hidden_overflow" style="margin-top: -2.2vw; text-align: center; color: #E21D2F"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ТЫ ПОЛУЧИШЬ</span></div>

    <div style="width: 75%; margin-left: auto; margin-right: auto;" class="step_down_2">
        <div class="flex_level medium_Montserrat" style="font-size: 2.8vw; color: gray; border-bottom: solid gray .2vw">
            <div class="index_you_learn_selector_vocal index_you_learn_selector_cursor" id="index_you_learn_selector_vocal">ВОКАЛ</div>
            <div class="index_you_learn_selector_guitar index_you_learn_selector_cursor" id="index_you_learn_selector_guitar">ГИТАРА</div>
            <div class="index_you_learn_selector_drums index_you_learn_selector_cursor" id="index_you_learn_selector_drums">УДАРНЫЕ</div>
            <div class="index_you_learn_selector_keys index_you_learn_selector_cursor" id="index_you_learn_selector_keys">КЛАВИШНЫЕ</div>
        </div>
    </div>
    <div class="container_80 step_down_2 background_net background_options padding_bottom_2_vw" >
        <div class="you_learn_content_vocal flex_level you_learn_content_selector" id="you_learn_content_vocal" style="align-items: center;">
            <img src="img/you_learn_cards/vocal_card_1.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/vocal_card_2.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/vocal_card_3.png" class="you_learn_cards_sizes">
        </div>
        <div class="you_learn_content_guitar flex_level you_learn_content_selector" id="you_learn_content_guitar" style="align-items: center;">
            <img src="img/you_learn_cards/guitar_card_1.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/guitar_card_2.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/guitar_card_3.png" class="you_learn_cards_sizes">
        </div>
        <div class="you_learn_content_keys flex_level you_learn_content_selector" id="you_learn_content_keys" style="align-items: center;">
            <img src="img/you_learn_cards/keys_card_1.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/keys_card_2.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/keys_card_3.png" class="you_learn_cards_sizes">
        </div>
        <div class="you_learn_content_drums flex_level you_learn_content_selector" id="you_learn_content_drums" style="align-items: center;">
            <img src="img/you_learn_cards/drums_card_1.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/drums_card_2.png" class="you_learn_cards_sizes">
            <img src="img/you_learn_cards/drums_card_3.png" class="you_learn_cards_sizes">
        </div>
    </div>
    <div class="light_Futura step_down_3" style=" text-align: center;"><span  class="all_green_button popup_open_button">Попробовать бесплатно</span></div>
</div>
<?php require('req/quiz.php') ?>

<div class="index_we_love_music_like_you" style="text-align: center">
    <div class="light_Montserrat" style="font-size: 4vw; color: white; padding-top: 30vw">МЫ ЛЮБИМ МУЗЫКУ</div>
    <div class="header_all" style="color: #E21D2F; margin-top: -2.2vw">ТАКЖЕ КАК И ВЫ</div>
</div>
<div>
    <div class="header_all" style="margin-left: 2vw">
        <div class="stroke hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">НАШИ</span></div>
        <div class="hidden_overflow" style="color: #E21D2F; margin-top: -2.2vw"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">КУРСЫ</span></div>
        <div class="light_Futura" style="position: absolute; right: 12vw; margin-top: -4vw">Выбери свой путь!</div>
    </div>
    <div class="index_directions_of_study" style="margin-top: 1vw">
        <div class="flex_level" style="width: 80%; margin-left: auto; margin-right: auto; padding-top: 2vw">
        <div class="index_directions_of_study_keys_card">
            <a style="position: absolute; width: 100%; height: 100%; z-index: 1" href="courses_keys.php"></a>
            <div class="index_directions_of_study_keys_card_tape"></div>
            <div class="black_Montserrat index_directions_of_study_card_name">КЛАВИШНЫЕ</div>
            <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block; position: relative; z-index: 2" href="courses_keys.php"><span class="green_button_main_option">Подробнее</span></a>
        </div>
            <div class="index_directions_of_study_guitar_card_re background_options">
                <a style="position: absolute; width: 100%; height: 100%; z-index: 1" href="courses_guitar.php"></a>
                <div class="index_directions_of_study_keys_card_tape_2"></div>
                <div class="black_Montserrat index_directions_of_study_card_name">ГИТАРА</div>
                <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block;position: relative; z-index: 2" href="courses_guitar.php"><span class="green_button_main_option">Подробнее</span></a>
            </div>
            <div class="index_directions_of_study_vocal_card">
                <a style="position: absolute; width: 100%; height: 100%; z-index: 1" href="courses_vocal.php"></a>
                <div class="index_directions_of_study_keys_card_tape_2" style="top: 12vw; right: -7vw; transform: rotate(90deg); width: 13vw"></div>
                <div class="black_Montserrat index_directions_of_study_card_name">ВОКАЛ</div>
                <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block; position: relative; z-index: 2" href="courses_vocal.php"><span class="green_button_main_option">Подробнее</span></a>
            </div>
        </div>
        <div class="flex_level" style="width: 80%; margin-left: auto; margin-right: auto; padding-top: 2vw; padding-bottom: 2vw">
            <div class="index_directions_of_study_keys_card" style="visibility: hidden">
                <div class="index_directions_of_study_keys_card_tape"></div>
                <div class="black_Montserrat index_directions_of_study_card_name">КЛАВИШНЫЕ</div>
                <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block;" href="#"><span class="green_button_main_option">Подробнее</span></a>
            </div>
            <div class="index_directions_of_study_extreme_card">
                <a style="position: absolute; width: 100%; height: 100%; z-index: 1" href="courses_vocal.php"></a>
                <div class="index_directions_of_study_keys_card_tape_2" style="left: -13vw; top: 12vw; width: 10vw; height: 5vw; transform: rotate(-70deg)"></div>
                <div class="index_directions_of_study_keys_card_tape_2" style="right: -4vw; top: 25vw; width: 8vw; height: 4vw; transform: rotate(-110deg)"></div>
                <div class="black_Montserrat index_directions_of_study_card_name">ЭКСТРИМ</div>
                <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block; position: relative; z-index: 2" href="courses_vocal.php"><span class="green_button_main_option">Подробнее</span></a>
            </div>
            <div class="index_directions_of_study_drums_card">
                <a style="position: absolute; width: 100%; height: 100%; z-index: 1" href="courses_drums.php"></a>
                <div class="index_directions_of_study_keys_card_tape" style="top: 12vw; left: -10vw; transform: rotate(90deg); width: 13vw"></div>
                <div class="black_Montserrat index_directions_of_study_card_name">БАРАБАНЫ</div>
                <a class="light_Futura" style="margin-top: 2vw; text-align: center; display: block; position: relative; z-index: 2" href="courses_drums.php"><span class="green_button_main_option">Подробнее</span></a>
            </div>
        </div>
    </div>
</div>
<div class="form_with_girl">
    <div class="flex_level">
        <div>
            <div class="book_Futura" style="color: white; line-height: 90%; font-size: 4vw; margin-left: 4vw; margin-top: 3vw; text-transform: uppercase">
                запишись на<br> <span style="color: #FFF738">бесплатное<br> индивидуальное</span><br> занятие
            </div>
            <div class="light_Futura" style="color: white; margin-left: 4vw; margin-top: 2vw">Перезвоним, чтобы помочь<br> с выбором курса и преподавателя</div>
        </div>
        <form style="margin-top: 8vw; margin-right: 19vw">
            <input placeholder="Имя" style="height: 3vw; width: 20vw; border-radius: 10px; border: none; font-size: 1.5vw; font-weight: 100; margin-top: 1vw; text-align: center"><br>
            <input placeholder="Телефон" style="height: 3vw; width: 20vw; border-radius: 10px; border: none; font-size: 1.5vw; font-weight: 100; margin-top: 1vw; text-align: center">
            <br>
            <button class="light_Futura green_button_main_option" style="margin-top: 1vw; text-align: center; border: none">Оставить заявку</button>
        </form>
    </div>
</div>

<div class="index_top_concerts background_fixed" >
    <div style="margin-left: 2vw; position: relative">
    <div class="medium_Montserrat" style="font-size: 4vw; color: white; padding-top: 5vw">ДЕЛАЕМ ТОПОВЫЕ<br> ОТЧЕТНЫЕ КОНЦЕРТЫ</div>
    <div class="header_all" style="color: white">А НЕ "ДЛЯ ГАЛОЧКИ"</div>
        <div class="flex_level">
    <div class="medium_Montserrat" style="color: white; margin-top: 2vw"> Наши отчетники - это масштабные концерты на 300+ <br> человек. Мы проводим их на площадках, на которых во <br> время туров выступают рок звезды</div>
            <a class="light_Futura no_anim_href" style="position: absolute; text-align: center; display: block; right: 40%; top: 40vw" href="https://vk.com/rockstarsschool" target="_blank"><span class="green_button_main_option">Смотреть ближайшие события</span></a>
        </div>
    </div>
</div>

<div style="position: relative">
<div class=" header_all" style="margin-left: 2vw; margin-top: 4vw">
    <div class="stroke hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">НАШИ</span></div>
    <div style="color: #E21D2F; margin-top: -2.2vw" class="hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">УЧИТЕЛЯ</span></div>
    <div class="light_Futura" style="position: absolute; right: 12vw; margin-top: -7.4vw">Подберем учителя, с которым вы<br>
        будете понимать друг друга с<br>
        полуслова, чтобы обучение шло легко.</div>
</div>
    <div class="flex_level" style="width: 95%; margin-left: auto; margin-right: auto; margin-top: 5vw">
        <div class="teacher_card">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_ivanov_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">НИКИТА<br> ИВАНОВ</div>
                <div class="light_Futura teacher_card_info_text">«Мой творческий путь провёл меня через ведущих педагогов Алтайского края, Новосибирска и Москвы, брал мастер классы у преподавателей академии им. Гнесеных. Это помогло взять всё самое лучшее от каждого педагога и создать свою уникальную методику преподавания.»</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
        <div class="teacher_card">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_tarasov_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">АЛЕКСАНДР<br> ТАРАСОВ</div>
                <div class="light_Futura teacher_card_info_text">«Успех гарантирую всем новичкам, конечно если будете делать домашку. Тем, кто уже начал играть, помогу справиться с застоем в технике, научу осознанно играть чужие соло и продуманно создавать свои».</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
        <div class="teacher_card">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_kalachina_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">ЕЛИЗАВЕТА<br> КАЛАЧИНА</div>
                <div class="light_Futura teacher_card_info_text">«Привет, меня зовут Лиза! С музыкой я знакома с самого детства, есть фотография, где пою в шнур от наушников. Вы можете предположить, что я даю уроки по вокалу, но нет, уже 10 лет я связана с фортепиано. Ускоренная классическая школа и потом эстрадно-джазовое отделение в музыкальном колледже.»</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
    </div>
    <div class="flex_level" style="width: 95%; margin-left: auto; margin-right: auto; margin-top: 5vw">
        <div class="teacher_card_ivanov position_relative">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_popov_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">АЛЕКСЕЙ<br> ПОПОВ</div>
                <div class="light_Futura teacher_card_info_text">«Сейчас кумиров много, но основные это: Mario Duplantier, Krimh Kerim, Sebastian Lancer, George Kollias, Eric Moore, Jorge Garrido. Смотря на них, думаешь не о том «как он это делает?», а «как научиться так же». Всё просто! Берешь палочки и вперёд. Главное понять, что делать и как делать это правильно. Для этого и нужен педагог, а остальное уже за малым — усердие и тренировки.»</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
        <div class="teacher_card">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_kuznecova_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">ИРИНА<br> КУЗНЕЦОВА</div>
                <div class="light_Futura teacher_card_info_text">«Обожаю музыку в разных проявлениях! Особенно искусство вокала как чистого, так и экстрима. Считаю, что человек должен постоянно развиваться и самосовершенствоваться в поставленном перед ним деле. Нужно «гореть» тем, что делаешь, чтобы чего – то достичь!.»</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
        <div class="teacher_card">
            <a href="teachers.php" class="Embedded_link_100"></a>
            <div class="teacher_card_karpova_photo teacher_card_size background_options"></div>
            <div class="teacher_card_info background_options">
                <div class="header_all teacher_card_info_name">ВЕРОНИКА<br> КАРПОВА</div>
                <div class="light_Futura teacher_card_info_text">«Куда бы ни заводили меня дороги жизни, они всегда приводили к моей судьбе — музыке. Делиться не только знаниями, но и любовью к этому искусству с другими — истинное счастье для меня. И я живой пример того, что лишь желание, упорство и постоянство в этой сфере дают невероятные результаты, превосходящие любые ожидания. Стоит лишь начать😉»</div>
                <div class="teacher_card_info_blur"></div>
                <a href="teachers.php" class="light_Futura teacher_card_info_learn_more" style="z-index: 3">Подробнее →</a>
            </div>
        </div>
    </div>
    <div class="flex_level" style="width: 95%; margin-left: auto; margin-right: auto; margin-top: 5vw">
        <div class="teacher_card">
            <div class="teacher_card_gilev_photo teacher_card_size background_options"></div>
        </div>
        <div class="teacher_card">
            <div class="teacher_card_nikolaeva_photo teacher_card_size background_options"></div>
        </div>
        <div class="teacher_card">
            <div class="teacher_card_smirnova_photo teacher_card_size background_options"></div>
        </div>
    </div>
    <div class="learn_more_plus_link" style="position: absolute">
        <a href="teachers.php" class="learn_more_plus_link_plus">+</a>
        <div class="book_Futura" style="text-align: center; margin-top: 1vw">ПОСМОТРЕТЬ ОСТАЛЬНЫХ<br> НАСТАВНИКОВ</div>
    </div>
    <div class="big_white_blure"></div>
</div>

<div>
    <div class="header_all" style="margin-left: 2vw">
        <div style="margin-top: 4vw" class="hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ТАК УЧАТ</span></div>
        <div style="margin-top: -2.2vw" class="hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">ТОЛЬКО</span></div>
        <div style="color: #E21D2F; margin-top: -2.2vw" class="hidden_overflow"><span style="display: block" data-aos="accordion" data-aos-easing="ease-out-cubic" data-aos-duration="5000" data-aos-anchor-placement="bottom-bottom">В ROCKSTAR</span></div>
    </div>
    <div class="slider_wrapper">
    <div class="slider">
        <div style="display: flex">
            <div class="slider_1_page slider_options background_options"></div>
            <div class="slider_2_page slider_options background_options"><div class="slider_page_arrow_hover_right_1" style="width: 100%;height: 100%"></div></div>
            <div class="slider_3_page slider_options background_options"><div class="slider_page_arrow_hover_right_2" style="width: 100%;height: 100%"></div></div>
            <div class="slider_4_page slider_options background_options"><div class="slider_page_arrow_hover_right_3" style="width: 100%;height: 100%"></div></div>
            <div class="slider_5_page background_options slider_5_page_options" ><div class="slider_page_arrow_hover_right_4" style="width: 100%;height: 100%"></div></div>
        </div>
    </div>
    </div>

</div>
<div class="Olia_form">
    <img src="img/Olia_cut.png" width="30%" height="auto" style="margin-left: 5vw; position: absolute">
    <div class="Olia_form_back_ground"></div>
    <div class="Olia_form_content">
        <div class="light_Montserrat Olia_form_content_headline">ЗАПИСАТЬСЯ</div>
        <div class="light_Montserrat Olia_form_content_text">ИЛИ ПОЛУЧИТЬ БЕСПЛАТНУЮ <br> КОНСУЛЬТАЦИЮ И ПОМОЩЬ<br> С ПОДБОРОМ ПРЕПОДАВАТЕЛЯ</div>
        <form style="margin-top: 2vw">
            <div class="light_Montserrat" style="color: white">Направление</div>
            <select style="height: 2vw; width: 27vw; border-radius: 10px; border: none; font-size: 1.3vw; font-weight: 100; margin-top: 1vw; text-align: center; color: gray">
                <option>НЕ УВЕРЕН</option>
                <option>ВОКАЛ</option>
                <option>ГИТАРА</option>
                <option>ЭКСТРИМ</option>
                <option>УДАРНЫЕ</option>
                <option>КЛАВИШНЫЕ</option>
            </select>
            <div class="light_Montserrat" style="color: white; margin-top: .5vw">Телефон</div>
            <input style="height: 2vw; width: 27vw; border-radius: 10px; border: none; font-size: 1.3vw; font-weight: 100; margin-top: .5vw; text-align: center; color: gray">

            <br>
            <button class="light_Futura green_button_main_option" style="margin-top: 1vw; text-align: center; border: none">Оставить заявку</button>
        </form>
    </div>
</div>

<?php require('req/vidgets.php') ?>
    <?php require('req/footer.php') ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
        let body_id = document.getElementById('body_id');
        /*body_id.classList.add('hidden_overflow');
        let index_preloader_black_logo_hider = document.getElementById('index_preloader_black_logo_hider');
        let preloader_logo_black = document.getElementById('preloader_logo_black');
        let index_black_preloader_zone = document.getElementById('index_black_preloader_zone');
        let preloader_logo_white = document.getElementById('preloader_logo_white');
        let index_preloader_black_logo_hider_2 = document.getElementById('index_preloader_black_logo_hider_2');
        let index_main_preloader = document.getElementById('index_main_preloader');
        setTimeout("index_preloader_black_logo_hider.classList.add('index_preloader_black_logo_hider_hide')", 1000);
        setTimeout("preloader_logo_black.classList.add('opacity_1_no_tran')", 1420);
        setTimeout("index_preloader_black_logo_hider.classList.add('index_preloader_black_logo_hider_hide_2')", 1490);
        setTimeout("index_black_preloader_zone.classList.add('index_black_preloader_zone_full')", 2890);
        setTimeout("index_preloader_black_logo_hider_2.classList.add('index_preloader_black_logo_hider_hide')", 3500);
        setTimeout("preloader_logo_white.classList.add('opacity_1_no_tran')", 3820);
        setTimeout("index_preloader_black_logo_hider_2.classList.add('index_preloader_black_logo_hider_hide_2')", 4100);
        setTimeout("index_black_preloader_zone.classList.add('opacity_0')", 5000);
        setTimeout("index_preloader_black_logo_hider.classList.remove('index_preloader_black_logo_hider_hide_2')", 5690);
        setTimeout("preloader_logo_black.classList.remove('opacity_1_no_tran')", 6192);
        setTimeout("index_preloader_black_logo_hider.classList.remove('index_preloader_black_logo_hider_hide')", 6300);
        setTimeout("index_main_preloader.classList.add('opacity_0')", 7000);
        setTimeout("index_main_preloader.classList.add('display_none')", 7500);
        setTimeout("body_id.classList.remove('hidden_overflow')", 7501);*/
</script>
<script>

    $('.you_learn_content_selector').addClass('display_none');
    document.getElementById('index_you_learn_selector_vocal').classList.add('index_you_learn_selector_active');
    document.getElementById('you_learn_content_vocal').classList.remove('display_none');

    $('.index_you_learn_selector_cursor').click(function(){
        $('.index_you_learn_selector_cursor').removeClass('index_you_learn_selector_active');
        $(this).addClass('index_you_learn_selector_active');
        if(document.getElementById('index_you_learn_selector_vocal').classList.contains('index_you_learn_selector_active')){
            $('.you_learn_content_selector').addClass('display_none');
            document.getElementById('you_learn_content_vocal').classList.remove('display_none');
        }
        if(document.getElementById('index_you_learn_selector_guitar').classList.contains('index_you_learn_selector_active')){
            $('.you_learn_content_selector').addClass('display_none');
            document.getElementById('you_learn_content_guitar').classList.remove('display_none');
        }
        if(document.getElementById('index_you_learn_selector_drums').classList.contains('index_you_learn_selector_active')){
            $('.you_learn_content_selector').addClass('display_none');
            document.getElementById('you_learn_content_drums').classList.remove('display_none');
        }
        if(document.getElementById('index_you_learn_selector_keys').classList.contains('index_you_learn_selector_active')){
            $('.you_learn_content_selector').addClass('display_none');
            document.getElementById('you_learn_content_keys').classList.remove('display_none');
        }
    });
</script>
<script>
    document.getElementById('index_our_school_selector_middle_blacker').classList.add('opacity_1');
    document.getElementById('index_our_school_selector_middle_cursor_pointer_zone').classList.add('display_none');
    document.getElementById('index_our_school_selector_right_text').classList.add('display_none');
    document.getElementById('index_our_school_selector_left_cursor_pointer_zone').onclick = function() {document.getElementById('index_our_school_selector_right_cursor_pointer_zone').classList.remove('display_none');document.getElementById('index_our_school_selector_middle_cursor_pointer_zone').classList.remove('display_none');document.getElementById('index_our_school_selector_right').classList.remove('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle_prev_text').classList.add('opacity_1');document.getElementById('index_our_school_selector_left_cursor_pointer_zone').classList.add('display_none');document.getElementById('index_our_school_selector_left').classList.add('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle').classList.add('index_our_school_selector_left_small');document.getElementById('index_our_school_selector_left_prev_text').classList.add('index_our_school_selector_left_prev_text_hide');document.getElementById('index_our_school_selector_middle_text').classList.add('display_none');document.getElementById('index_our_school_selector_left_blacker').classList.add('opacity_1');document.getElementById('index_our_school_selector_left_text').classList.remove('display_none');setTimeout("document.getElementById('index_our_school_selector_left_text').classList.add('opacity_1')", 300); setTimeout("document.getElementById('index_our_school_selector_left_text').classList.remove('opacity_0')", 300); document.getElementById('index_our_school_selector_middle_blacker').classList.add('opacity_0');setTimeout("document.getElementById('index_our_school_selector_middle_text').classList.add('opacity_0')", 300);document.getElementById('index_our_school_selector_right_text').classList.add('display_none');document.getElementById('index_our_school_selector_right_prev_text').classList.remove('opacity_0');document.getElementById('index_our_school_selector_right_blacker').classList.remove('opacity_1');document.getElementById('index_our_school_selector_right_text').classList.remove('opacity_1');}
    document.getElementById('index_our_school_selector_middle_cursor_pointer_zone').onclick = function() {document.getElementById('index_our_school_selector_right_cursor_pointer_zone').classList.remove('display_none');document.getElementById('index_our_school_selector_middle_cursor_pointer_zone').classList.add('display_none');document.getElementById('index_our_school_selector_right').classList.remove('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle_prev_text').classList.remove('opacity_1');document.getElementById('index_our_school_selector_left_cursor_pointer_zone').classList.remove('display_none');document.getElementById('index_our_school_selector_middle_text').classList.remove('display_none');document.getElementById('index_our_school_selector_left').classList.remove('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle').classList.remove('index_our_school_selector_left_small');document.getElementById('index_our_school_selector_left_prev_text').classList.remove('index_our_school_selector_left_prev_text_hide');document.getElementById('index_our_school_selector_left_blacker').classList.remove('opacity_1');document.getElementById('index_our_school_selector_left_text').classList.add('display_none');setTimeout("document.getElementById('index_our_school_selector_left_text').classList.remove('opacity_1')", 300);document.getElementById('index_our_school_selector_middle_blacker').classList.remove('opacity_0');setTimeout("document.getElementById('index_our_school_selector_middle_text').classList.remove('opacity_0')", 300);document.getElementById('index_our_school_selector_right_text').classList.add('display_none');document.getElementById('index_our_school_selector_right_prev_text').classList.remove('opacity_0');document.getElementById('index_our_school_selector_right_blacker').classList.remove('opacity_1');document.getElementById('index_our_school_selector_right_text').classList.remove('opacity_1');}
    document.getElementById('index_our_school_selector_right_cursor_pointer_zone').onclick = function() {document.getElementById('index_our_school_selector_right_cursor_pointer_zone').classList.add('display_none');document.getElementById('index_our_school_selector_right').classList.add('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle').classList.add('index_our_school_selector_left_small');document.getElementById('index_our_school_selector_left').classList.remove('index_our_school_selector_left_full');document.getElementById('index_our_school_selector_middle_prev_text').classList.add('opacity_1');document.getElementById('index_our_school_selector_left_prev_text').classList.remove('index_our_school_selector_left_prev_text_hide');document.getElementById('index_our_school_selector_right_prev_text').classList.add('opacity_0');document.getElementById('index_our_school_selector_left_text').classList.add('display_none');document.getElementById('index_our_school_selector_middle_text').classList.add('display_none');setTimeout("document.getElementById('index_our_school_selector_right_text').classList.remove('display_none')", 280);setTimeout("document.getElementById('index_our_school_selector_right_text').classList.add('opacity_1')", 300);setTimeout("document.getElementById('index_our_school_selector_middle_text').classList.add('opacity_0')", 300);document.getElementById('index_our_school_selector_left_blacker').classList.remove('opacity_1');document.getElementById('index_our_school_selector_middle_blacker').classList.add('opacity_0');document.getElementById('index_our_school_selector_middle_cursor_pointer_zone').classList.remove('display_none');document.getElementById('index_our_school_selector_right_blacker').classList.add('opacity_1');document.getElementById('index_our_school_selector_left_cursor_pointer_zone').classList.remove('display_none'); document.getElementById('index_our_school_selector_left_text').classList.add('opacity_0')}
</script>
<script>
    $('.slider_page_arrow_hover_right_1').click(function(){
        $('.slider').addClass('slider_step_1');
        $('.slider_page_arrow_hover_right_1').addClass('display_none');
    });
    $('.slider_page_arrow_hover_right_2').click(function(){
        $('.slider').addClass('slider_step_2');
        $('.slider_page_arrow_hover_right_2').addClass('display_none');
    });
    $('.slider_page_arrow_hover_right_3').click(function(){
        $('.slider').addClass('slider_step_3');
        $('.slider_page_arrow_hover_right_3').addClass('display_none');
    });
    $('.slider_page_arrow_hover_right_4').click(function(){
        $('.slider').removeClass('slider_step_1');
        $('.slider_page_arrow_hover_right_1').removeClass('display_none');
        $('.slider').removeClass('slider_step_2');
        $('.slider_page_arrow_hover_right_2').removeClass('display_none');
        $('.slider').removeClass('slider_step_3');
        $('.slider_page_arrow_hover_right_3').removeClass('display_none');
    });
</script>
<script src="js/popup.js"></script>
<script src="js/phone_mask.js"></script>
<script src="js/animate_href.js"></script>
</html>