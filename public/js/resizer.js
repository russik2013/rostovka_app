var intElemOffsetHeight = $( window ).height() - 575;

$(window).resize(function() {
    intElemOffsetHeight = $( window ).height() - 575;
    setHeight(intElemOffsetHeight);
});
function setHeight(intElemOffsetHeight) {
    $('.content-page').css('height', ''+intElemOffsetHeight+'');
}

setHeight(intElemOffsetHeight);