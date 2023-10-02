import $ from 'jquery'

$(document).ready(function () {
    $(".add-file").on('click', () => {
        $('.file__input').first().clone().appendTo(".file__list");
    });
    $(".remove-file").on('click', () => {
        $('.file__input').last().remove();
    });
});
