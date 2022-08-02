let popup = document.getElementById('popup_id');
    popup.classList.add('display_none', 'opacity_0');
    let popup_close_area = document.getElementById('popup_close_area');

    $('.popup_open_button').click(function(){
    popup.classList.remove('display_none');
    setTimeout("popup.classList.remove('opacity_0')", 1);
    body_id.classList.add('hidden_overflow');

});
popup_close_area.onclick = function() {
    popup.classList.add('opacity_0');
    setTimeout("popup.classList.add('display_none')", 400);
    body_id.classList.remove('hidden_overflow');
}