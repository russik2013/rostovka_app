'use strict';

var data = [
    {
        imgUrl: "img/product-img/2imv.jpg",
        name: "YG-109-B Style Baby",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: "375",
        full__price: "1230"
    },
    {
        imgUrl: "img/product-img/21imv.jpg",
        name: "M-165 Clibee ",
        rostovka: "8",
        box: "16",
        type: "31-36",
        price: "175",
        full__price: "1230"
    },
    {
        imgUrl: "img/product-img/22imv.jpg",
        name: "M-31-1 Clibee",
        rostovka: "16",
        box: "61",
        type: "26-30",
        price: "230",
        full__price: "2230"
    },
    {
        imgUrl: "img/product-img/23imv.jpg",
        name: "M-05 Style Clibee ",
        rostovka: "5",
        box: "5",
        type: "26-30",
        price: "230",
        full__price: "3230"
    },
    {
        imgUrl: "img/product-img/24imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: "370",
        full__price: "4230"
    },
    {
        imgUrl: "img/product-img/25imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: "370",
        full__price: "4230"
    },
    {
        imgUrl: "img/product-img/26imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: "370",
        full__price: "4230"
    },
    {
        imgUrl: "img/product-img/27imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: "370",
        full__price: "4230"
    }
];

$('#template').tmpl(data).appendTo('#target');


$('.product-button a').on('click', function () {
    var hidden__price = $(this)[0].parentNode.parentNode.children[2].children[2].innerText,
        cart__summ = $('.cart-price')[0].innerText;

    Number ($('.cart-count')[0].innerText++);
    $('.cart-price')[0].innerText = Number (cart__summ) + Number (hidden__price);
});

var values = [];

$('.sidebar-container input[type=checkbox]').on('change', function(){
    var target = $(this)[0].parentNode.parentNode.parentNode,
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