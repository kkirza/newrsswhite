$("a:not(.no_anim_href)").click(function (){
    document.getElementById('animate_link_background_id').classList.add('display_block');
    setTimeout("document.getElementById('animate_link_background_id').classList.add('animate_link_background_show')", 1);

    var href = $(this).attr('href');
    setTimeout(function() {window.location = href}, 410);
    return false;
})