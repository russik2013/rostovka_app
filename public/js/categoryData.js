'use strict';
var data = [],
    productTheme = $('#template'),
    page_num = 1,
    count_on_page = Number ($.find('#product-show option')[0].innerText),
    paginationNum,
    paginationCount = 0,
    filter_value = [],
    selectedCount = Number ($.find('#product-show option')[0].innerText);

///work with filters
var values = [], targetID = 0;

$('.sidebar-container input[type=checkbox]').on('change', function () {
    var target = $(this)[0].parentNode.parentNode.parentNode;
    targetID = $(this)[0].parentNode.childNodes[1].id;

    if ($(this).is(':not(:checked)')) {
        var unchecked = $(this)[0].parentNode.childNodes[1].defaultValue,
            AppendedLength = $('.choosedFilter li');

        for (var i = 0; i < values.length; i++) {
            if (unchecked === values[i][1]) {
                for (var k = 0; k < AppendedLength.length; k++) {
                    AppendedLength[k].remove();
                }
                values.splice(i, 1);
            }
        }
        $('.product--block').append('<div class="preloader"><i></i></div>');
        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/products",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function(msg) {
            if(msg.length > 0){
                makeFilterData(msg)
            }
            $('.preloader').remove();
        });

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
        });

        sessionStorage.setItem('filterValues', JSON.stringify(values));
    }

    if ($(this).is(':checked')) {
        values.push([targetID, $(this)[0].defaultValue, $(target)[0].childNodes[1].dataset.id]);

        sessionStorage.setItem('filterValues', JSON.stringify(values));
    }

    if (values.length !== 0) {
        var AppendedList = $('.choosedFilter li');
        $('.CFBlock').css('display', 'block');

        Number(AppendedList.length++);
        for (var y = 0; y < values.length; y++) {
            for (var z = 0; z < AppendedList.length; z++) {
                if ($(this)[0].id === values[y][z]) {
                    $(AppendedList)[z].remove();
                }
            }

            $('.choosedFilter').append('' +
                '<li class="appedned__item">' +
                '<span class="item" data-type="' + values[y][0] + '">' + values[y][1] + '</span>' +
                '<i class="fa fa-times-circle removeAppended__Item" aria-hidden="true"></i>' +
                '</li>');
        }
        RemoveItem();


        $('.product--block').append('<div class="preloader"><i></i></div>');


        console.log(values);
        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/products",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function(msg) {
            if(msg.length > 0){
                makeFilterData(msg);
                $('.preloader').remove();
            }
        });

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
        });


        filter_value = values;
        return filter_value;
    }

    if (values.length === 0) {
        $('.CFBlock').css('display', 'none');
    }

    return filter_value
});

var saved_count_on_page = sessionStorage.getItem('selectedCount');

$('#product-show').on('change', function () {
    count_on_page = Number ($.find('.product-sort-by.pull-right .nice-select-box .current')[0].innerText);
    $('.product--block').append('<div class="preloader"><i></i></div>');
    initData(count_on_page);
    sessionStorage.setItem('selectedCount',  JSON.stringify(count_on_page));
    return count_on_page;
});

if(saved_count_on_page !== null){
    count_on_page = JSON.parse(saved_count_on_page);
    drawItems();
    sessionStorage.setItem('selectedCount',  JSON.stringify(count_on_page));
}

initData(count_on_page);

function initData(count_on_page) {
    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
        data: {category_id : $('meta[name="category_id"]').attr('content'), count_on_page: count_on_page, filters: filter_value}
    }).done(function (msg) {
        paginationNum = msg;
        paginationCounter(paginationNum);
        makeData(1, count_on_page);
    });
}

var paginationCounter = function (paginationNum) {
    if(Number (paginationNum) !== 0){
        paginationCount = paginationNum;
        return paginationCount;
    }
    else {
        $('.pagination-wraper a').remove();
        $('.pagination-wraper span').remove();
        $('.productLine li').remove();
        $('.preloader').remove();
        $('.product-filter-content').css('display', 'none');
        scrolltop();
        $('#target').append('<div class="filter--null">По вашим критериям нет товаров ;(</div>')
    }
};

function makeData(page_num, count_on_page) {
    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page, filters: filter_value}
    }).done(function( msg ) {
        for(var i= 0; i < msg.length; i++ ) {
            data[i] = {
                dataID: msg[i].id,
                imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
                name: msg[i].name,
                rostovka: msg[i].rostovka_count,
                box: msg[i].box_count,
                type: msg[i].types,
                price: msg[i].prise,
                full__price: msg[i].full__price,
                rostovka__price: msg[i].rostovka__price,
                real_id: msg[i].id,
                product_url: msg[i].product_url + '/' + i,
                size: msg[i].size.name,
                option_type: 'full__price' // Или full__price или rostovka__price
            };
        }

        $(document).ready(function () {
            $('.moveTo_start').addClass('not-active');
            $('.previous_Item').addClass('not-active');
        });
        GetData(data);
        $('.preloader').remove();
    }) .fail(function( msg ) {});
}

var numberPerPage = 12, pageList = [], currentPage = 1, numberOfPages = 0;

function checkMinMax() {
    var MinMaxCounter = [];
    for (var i = 0; i < data.length; i++){
        if(data[i].box === data[i].rostovka){
            var id = data[i].real_id;
            MinMaxCounter.push(id)
        }
    }

    $(document).ready(function(){
        for(var y = 0; y < MinMaxCounter.length; y++){
            $('[data-id="'+MinMaxCounter[y]+'"] [data-set="minimum"]').css('visibility', 'hidden');
        }

    })
}

function NextData(page_num, count_on_page, filter_value) {
    $('.product--block').append('<div class="preloader"><i></i></div>');
    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page, filters: filter_value}
    }).done(function(msg) {
        $('.preloader').remove();
        for(var i= 0; i < msg.length; i++ ) {
            data[i] = {
                dataID: msg[i].id,
                imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
                name: msg[i].name,
                rostovka: msg[i].rostovka_count,
                box: msg[i].box_count,
                type: msg[i].types,
                price: msg[i].prise,
                full__price: msg[i].full__price,
                rostovka__price: msg[i].rostovka__price,
                real_id: msg[i].id,
                product_url: msg[i].product_url + '/' + i,
                size: msg[i].size.name,
                option_type: 'full__price' // Или full__price или rostovka__price
            };
        }

        pageList = data;
        drawItems(pageList);

        if(Number (page_num) === Number (paginationCount)){
            $('.next_Item').addClass('not-active');
            $('.moveTo_end').addClass('not-active');
        }

        if(Number (page_num) !== Number (paginationCount)){
            $('.next_Item').removeClass('not-active');
            $('.moveTo_end').removeClass('not-active');
        }

        if(page_num === 1){
            $(document).ready(function () {
                $('.moveTo_start').addClass('not-active');
                $('.previous_Item').addClass('not-active');
            });
        }else {
            $(document).ready(function () {
                $('.moveTo_start').removeClass('not-active');
                $('.previous_Item').removeClass('not-active');
            })
        }


    }) .fail(function( msg ) {

    });
}

function GetData(data) {
    if (data.length > 0) {
        //work with pagination
        var Pagination = {
            code: '',
            Extend: function (data) {
                data = data || {};
                Pagination.size = data.size || 9999;
                Pagination.page = data.page || 1;
                Pagination.step = data.step || 10;
            },

            Add: function (s, f) {
                for (var i = s; i < f; i++) {
                    Pagination.code += '<a>' + i + '</a>';
                }
            },

            Last: function () {
                Pagination.code += '<i>...</i><a>' + Pagination.size + '</a>';
                page_num = Pagination.size;
            },

            First: function () {
                Pagination.code += '<a>1</a><i>...</i>';
                page_num = 1;
            },

            Click: function () {
                page_num = Pagination.page = +this.innerHTML;
                NextData(page_num, count_on_page, filter_value);
                Pagination.page = +this.innerHTML;
                Pagination.Start();
                scrolltop();
            },

            Prev: function () {
                Pagination.page--;

                page_num = Pagination.page;
                if (page_num < 1) {
                    Pagination.page = 1;
                }

                Pagination.Start();
                scrolltop();

                page_num = Pagination.page;
                NextData(page_num, count_on_page, filter_value);
            },

            Next: function () {
                Pagination.page++;
                if (Pagination.page > Pagination.size) {
                    Pagination.page = Pagination.size;
                }

                page_num = Pagination.page;
                Pagination.Start();
                scrolltop();

                page_num = Pagination.page;
                NextData(page_num, count_on_page, filter_value);
            },

            // First_Page: function () {
            //     Pagination.page = 1;
            //     if (Pagination.page < 1) {
            //         Pagination.page = 1;
            //     }
            //     Pagination.Start();
            //     scrolltop();
            //
            //     page_num = Pagination.page;
            //     NextData(page_num, count_on_page);
            // },

            // Last_Page: function () {
            //     Pagination.page = Pagination.size;
            //     if (Pagination.page < 1) {
            //         Pagination.page = 1;
            //     }
            //     Pagination.Start();
            //     scrolltop();
            //
            //     page_num = Pagination.page;
            //     NextData(page_num, count_on_page);
            // },

            Bind: function () {
                var a = Pagination.e.getElementsByTagName('a');
                for (var i = 0; i < a.length; i++) {
                    if (+a[i].innerHTML === Pagination.page) a[i].className = 'current';
                    a[i].addEventListener('click', Pagination.Click, false);
                }
                scrolltop();
            },

            Finish: function () {
                Pagination.e.innerHTML = Pagination.code;
                Pagination.code = '';
                Pagination.Bind();
            },

            Start: function () {
                if (Pagination.size < Pagination.step * 2 + 6) {
                    Pagination.Add(1, Pagination.size + 1);
                }
                else if (Pagination.page < Pagination.step * 2 + 1) {
                    Pagination.Add(1, Pagination.step * 2 + 4);
                    Pagination.Last();
                }
                else if (Pagination.page > Pagination.size - Pagination.step * 2) {
                    Pagination.First();
                    Pagination.Add(Pagination.size - Pagination.step * 2 - 2, Pagination.size + 1);
                }
                else {
                    Pagination.First();
                    Pagination.Add(Pagination.page - Pagination.step, Pagination.page + Pagination.step + 1);
                    Pagination.Last();
                }
                Pagination.Finish();

                var pageNum = Pagination.page;
                nextPage(pageNum);
                scrolltop();
            },

            Buttons: function (e) {
                var nav = e.getElementsByTagName('a');
                nav[0].addEventListener('click', Pagination.Prev, false);
                nav[1].addEventListener('click', Pagination.Next, false);
            },

            Create: function (e) {
                var html = [
                    // '<div class="moveTo_start scrollUp" onclick="Pagination.First_Page()"><i class="fa fa-angle-double-left"></i></div>',
                    '<a class="previous_Item scrollUp">← предыдущая</a>',
                    '<span class="paginationItems scrollUp"></span>',
                    '<a class="next_Item scrollUp">следующая →</a>',
                    // '<div class="moveTo_end scrollUp" onclick="Pagination.Last_Page()"><i class="fa fa-angle-double-right"></i></div>'
                ];

                e.innerHTML = html.join('');
                Pagination.e = e.getElementsByTagName('span')[0];
                Pagination.Buttons(e);
            },

            Init: function (e, data) {
                Pagination.Extend(data);
                Pagination.Create(e);
                Pagination.Start();
            }
        };

        $(document).on('click', '.nice-select-box .list', function () {
            numberPerPage = Number($.find('.nice-select-box .option.selected')[0].dataset.value);
            pageList = [];
        });
    }

    function load() {
        makePagination();
        loadList();
    }

    load();

/// Work with Data
    function makePagination() {
        numberOfPages = getNumberOfPages();
    }

    function getNumberOfPages() {
        return Math.ceil(data.length / numberPerPage);
    }

    function nextPage(pageNum) {
        currentPage = pageNum;
        loadList(currentPage);
    }

    function loadList(currentPage) {
        var begin = ((currentPage - 1) * numberPerPage);
        var end = begin + numberPerPage;

        pageList = data.slice(begin, end);

        drawItems(pageList);
    }

//Initialization
    var init = function () {
        Pagination.Init(document.getElementById('pagination'), {
            size: Number (paginationCount),
            page: 1,
            step: 3
        });
    };

    if(Number (paginationNum) !== 0){
        init();
    }
}

$('.product--block').append('<div class="preloader"><i></i></div>');

function drawItems(pageList) {
    var delay = 0;
    document.getElementById("target").innerHTML = "";
    $(productTheme).tmpl(pageList).appendTo('#target').each(function () {
        delay += 0.1;
        $(this).addClass('animated fadeIn').css('animation-delay', delay + 's');
        checkMinMax();
    });
}

function scrolltop() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 500, 'swing');
}

function RemoveItem() {
    $('.removeAppended__Item').on('click', function () {
        var clickedTarget = $(this)[0].parentElement.textContent,
            AppendedList = $('.filterInner input');

        $(this)[0].parentElement.remove();

        for (var y = 0; y < values.length; y++) {
            if (clickedTarget === values[y][1]) {
                values.splice(y, 1)
            }
        }


        for (var i = 0; i < AppendedList.length; i++) {
            if (AppendedList[i].defaultValue === clickedTarget) {
                AppendedList[i].checked = false;
            }
        }

        if (values.length === 0) {
            $('.CFBlock').css('display', 'none');
        }


        $('.product--block').append('<div class="preloader"><i></i></div>');


        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/products",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function( msg ) {
            if(msg.length > 0){
                makeFilterData(msg)
            }
            $('.preloader').remove();
        });

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
        });

        sessionStorage.setItem('filterValues', JSON.stringify(values));
    });
}

$('.removeallFilters span').on('click', function () {
    values = [];
    var AppendedList = $('.choosedFilter li');

    for (var i = 0; i < AppendedList.length; i++) {
        $(AppendedList)[i].remove();
    }

    if (values.length === 0) {
        $('.CFBlock').css('display', 'none');
    }

    $('input[type=checkbox]').prop('checked', false);

    $('.product--block').append('<div class="preloader"><i></i></div>');

    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
            filters: values}
    }).done(function( msg ) {
        if(msg.length > 0){
            makeFilterData(msg)
        }
        $('.preloader').remove();
    });

    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
            filters: values}
    }).done(function(msg) {
        paginationNum = msg;
        paginationCounter(paginationNum);
    });
    sessionStorage.setItem('filterValues', JSON.stringify(values));
});

$('.submit_onChoose button').on('click', function () {
    values = [];
    $('.submit_onChoose').removeClass('showed');
    $('input[type=checkbox]').prop('checked', false)
});

//Making sorted data
function makeFilterData(msg) {
    var filtered_data;
    for(var i= 0; i < msg.length; i++ ) {
        data[i] = {
            dataID: msg[i].id,
            imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
            name: msg[i].name,
            rostovka: msg[i].rostovka_count,
            box: msg[i].box_count,
            type: msg[i].types,
            price: msg[i].prise,
            full__price: msg[i].full__price,
            rostovka__price: msg[i].rostovka__price,
            real_id: msg[i].id,
            product_url: msg[i].product_url + '/' + i,
            size: msg[i].size.name,
            option_type: 'full__price' // Или full__price или rostovka__price
        };
    }

    pageList = data;
    filtered_data = data;
    drawItems(pageList);
    GetData(filtered_data);
}

getSizes();
var min_range = 0, max_range = 0;
function getSizes() {
    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/getSizesMass"
    }).done(function( msg ) {
        slider(msg);
    });

}

// Slider from to
function slider(msg) {
    min_range = Number (msg[0]);
    max_range = Number (msg[1]);
    $( "#slider-range" ).slider({
        range: true,
        min: min_range,
        max: max_range,
        values: [10, 50],
        slide: function(event, ui) {
            $("#minchoose").val(ui.values[ 0 ]);
            $("#amount").val(ui.values[ 1 ] );
        },
        change: function() {
            var min, max, sizes = [], changeFlag = false;
            min = Number ($.find('#minchoose')[0].value);
            max = Number ($.find('#amount')[0].value);

            for (var y = 0; y < filter_value.length; y++){
                if (filter_value[y].sizes){
                    filter_value.splice(y, 1);
                    pushValue();
                }
            }
            var flag = false;
            if(changeFlag === false){
                for(var i = 0; i < filter_value.length; i++){
                    if(filter_value[i][0] === "size_min"){
                        filter_value[i][1] = min;
                        flag = true;
                    }
                    if(filter_value[i][0] === "size_max"){
                        filter_value[i][1] = max;
                        flag = true;
                    }
                }
                sizes['Sizes'] = [min, max];
                if(flag === false){
                    filter_value.push(['size_min', min, 'size']);
                    filter_value.push(['size_max', max, 'size']);
                }
                changeFlag = true;
            }

            function pushValue() {
                var flag = false;

                for(var i = 0; i < filter_value.length; i++){
                    if(filter_value[i][0] === "size_min"){
                        filter_value[i][1] = min;
                        flag = true;
                    }
                    if(filter_value[i][0] === "size_max"){
                        filter_value[i][1] = max;
                        flag = true;
                    }
                }

                if(flag === false){
                    filter_value.push(['size_min', min, 'size']);
                    filter_value.push(['size_max', max, 'size']);
                }
                changeFlag = true;
            }

            $('.product--block').append('<div class="preloader"><i></i></div>');

            $.ajax({
                method: "POST",
                url: $('meta[name="root-site"]').attr('content') + "/api/products",
                data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                    filters: filter_value}
            }).done(function( msg ) {
                console.log(msg);
                $('.preloader').remove();
                makeFilterData(msg);

            }) .fail(function( msg ) {

            });

            $.ajax({
                method: 'POST',
                url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
                data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                    filters: filter_value}
            }).done(function(msg) {
                console.log(msg);
                paginationNum = msg;
                paginationCounter(paginationNum);
            });
        }
    });
    $( "#minchoose" ).val($( "#slider-range" ).slider( "values", 0 ));
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 1 ));
}

