<!doctype html><html lang="ru">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Акции</title>
</head>
<body id="body_id">
<?php require('req/menu.php') ?>
<?php require('req/popup.php') ?>
<div class="teacher_open_info_back" id="teacher_open_info_back">
    <div style="position: absolute; width: 100%; height: 100vh;" class="teacher__close"></div>
    <div class="medium_Montserrat menu_close_button hover_pointer teacher__close"  style="font-size: 2vw;  color: white"><span style="border-bottom: .1vw solid white">ЗАКРЫТЬ</span></div>
    <img src="img/promotion_content_1.jpg" class="promotion_content_options" id="promotion_content_1">
    <img src="img/promotion_content_2.jpg" class="promotion_content_options" id="promotion_content_2">
    <img src="img/promotion_content_3.jpg" class="promotion_content_options" id="promotion_content_3">
    <img src="img/promotion_content_4.jpg" class="promotion_content_options" id="promotion_content_4">
    <div class="light_Futura step_down_3" style=" text-align: center; position: relative; z-index: 11"><span  class="all_green_button popup_open_button">Попробовать бесплатно</span></div>


</div>
<div class="promotions_area background_options">
    <img src="img/promotions_head.svg" class="promotions_head">
    <div class="flex_level vw_container_2 step_down_3">
        <img src="img/promotion_card.png" class="promotion_card" id="promotion_card_1">
        <img src="img/promotion_card.png" class="promotion_card" id="promotion_card_2">
        <img src="img/promotion_card.png" class="promotion_card" id="promotion_card_3">
        <img src="img/promotion_card.png" class="promotion_card" id="promotion_card_4">
    </div>

</div>
</body>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    let teacher_open_info_back = document.getElementById('teacher_open_info_back');
    teacher_open_info_back.classList.add('display_none', 'opacity_0');

    document.getElementById('promotion_content_1').classList.add('display_none');
    document.getElementById('promotion_content_2').classList.add('display_none');
    document.getElementById('promotion_content_3').classList.add('display_none');
    document.getElementById('promotion_content_4').classList.add('display_none');

    document.getElementById('promotion_card_1').onclick = function() {
        document.getElementById('promotion_content_1').classList.remove('display_none');
    }
    document.getElementById('promotion_card_2').onclick = function() {
        document.getElementById('promotion_content_2').classList.remove('display_none');
    }
    document.getElementById('promotion_card_3').onclick = function() {
        document.getElementById('promotion_content_3').classList.remove('display_none');
    }
    document.getElementById('promotion_card_4').onclick = function() {
        document.getElementById('promotion_content_4').classList.remove('display_none');
    }

    $('.promotion_card').click(function(){
        teacher_open_info_back.classList.remove('display_none');
        setTimeout("teacher_open_info_back.classList.remove('opacity_0')", 1);

    });
    $('.teacher__close').click(function(){
        teacher_open_info_back.classList.add('opacity_0');
        setTimeout("teacher_open_info_back.classList.add('display_none')", 400);
        document.getElementById('promotion_content_1').classList.add('display_none');
        document.getElementById('promotion_content_2').classList.add('display_none');
        document.getElementById('promotion_content_3').classList.add('display_none');
        document.getElementById('promotion_content_4').classList.add('display_none');
    });

    window.onkeydown = function( event ) {
        if ( event.keyCode == 27 ) {
            teacher_open_info_back.classList.add('opacity_0');
            setTimeout("teacher_open_info_back.classList.add('display_none')", 400);
            document.getElementById('promotion_content_1').classList.add('display_none');
            document.getElementById('promotion_content_2').classList.add('display_none');
            document.getElementById('promotion_content_3').classList.add('display_none');
            document.getElementById('promotion_content_4').classList.add('display_none');
        }
    };






</script>
<script src="js/animate_href.js"></script>
<script src="js/popup.js"></script>
</html>


