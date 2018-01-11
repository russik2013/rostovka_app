'use strict';
var cartArray = sessionStorage.getItem('Cart_data');
cartArray = JSON.parse(cartArray);

var init = function () {
    checkPrices();
    cartCheck();
};

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

init();

function checkPrices() {
    if(Number ($('[data-set="boxset"] .iPrice')[0].innerText) === Number ($('[data-set="rotovkaset"] .iPrice')[0].innerText)){
        $('[data-set="rotovkaset"]').css('display', 'none')
    }
}

var prodid = Number ($('[data-prodid]')[0].dataset.prodid);
var checker = false;

function cartCheck() {
    var cartArray = sessionStorage.getItem('Cart_data');
    cartArray = JSON.parse(cartArray);
    if (cartArray !== null) {
        for (var i = 0; i < cartArray[0].row.length; i++) {
            if (cartArray[0].row[i].targetID === prodid) {
                $('.chooseItem').remove();
                $('.product-price').remove();
                $('.single-variation-wrap').append('' +
                    '<div class="product--is--inCart">' +
                    '<span>Товар в корзине</span>' +
                    '<div class="move--to--cart"><a class="cart--url">Перейти в корзну</a></div>' +
                    '</div>');
            }
            else {
                checker = true
            }
        }
        setUrl();
    }
}


function setUrl() {
    var url = $('meta[name="root-site"]').attr('content') + '/cart';
    $('.cart--url').attr("href", url);
}