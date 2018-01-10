'use strict';
var cartArray = sessionStorage.getItem('Cart_data');
cartArray = JSON.parse(cartArray);

function getSelect(event) {
    var targetBox = $.find('[data-set="boxset"]')[0].classList;
    var targetRostovka = $.find('[data-set="rotovkaset"]')[0].classList;

    if (event.target.parentNode.parentNode.dataset.set === "rotovkaset") {
        targetRostovka.remove('disable');
        targetRostovka.add('choosed');
        targetBox.add('disable');
        targetBox.remove('choosed');
    }
    else {
        targetRostovka.add('disable');
        targetRostovka.remove('choosed');
        targetBox.remove('disable');
        targetBox.add('choosed');
    }
}

var prodid = Number ($('[data-prodid]')[0].dataset.prodid);

$('.buyProduct_inner').on('click', function () {
    if(cartArray[0].row.length !== 0){
        for (var i = 0; i < cartArray[0].row.length; i++){
            if(cartArray[0].row[i].targetID === prodid){
                console.log(i);
                $('.chooseItem').remove();
                $('.single-variation-wrap').append('' +
                    '<div class="product--is--inCart">' +
                    '<span>Товар в корзине</span>' +
                    '<a href="">Перейти в корзну</a>'+
                    '</div>');
            }
        }
    }
});

cartCheck();
function cartCheck() {
    if(cartArray[0].row.length !== 0){
        for (var i = 0; i < cartArray[0].row.length; i++){
            if(cartArray[0].row[i].targetID === prodid){
                $('.chooseItem').remove();
                $('.product-price').remove();
                $('.single-variation-wrap').append('' +
                    '<div class="product--is--inCart"><span>Товар в корзине</span></div>' +
                    '<div class="move--to--cart"><a href="">Перейти в корзну</a></div>');
            }
        }
    }
}