<footer class="background_options step_down_4" >
    <div class="flex_level">
        <img src="img/logo_white.png" class="logo_main">
        <div>
            <span class="medium_Montserrat" style="border-bottom: .1vw solid white; color: white; font-size: 2.5vw; text-transform: uppercase" id="footer_page_name"></span>
        </div>
        <button style="margin-right: 2vw; border: none"  class="light_Montserrat_plus popup_open_button hover_pointer green_button_main_option">Записаться на курс</button>
    </div>
    <div class="white_down_line_90"></div>
    <div class="footer_content">
        <div class="light_Montserrat_w">Телефон: <span class="medium_Montserrat_w">+7(383)375-37-25</span></div>
        <div class="light_Montserrat_w" style="text-align: center; margin-top: .5vw">Адрес: <span class="medium_Montserrat_w">г. Новосибирск,<br> ул.Серебренниковская, д. 6/1<br> цокольный этаж, "ROCKSTAR"</span></div>
        <div class="footer_icons_area step_down_3">
            <div class="flex_level">
                <a class="display_block" href="#"><img src="img/inst_icon_w.svg" class="footer_icons_options"></a>
                <a class="display_block" href="#"><img src="img/vk_icon_w.svg" class="footer_icons_options"></a>
                <a class="display_block" href="#"><img src="img/yt_icon_w.svg" class="footer_icons_options"></a>
                <a class="display_block" href="#"><img src="img/wa_f_icon_w.svg" class="footer_icons_options"></a>
            </div>
        </div>
    </div>
    <div class="white_down_line_90" style="margin-top: 5vw"></div>
    <div class="flex_level" style="margin-top: .5vw">
        <div class="medium_Montserrat_w" style="margin-left: 2vw">© COPYRIGHT 2022</div>
        <div style="margin-right: 2vw">
            <a class="footer_link medium_Montserrat_w href_animate" href="index.php">ГЛАВНАЯ</a>
            <a class="footer_link medium_Montserrat_w">|</a>
            <a class="footer_link medium_Montserrat_w href_animate" href="about_school.php">О ШКОЛЕ</a>
            <a class="footer_link medium_Montserrat_w">|</a>
            <a class="footer_link medium_Montserrat_w href_animate" href="courses.php">НАПРАВЛЕНИЯ</a>
            <a class="footer_link medium_Montserrat_w">|</a>
            <a class="footer_link medium_Montserrat_w href_animate" href="contacts.php">КОНТАКТЫ</a>
            <a class="footer_link medium_Montserrat_w">|</a>
            <a class="footer_link medium_Montserrat_w href_animate" href="#">ФРАНШИЗА</a>
        </div>
    </div>
</footer>
<script>
    let page_name = document.getElementById("footer_page_name");
    if (window.location.pathname=='/') {page_name.textContent = 'Главная'}
    if (window.location.pathname=='/contacts.php') {page_name.textContent = 'Контакты'}
    if (window.location.pathname=='/about_school.php') {page_name.textContent = 'О школе'}
    if (window.location.pathname=='/courses.php') {page_name.textContent = 'Курсы'}
    if (window.location.pathname=='/courses_guitar.php') {page_name.textContent = 'Гитара'}
    if (window.location.pathname=='/courses_keys.php') {page_name.textContent = 'Клавишные'}
    if (window.location.pathname=='/courses_vocal.php') {page_name.textContent = 'Вокал'}
    if (window.location.pathname=='/courses_drums.php') {page_name.textContent = 'Барабаны'}
    if (window.location.pathname=='/reviews.php') {page_name.textContent = 'Отзывы'}
    if (window.location.pathname=='/teachers.php') {page_name.textContent = 'Учителя'}
</script>
