<div class="animate_link_background_on_page" id="animate_link_background_on_page" ></div>
<div class="animate_link_background" id="animate_link_background_id"></div>
<div class="main_main_area_menu_fixed" id="menu_button" style="margin-right: 3vw;display: inline;"><div class="main_main_area_menu_content">Меню</div></div>
<div class="menu" id="menu_id">
    <div class="menu_closer_area" id="menu_closer_area"></div>
    <div class="medium_Montserrat menu_close_button" id="menu_close_button_id" style="font-size: 2vw;  color: #E21D2F; z-index: 122"><span style="border-bottom: .1vw solid #E21D2F">ЗАКРЫТЬ</span></div>
    <img src="img/logo_black.png" class="menu_logo">

    <div class="menu_links_area" style="z-index: 122; position: relative">
        <a class=" light_Montserrat_plus menu_link main_page_link_menu" href="index.php"><span class="menu_link_span_hover courses_remover">ГЛАВНАЯ</span></a><br>
        <a class=" light_Montserrat_plus menu_link main_page_link_contacts" href="contacts.php"><span class="menu_link_span_hover courses_remover">КОНТАКТЫ</span></a><br>
        <a class=" light_Montserrat_plus menu_link href_animate main_page_link_about_school" href="about_school.php"><span class="menu_link_span_hover courses_remover">О ШКОЛЕ</span></a><br>
        <a class=" light_Montserrat_plus menu_link href_animate main_page_link_courses" id="courses_and_prices" href="courses.php"><span class="menu_link_span_hover">КУРСЫ И ЦЕНЫ</span></a><br>
        <a class="light_Montserrat_plus menu_link href_animate main_page_link_teachers" href="teachers.php"><span class="menu_link_span_hover courses_remover">УЧИТЕЛЯ</span></a><br>
        <a class=" light_Montserrat_plus menu_link href_animate main_page_link_promotions" href="promotions.php"><span class="menu_link_span_hover courses_remover">АКЦИИ И СЕРТИФИКАТЫ</span></a><br>
        <a class="light_Montserrat_plus menu_link href_animate main_page_link_reviews" href="reviews.php"><span class="menu_link_span_hover courses_remover">ОТЗЫВЫ</span></a><br><br>
        <a class="light_Montserrat_plus menu_link href_animate" style="margin-top: 3vw" href="#"><span  style="border-bottom: .1vw solid black" class="menu_link_span_hover courses_remover">ФРАНШИЗА</span></a>
    </div>
    <div class="courses_and_prices_block" id="courses_and_prices_block_id" style="z-index: 122">
        <a class="light_Montserrat_plus menu_link menu_link_span_hover test_ss href_animate" href="courses_vocal.php" >Вокал</a><br>
        <a class="light_Montserrat_plus menu_link menu_link_span_hover href_animate" href="courses_guitar.php">Гитара</a><br>
        <a class="light_Montserrat_plus menu_link menu_link_span_hover href_animate" href="courses_drums.php">Барабаны</a><br>
        <a class="light_Montserrat_plus menu_link menu_link_span_hover href_animate" href="courses_keys.php">Клавишы</a><br>
        <a class="light_Montserrat_plus menu_link menu_link_span_hover href_animate" href="courses_vocal.php">Экс. вокал</a>
    </div>
    <div class="demy_Futura_plus_size step_down_5 menu_number" style="font-size: 3vw; margin-left: 3vw; z-index: 122; position: relative; display: inline-block" ><a href="#" style="color: black">+7 (383) 375-37-25</a></div>
    <div class="menu_photos background_options" id="menu_photos" style="z-index: 122;"></div>
    <div class="flex_level menu_icon_area step_down_2">
        <a class="display_block" href="#"><img src="img/wa_icon_b.svg" class="menu_icons_options"></a>
        <a class="display_block" href="#"><img src="img/tg_icon_b.svg" class="menu_icons_options"></a>
        <a class="display_block" href="#"><img src="img/inst_icon_b.svg" class="menu_icons_options"></a>
        <a class="display_block" href="https://vk.com/rockstarsschool" target="_blank"><img src="img/vk_icon_black.svg" class="menu_icons_options"></a>
    </div>

</div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script>

    setTimeout("document.getElementById('animate_link_background_on_page').classList.add('animate_link_background_on_page_hide')", 600);
    setTimeout("document.getElementById('animate_link_background_on_page').classList.add('display_none')", 1210);


</script>

<script>
    let menu_photos = document.getElementById('menu_photos');
    menu_photos.classList.add('menu_photos_main')
    document.getElementById('menu_button').onclick = function() {
        document.getElementById('menu_id').classList.add('display_block');
        setTimeout("document.getElementById('menu_id').classList.add('menu_show')", 1);
        document.getElementById('body_id').classList.add('hidden_overflow');
    }
    document.getElementById('menu_close_button_id').onclick = function() {
        document.getElementById('menu_id').classList.remove('menu_show');
        setTimeout("document.getElementById('menu_id').classList.remove('display_block')", 600);
        document.getElementById('body_id').classList.remove('hidden_overflow');
    }
    window.onkeydown = function( event ) {
        if ( event.keyCode == 27 ) {
            document.getElementById('menu_id').classList.remove('menu_show');
            setTimeout("document.getElementById('menu_id').classList.remove('display_block')", 600);
            document.getElementById('body_id').classList.remove('hidden_overflow');
        }
    };
    document.getElementById('menu_closer_area').onclick = function() {
        document.getElementById('menu_id').classList.remove('menu_show');
        setTimeout("document.getElementById('menu_id').classList.remove('display_block')", 600);
        document.getElementById('body_id').classList.remove('hidden_overflow');
    }
    document.getElementById('courses_and_prices').onmouseover = function() {
        document.getElementById('courses_and_prices_block_id').classList.add('display_block');
    }

    $('.courses_remover').hover(function (){
        document.getElementById('courses_and_prices_block_id').classList.remove('display_block');
    })
    $('.main_page_link_menu').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_main')
    })
    $('.main_page_link_contacts').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_contacts')
    })
    $('.main_page_link_about_school').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_about_school')
    })
    $('.main_page_link_courses').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_courses')
    })
    $('.main_page_link_teachers').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_teachers')
    })
    $('.main_page_link_promotions').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_promotions')
    })
    $('.main_page_link_reviews').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_reviews')
    })
    $('.main_page_link_vacancy').hover(function (){
        menu_photos.classList.remove('menu_photos_main', 'menu_photos_contacts', 'menu_photos_about_school', 'menu_photos_courses', 'menu_photos_teachers', 'menu_photos_promotions', 'menu_photos_reviews', 'menu_photos_vacancy', 'menu_photos_franchise')
        menu_photos.classList.add('menu_photos_vacancy')
    })

</script>