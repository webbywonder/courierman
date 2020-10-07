$('.slideWrap').owlCarousel({
    margin: 20,
    nav: true,
    navText: [
        "<i class='fa fa-chevron-left'></i>&nbsp;Previous",
        "&nbsp;Next&nbsp;<i class='fa fa-chevron-right'></i>"
    ],
    items: 1
});

var dot = $('.slideWrap .owl-dot');
dot.each(function () {
    var index = $(this).index() + 1;
    $(this).html(index);
});