'use stict';

$('.chooseItem .radio').addClass('disable');
var checked = $('input:checked', '.chooseItem'),
    checker = $('input:checked', '.chooseItem');
if($(checked).val() === 'on'){
    $(checked[0].parentNode.parentNode).removeClass('disable');
}

$(".chooseItem .radio input").change(function(){
    $('.chooseItem .radio').addClass('disable');

    if($(this.parentNode.parentNode).hasClass('disable')){
        $(this.parentNode.parentNode).removeClass('disable');
    }
    else
        $(this.parentNode.parentNode).addClass('disable');
});



$(document).ready(function () {
    var checked_price = $('.chooseItem .choosed')[0].childNodes[1].childNodes[3].innerText,
        checked_crope = checked_price,
        prodInput = $('.product-quantity input'),
        product_quantity = Number ($(prodInput).val());

    if(checked_price.indexOf(" ")>=0) checked_crope = checked_price.substr(0,checked_price.indexOf(" "));

    $('.quantityPlus').on('click', function (){
        product_quantity = Number ($('.product-quantity input').val()) + 1;
    });

    $('.quantityMinus').on('click', function (){
        product_quantity = Number ($('.product-quantity input').val()) - 1;
    });

    $(prodInput).on('change', function (){
        product_quantity = Number ($('.product-quantity input').val());
    });

    $(".chooseItem input").on('change', function(){
        var choosed_price = $(this)[0].nextElementSibling.innerText,
            choosed_crope = choosed_price;

        if(choosed_price.indexOf(" ")>=0) choosed_crope = choosed_price.substr(0,choosed_price.indexOf(" "));

        if(choosed_crope > 0){
            checked_crope = choosed_crope;
        }
    });

    $(buyProduct_inner).on('click', function () {
        var productTitle = $(this)[0].offsetParent.offsetParent.childNodes[1].childNodes[1].innerHTML,
            productImage = $('.product-gallery-item').attr('href');

        itemCount++;
        count = itemCount;

        if($(count).length === 0){
            $('.cart-widget-content .cart-product-item').append('<em>Корзина пуста</em>')
        }
        else{
            $('.cart-widget-content .cart-product-item em').css('display', 'none');
        }

        $('.cart-widget-content .cart-product-item').append('<li>' +
            '<a href="#!" class="product-image">'+
            '<img src="'+ productImage +'"> ' +
            '</a>' +
            ' <div class="product-content">' +
            ' <a class="product-link" href="#">' +
            productTitle +
            ' </a>' +
            ' <div class="cart-collateral"> ' +
            ' <span class="qty-cart"> '+ product_quantity +' </span>&nbsp;<span>×</span>&nbsp' +
            ' <span class="product-price-amount">' +
            checked_crope * product_quantity +
            '</span>' +
            ' <span class="currency-sign">грн</span>' +
            ' </div>' +
            ' <a class="product-remove miniCart appendedRemove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>'+
            '</div>'
        );

        $('.cart-count').html(count);
        full_summ = full_summ + Number (checked_crope) * product_quantity;

        $('.cart-total-hedding .cart-total-price').html(full_summ);
        $(".cart-price.closedSidebar").html(full_summ);
    });
});