$('.link').each(function() {
    $(this).css('box-shadow', 'inset 0 0 0 #F7DE3A');
    $(this).on('mouseenter', function() {
        $(this).css('box-shadow', 'inset ' + $(this).outerWidth() + 'px 0 0 #F7DE3A');
    })
    $(this).on('mouseleave', function() {
        $(this).css('box-shadow', 'inset 0 0 0 #F7DE3A');
    })
})