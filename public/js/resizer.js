var intElemOffsetHeight = $( window ).height() - 100;

$(window).resize(function() {
    intElemOffsetHeight = $( window ).height();
    setHeight(intElemOffsetHeight);
});
function setHeight(intElemOffsetHeight) {
    $('.content-page').css('height', ''+intElemOffsetHeight+'');
}

setHeight(intElemOffsetHeight);