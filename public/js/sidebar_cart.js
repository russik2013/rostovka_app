'use strict';

var cartSumm = $('.cart-total-price').html(),
    itemsSumm = $('.cart-product-item li .product-price-amount'),
    itemCount = $('.cart-product-item li').length,
    full_summ = 0,
    count = $('.cart-widget-content .cart-product-item li'),
    productIn_cart = $('.cart-widget-content .product-remove'),
    buyProduct_inner = $('.buyProduct_inner');

if($(count).length === 0){
    $('.cart-widget-content .cart-product-item').append('<em>Корзина пуста</em>')
}

for (var i = 0; i < itemCount; i++){
    full_summ += Number ($(itemsSumm[i]).html());
}

$('.cart-total-hedding .cart-total-price').html(full_summ);
$(".cart-price.closedSidebar").html(full_summ);
$('.cart-count').html($(count).length);


$(productIn_cart).on('click', function () {
    $(this)[0].offsetParent.remove();

    var clickedItem = $(this)[0].parentNode.children[1].childNodes[5].innerText;

    itemCount--;
    count = itemCount;
    $('.cart-count').html(count);
    full_summ = full_summ - Number (clickedItem);

    $('.cart-total-hedding .cart-total-price').html(full_summ);
    $(".cart-price.closedSidebar").html(full_summ);
    count--;
});

$('.product-button .js_tooltip').on('click', function () {
    var itemDom = $(this)[0].offsetParent.offsetParent,
        itemTitle = $(itemDom.nextElementSibling)[0].childNodes[1].innerText,
        itemPrice = $(itemDom)[0].offsetParent.childNodes[3].children[2].childNodes[5].innerText,
        itemImage = $(itemDom)[0].firstElementChild.innerHTML,
        itemImageClass = $(itemImage)[0],
        addedImage = $(itemImageClass).addClass('product-image'),
        imageURL = addedImage[0].innerHTML,
        croppedPrice = itemPrice;

    $('.cart-widget-content .cart-product-item em').css('display', 'none');

    if(itemPrice.indexOf(" ")>=0) croppedPrice = itemPrice.substr(0,itemPrice.indexOf(" "));

    full_summ += Number (croppedPrice);

    itemCount++;
    count = itemCount;
    $('.cart-count').html(count);

    $('.cart-total-hedding .cart-total-price').html(full_summ);
    $(".cart-price.closedSidebar").html(full_summ);

    $('.cart-widget-content .cart-product-item').append('<li>' +
        '<a href="#!" class="product-image">'+
            imageURL +
        '</a>' +
        ' <div class="product-content">' +
        ' <a class="product-link" href="#">' +
            itemTitle +
        ' </a>' +
        ' <div class="cart-collateral"> ' +
        ' <span class="qty-cart">1</span>&nbsp;<span>×</span>&nbsp' +
        ' <span class="product-price-amount">' +
            croppedPrice +
        '</span>' +
        ' <span class="currency-sign">грн</span>' +
        ' </div>' +
        ' <a class="product-remove miniCart appendedRemove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>'+
        '</div>'
    );
});

$('.cart-widget-content').on('click', '.product-remove', function (event) {
    event.preventDefault();
    $(this)[0].offsetParent.remove();
    var clickedItem = $(this)[0].parentNode.children[1].childNodes[5].innerText;

    itemCount--;
    count = itemCount;
    $('.cart-count').html(count);
    full_summ = full_summ - Number (clickedItem);

    $('.cart-total-hedding .cart-total-price').html(full_summ);
    $(".cart-price.closedSidebar").html(full_summ);

    if(count === 0){
        $('.cart-widget-content .cart-product-item').append('<em>Корзина пуста</em>')
    }
});


window.success = function(msg) {
    var dom = '<div class="top-alert"><div class="alert alert-success alert-dismissible fade in " role="alert"><i class="glyphicon glyphicon-ok"></i> ' + msg + '</div></div>';
    var jdom = $(dom);
    jdom.hide();
    $("body").append(jdom);
    jdom.fadeIn();
    setTimeout(function() {
        jdom.fadeOut(function() {
            jdom.remove();
        });
    }, 2000);
};