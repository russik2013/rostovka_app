'use strict';

var data = [
    {
        dataID: 0,
        imgUrl: "img/product-img/2imv.jpg",
        name: "YG-109-B Style Baby",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230
    },
    {
        dataID: 1,
        imgUrl: "img/product-img/21imv.jpg",
        name: "M-165 Clibee ",
        rostovka: "8",
        box: "16",
        type: "31-36",
        price: 175,
        full__price: 1630
    },
    {
        dataID: 2,
        imgUrl: "img/product-img/22imv.jpg",
        name: "M-31-1 Clibee",
        rostovka: "16",
        box: "61",
        type: "26-30",
        price: 230,
        full__price: 2230
    },
    {
        dataID: 3,
        imgUrl: "img/product-img/23imv.jpg",
        name: "M-05 Style Clibee ",
        rostovka: "5",
        box: "5",
        type: "26-30",
        price: 230,
        full__price: 3230
    },
    {
        dataID: 4,
        imgUrl: "img/product-img/24imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 370,
        full__price: 7830
    },
    {
        dataID: 5,
        imgUrl: "img/product-img/25imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 370,
        full__price: 4230
    },
    {
        dataID: 6,
        imgUrl: "img/product-img/26imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 370,
        full__price: 4630
    },
    {
        dataID: 7,
        imgUrl: "img/product-img/27imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 370,
        full__price: 5230
    }
];

$('#template').tmpl(data).appendTo('#target');

var values = [], targetID = 0;

$('.sidebar-container input[type=checkbox]').on('change', function(){
    var target = $(this)[0].parentNode.parentNode.parentNode;
    targetID = $(this)[0].parentNode.childNodes[1].id;

    if($(this).is(':checked')) {
        values.push([targetID, $(this)[0].defaultValue, $(target)[0].childNodes[1].dataset.id]);
    }


    if(values.length !== 0){
        var AppendedList = $('.choosedFilter li');
        $('.CFBlock').css('display', 'block');

        Number (AppendedList.length++);
        for (var y = 0; y < values.length; y++) {
            for(var z = 0; z < AppendedList.length; z++){
                if($(this)[0].id === values[y][z]){
                    $(AppendedList)[z].remove();
                }
            }

            $('.choosedFilter').append('' +
                '<li class="appedned__item">' +
                '<span class="item" data-type="'+ values[y][0] +'">'+ values[y][1] +'</span>' +
                '<i class="fa fa-times-circle removeAppended__Item" aria-hidden="true"></i>' +
                '</li>');
        }
        RemoveItem();
    }

    if($(this).is(':not(:checked)')) {
        var unchecked = $(this)[0].parentNode.childNodes[1].defaultValue,
            AppendedLength = $('.choosedFilter li');

        for (var i = 0; i < values.length; i++) {
            if (unchecked === values[i][1]) {
                for (var k = 0; k < AppendedLength.length; k++){
                    if(AppendedLength[k].innerText === values[i][1]){
                        AppendedLength[k].remove()
                    }
                }
                values.splice(i, 1);
            }
        }
    }

    if(values.length === 0) {
        $('.CFBlock').css('display', 'none');
    }
});

function RemoveItem() {
    $('.removeAppended__Item').on('click', function () {
        var clickedTarget = $(this)[0].parentElement.textContent,
            AppendedList = $('.filterInner input');

        $(this)[0].parentElement.remove();

        for (var y = 0; y < values.length; y++){
            if(clickedTarget === values[y][1]){
                console.log('asda' + values.splice(y, 1))
            }
        }


        for (var i = 0; i < AppendedList.length; i++){
            if(AppendedList[i].defaultValue === clickedTarget){
                AppendedList[i].checked = false;
            }
        }

        if(values.length === 0){
            $('.CFBlock').css('display', 'none');
        }
    });
}

$('.removeallFilters span').on('click', function () {
    values = [];
    var AppendedList = $('.choosedFilter li');

    for (var i = 0; i < AppendedList.length; i++){
        $(AppendedList)[i].remove();
    }

    if(values.length === 0){
        $('.CFBlock').css('display', 'none');
    }

    $('input[type=checkbox]').prop('checked', false);

});

$('.submit_onChoose button').on('click', function () {
    values = [];
    $('.submit_onChoose').removeClass('showed');
    $('input[type=checkbox]').prop('checked', false)
});



var Cart_data = [{
    row: [], cartCount: 0
}], hidden__price, targetID, cart__summ = 0;

Cart_template(Cart_data);

$('.product-button a').on('click', function (event) {
    targetID = $(this)[0].offsetParent.offsetParent.dataset.id;
    hidden__price = data[targetID].full__price;

    addtoCart(event, targetID);
    Cart_template(Cart_data);
    getPrice();

    cart__summ = Cart_data[0].cartCount;
    cartSumm(cart__summ);
});


var qid = 0, counter = 0;
function addtoCart(event, targetID) {
    var imgurl, gTitle, gQuant, gprice, selected_quantity;

    counter++;

    Number ($('.cart-count')[0].innerText = counter);

    if(Cart_data.length > 0){
        $('.isClear').remove()
    }

    gTitle = data[targetID].name;
    selected_quantity = 1;
    gQuant = 0;
    gprice = Number (data[targetID].full__price);
    imgurl = data[targetID].imgUrl;

    Cart_data[0].row.push({
        targetID: 'added_' + qid,
        imgUrl: imgurl,
        name: gTitle,
        quant: gQuant,
        price: gprice,
        quantity: selected_quantity,
        quantityPrice: gprice
    });

    qid++;

    $('.dropdownCart ul li').remove();
}

$(document).on('click', '.removeItem__cart', function () {
    var clicked_targetID = $(this)[0].parentElement.dataset.id,
        targetID = $(this)[0].parentElement.dataset.id.replace('added_', '');

    for (var i = 0; i < Cart_data[0].row.length; i++){
        if(Cart_data[0].row[i].targetID === clicked_targetID){
            cart__summ = cart__summ - Cart_data[0].row[i].quantityPrice;
            Cart_data[0].row.splice(i, 1);
            $(this)[0].parentElement.remove();
        }
    }

    if(Cart_data[0].row.length === 0){
        $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>')
    }

    counter--;
    Number ($('.cart-count')[0].innerText = counter);

    cartSumm(cart__summ);
});


var target_price = 0, updPrice = 0, mainPrice = 0, quantity = 0, target;
$(document).on('click', '.Cart_Button_Plus', function (event) {
    var target_dataset = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id;

    for(var i = 0; i < Cart_data[0].row.length; i++){
        if(target_dataset === Cart_data[0].row[i].targetID){
            target_price = Cart_data[0].row[i].price;
            target = Cart_data[0].row[i].quantityPrice;
        }
    }

    updPrice = target + target_price;

    counterFn(updPrice);
});

$(document).on('click', '.Cart_Button_Minus', function (event) {
    var targetID = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id.replace('added_', '');
    // plused_target = data[targetID].full__price;

    mainPrice = Cart_data[0].row[targetID].price;
    updPrice = Cart_data[0].row[targetID].quantityPrice - mainPrice;

    if(Cart_data[0].row[targetID].quantity > 1){
        Cart_data[0].row[targetID].quantity--;
    }

    counterFn(mainPrice, event, targetID);
});

function getPrice() {
    var allPrice = 0;
    for (var i = 0; i < Cart_data[0].row.length; i++){
        allPrice += Cart_data[0].row[i].price * Cart_data[0].row[i].quantity;
    }
    Cart_data[0].cartCount = allPrice;
    return allPrice
}

function counterFn(mainPrice, updPrice) {
    var price = getPrice();
    if(price >= mainPrice){
        cart__summ = price;
        cartSumm(cart__summ, updPrice);
    }
}

function cartSumm(cart__summ, updPrice){
    $.find('[data-set="cart-summ"]')[0].innerText = cart__summ;
    $.find('[data-set="cart-inner-summ"]')[0].innerText = cart__summ + ' грн';
    $.find('[data-cart-summ="cartCount"]')[0].innerText = updPrice;
}