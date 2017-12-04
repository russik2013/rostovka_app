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
        price: 210,
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
        price: 380,
        full__price: 4230
    },
    {
        dataID: 6,
        imgUrl: "img/product-img/26imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 390,
        full__price: 4630
    },
    {
        dataID: 7,
        imgUrl: "img/product-img/27imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 400,
        full__price: 5230
    },
    {
        dataID: 8,
        imgUrl: "img/product-img/prod1.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 410,
        full__price: 6230
    },
    {
        dataID: 9,
        imgUrl: "img/product-img/prod2.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 420,
        full__price: 9230
    }
], TopSallesData= [
    {
        dataID: 0,
        imgUrl: "img/product-img/22imv.jpg",
        name: "M-31-1 Clibee",
        rostovka: "16",
        box: "61",
        type: "26-30",
        price: 230,
        full__price: 2230
    },
    {
        dataID: 1,
        imgUrl: "img/product-img/26imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 390,
        full__price: 4630
    },
    {
        dataID: 2,
        imgUrl: "img/product-img/21imv.jpg",
        name: "M-165 Clibee ",
        rostovka: "8",
        box: "16",
        type: "31-36",
        price: 175,
        full__price: 1630
    },
    {
        dataID: 3,
        imgUrl: "img/product-img/23imv.jpg",
        name: "M-05 Style Clibee ",
        rostovka: "5",
        box: "5",
        type: "26-30",
        price: 210,
        full__price: 3230
    },
    {
        dataID: 4,
        imgUrl: "img/product-img/prod2.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 420,
        full__price: 9230
    },
    {
        dataID: 5,
        imgUrl: "img/product-img/24imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 370,
        full__price: 7830
    },
    {
        dataID: 6,
        imgUrl: "img/product-img/25imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 380,
        full__price: 4230
    },
    {
        dataID: 7,
        imgUrl: "img/product-img/27imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 400,
        full__price: 5230
    },
    {
        dataID: 8,
        imgUrl: "img/product-img/prod1.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "6",
        box: "6",
        type: "25-30",
        price: 410,
        full__price: 6230
    },
    {
        dataID: 9,
        imgUrl: "img/product-img/2imv.jpg",
        name: "YG-109-B Style Baby",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230
    }
], productTheme = $('#template');

$(productTheme).tmpl(data).appendTo('#target');

$(productTheme).tmpl(TopSallesData).appendTo('#topSalles');

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