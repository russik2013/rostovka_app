'use strict';
var data = [],
    productTheme = $('#template'),
    count_on_page = Number ($.find('#product-show option')[0].innerText),
    paginationNum,
    paginationCount = 0,
    page_num = 1,
    filter_value = [],
    savedFilters = localStorage.getItem('filterValues'),
    getSavedFilters,
    selectedCount = Number ($.find('#product-show option')[0].innerText),
    choosedType = 0;

if(localStorage.getItem('pageNum') !== null){

} else {
    localStorage.setItem('pageNum', page_num);
}

getSavedFilters = JSON.parse(savedFilters);

function localData() {
    if(localStorage.getItem('pageNum') !== null){
        page_num = Number (localStorage.getItem('pageNum'));
    } else {
        page_num = 1;
    }
    
    if(filter_value === null){
        filter_value = [];
    } else {
        filter_value = JSON.parse(savedFilters);
    }

    if(selectedCount !== 0){
        selectedCount = Number (localStorage.getItem('selectedCount'));
    } else {
        selectedCount = 24;
    }
}

//Прелоадер при загрузке страницы
$('.product--block').append('<div class="preloader"><i></i></div>');

///Работа с фильтрами, вызывается с DOM
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
                filters: values, choosedType: choosedType}
        }).done(function(msg) {
            if(msg.length > 0){
                makeFilterData(msg);
                $('.error--message').remove();
                $('.product-filter-content').css('display', 'block');
                $('.pagination-wraper').css('display', 'block');
                checkPrices(data)
            }
            $('.preloader').remove();
        });

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values, choosedType: choosedType}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
        });

        localStorage.setItem('pageNum', 1);
        localStorage.setItem('filterValues', JSON.stringify(values));
    }

    if ($(this).is(':checked')) {
        values.push([targetID, $(this)[0].defaultValue, $(target)[0].childNodes[1].dataset.id]);

        localStorage.setItem('filterValues', JSON.stringify(values));
    }

    if (values.length !== 0) {
        var AppendedList = $('.choosedFilter li');
        $('.CFBlock').css('display', 'block');
        localStorage.setItem('pageNum', 1);
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
                '<i class="fa fa-times removeAppended__Item" aria-hidden="true"></i>' +
                '</li>');
        }
        RemoveItem();

        $('.product--block').append('<div class="preloader"><i></i></div>');

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
                filters: values, choosedType: choosedType}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
            activateData();
        });

        filter_value = values;
        return filter_value;
    }

    if (values.length === 0) {
        $('.CFBlock').css('display', 'none');
    }

    return filter_value
});

// Отрисовка данных после выбора фильтра
function activateData() {
    page_num = 1;
    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: count_on_page,
            filters: values, choosedType: choosedType}
    }).done(function(msg) {
        if(msg.length > 0){
            localStorage.setItem('pageNum', 1);
            makeFilterData(msg);
            $('.preloader').remove();
            checkPrices(data);
        }else{
            $('.preloader').remove();
            $('.product-list-item ul li').css('display', 'none');
            $('.product-filter-content').css('display', 'none');
            $('.pagination-wraper').css('display', 'none');
            if($('.error--message').length === 0){
                $('.product-list-view').append('<div class="col-md-12 error--message">Выбранные фильтры не дали результатов</div>')
            }
        }
    });
}
// Отрисовка данных после выбора фильтра

//Получение сохраненного количество (24 - 36 - 48) товаров на страницеxw
var saved_count_on_page = Number (localStorage.getItem('selectedCount'));

//Выбор количество элементов на странице
$('#product-show').on('change', function () {
    saved_count_on_page = Number ($.find('.product-sort-by.pull-right .nice-select-box .current')[0].innerText);
    $('.product--block').append('<div class="preloader"><i></i></div>');

    localStorage.setItem('selectedCount',  JSON.stringify(saved_count_on_page));
    initData(saved_count_on_page);
});

//Отрисвока данных сохрененных данных, если localstorage не пуст. Если пуст, заполняются дефолтовые значения
setSavedOptionCount();
function setSavedOptionCount() {
    if(localStorage.getItem('pageNum') !== null) {
        page_num = Number (localStorage.getItem('pageNum'));

        drawItems(page_num);
    } else {
        page_num = 1;
    }

    if(saved_count_on_page !== 0) {
        for (var l = 0; l < $.find('[data-set="selectCount"] option').length; l++){
            if(Number ($.find('[data-set="selectCount"] option')[l].attributes[0].value) === saved_count_on_page) {
                $.find('[data-set="selectCount"] option')[l].setAttribute('selected', 'selected')
            }
        }
    } else {
        saved_count_on_page = 24;
        count_on_page = 24;
        localStorage.setItem('selectedCount',  JSON.stringify(count_on_page));
        for (var z = 0; z < $.find('[data-set="selectCount"] option').length; z++){
            if(Number ($.find('[data-set="selectCount"] option')[z].attributes[0].value) === saved_count_on_page) {
                $.find('[data-set="selectCount"] option')[z].setAttribute('selected', 'selected')
            }
        }
    }
}

if(getSavedFilters !== null) {
    setSavedOptionCount();

    var items_Count = Number ($.find('.checkbox-circle').length);
    for (var i = 0; i < getSavedFilters.length; i++){
        for(var b = 0; b < items_Count; b++){
            if($.find('.checkbox-circle input')[b].dataset.value === getSavedFilters[i][0]){
                $.find('.checkbox-circle input')[b].setAttribute("checked", "checked");
            }
        }
    }


    values = getSavedFilters;
    if(values.length !== 0){
        var AppendedList = $('.choosedFilter li');
        $('.CFBlock').css('display', 'block');

        Number(AppendedList.length++);
        for (var y = 0; y < values.length; y++) {
            for (var z = 0; z < AppendedList.length; z++) {
                if ($.find('.checkbox-circle input')[z].dataset.value === values[y][z]) {
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
    }

    $('.product--block').append('<div class="preloader"><i></i></div>');

    $.ajax({
        method: 'POST',
        url: "../api/products",
        data: {
            category_id : $('meta[name="category_id"]').attr('content'),
            page_num: page_num,
            count_on_page: Number (saved_count_on_page),
            filters: values,
            choosedType: choosedType
        }
    }).done(function(msg) {
        if(msg.length > 0){
            for(var i= 0; i < msg.length; i++ ) {
                data[i] = {
                    dataID: msg[i].id,
                    imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
                    name: msg[i].name,
                    rostovka: msg[i].rostovka_count,
                    box: msg[i].box_count,
                    type: msg[i].types,
                    price: Number (msg[i].prise),
                    full__price: msg[i].full__price,
                    rostovka__price: msg[i].rostovka__price,
                    real_id: msg[i].id,
                    product_url: msg[i].product_url + '/' + i,
                    size: msg[i].size.name,
                    old_prise: msg[i].prise_default,
                    option_type: 'full__price' // Или full__price или rostovka__price
                };
            }
            checkMinMax(data);
            checkPrices(data);
            pageList = data;
            GetData(pageList);
            drawItems(pageList);
            $('.preloader').remove();
        } else {
            $('.preloader').remove();
            $('.product-list-item ul li').css('display', 'none');
            $('.product-filter-content').css('display', 'none');
            $('.pagination-wraper').css('display', 'none');
            $('.product-list-view').append('<div class="col-md-12 error--message">Выбранные фильтры не дали результатов</div>')
        }
    });

    $.ajax({
        method: 'POST',
        url: "../api/pagination",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: Number (saved_count_on_page),
            filters: values, choosedType: choosedType}
    }).done(function(msg) {
        paginationNum = msg;
        paginationCounter(paginationNum);
    });
}
else{
    initData(count_on_page);
}

//Инициализация созданние деф. данных
function initData(count_on_page) {
    localData();
    if(localStorage !== null) {
        var local_filter_value = localStorage.getItem('filterValues');
        filter_value = JSON.parse(local_filter_value);

        console.log(count_on_page);
        $.ajax({
            method: "POST",
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {
                category_id : $('meta[name="category_id"]').attr('content'),
                page_num: page_num,
                count_on_page: count_on_page,
                filters: filter_value,
                choosedType: choosedType
            }
        }).done(function (msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
            makeData(page_num, count_on_page);
        });
    }
}

var paginationCounter = function (paginationNum) {
    if(Number (paginationNum) !== 0){
        paginationCount = paginationNum;
        // GetData(data);
        return paginationCount;
    }
    else {
        $('.pagination-wraper a').remove();
        $('.pagination-wraper span').remove();
        $('.productLine li').remove();
        $('.preloader').remove();
        $('.product-filter-content').css('display', 'none');
        scrolltop();
    }
};

//Создание данных
function makeData(page_num, count_on_page) {
    // data = [];
    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {
            category_id : $('meta[name="category_id"]').attr('content'),
            page_num: page_num,
            count_on_page: count_on_page,
            filters: filter_value,
            choosedType: choosedType
        }
    }).done(function( msg ) {
        if(msg.length !== 0){
            for(var i= 0; i < msg.length; i++ ) {
                if(msg[i].photo !== null){
                    data[i] = {
                        dataID: msg[i].id,
                        imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/' + msg[i].photo.photo_url,
                        name: msg[i].name,
                        rostovka: msg[i].rostovka_count,
                        box: msg[i].box_count,
                        type: msg[i].types,
                        price: Number (msg[i].prise),
                        full__price: msg[i].full__price,
                        rostovka__price: msg[i].rostovka__price,
                        real_id: msg[i].id,
                        product_url: msg[i].product_url, // раньше было так msg[i].product_url + '/' + i
                        size: msg[i].size.name,
                        old_prise: Number (msg[i].prise_default),
                        option_type: 'full__price' // Или full__price или rostovka__price
                    };
                    checkMinMax(data);
                    checkPrices(data);
                } else {
                    data[i] = {
                        dataID: msg[i].id,
                        imgUrl: $('meta[name="root-site"]').attr('content') + '/image/' + 'noimage.jpg',
                        name: msg[i].name,
                        rostovka: msg[i].rostovka_count,
                        box: msg[i].box_count,
                        type: msg[i].types,
                        price: Number (msg[i].prise),
                        full__price: msg[i].full__price,
                        rostovka__price: msg[i].rostovka__price,
                        real_id: msg[i].id,
                        product_url: msg[i].product_url, // раньше было так msg[i].product_url + '/' + i
                        size: msg[i].size.name,
                        old_prise: Number (msg[i].prise_default),
                        option_type: 'full__price' // Или full__price или rostovka__price
                    };
                    checkMinMax(data);
                    checkPrices(data);
                }
                $(document).ready(function () {
                    $('.moveTo_start').addClass('not-active');
                    $('.previous_Item').addClass('not-active');
                });
                GetData(data);
                $('.preloader').remove();
                //Проверка дублей

                checkPagination();
            }
            


        } else {
            $('#target').append('<div style="    padding-top: 20px;\n' +
                '    text-align: center;\n' +
                '    font-size: 20px;\n' +
                '    text-transform: uppercase;">Нет товаров</div>')
        }


    }) .fail(function( msg ) {});
}

//Создание данных по фильтру
var numberPerPage = 24, pageList = [], currentPage = 1, numberOfPages = 0;
function NextData(page_num, count_on_page, filter_value) {
    data = [];
    $('.product--block').append('<div class="preloader"><i></i></div>');
    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num,
            count_on_page: count_on_page,
            filters: filter_value,
            choosedType: choosedType}
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
                price: Number (msg[i].prise),
                full__price: msg[i].full__price,
                rostovka__price: msg[i].rostovka__price,
                real_id: msg[i].id,
                product_url: msg[i].product_url + '/' + i,
                old_prise: Number (msg[i].prise_default),
                size: msg[i].size.name,
                option_type: 'full__price' // Или full__price или rostovka__price
            };
        }

        pageList = data;
        drawItems(pageList);
        checkMinMax(data);
        checkPrices(data);

        if(Number (page_num) === Number (paginationCount)){
            $('.next_Item').addClass('not-active');
            $('.moveTo_end').addClass('not-active');
        }

        if(Number (page_num) !== Number (paginationCount)){
            $('.next_Item').removeClass('not-active');
            $('.moveTo_end').removeClass('not-active');
        }

        if(page_num === 1) {
            $(document).ready(function () {
                $('.moveTo_start').addClass('not-active');
                $('.previous_Item').addClass('not-active');
            });
        } else {
            $(document).ready(function () {
                $('.moveTo_start').removeClass('not-active');
                $('.previous_Item').removeClass('not-active');
            })
        }

    }) .fail(function( msg ) {

    });
}

//Работа с пагинацией, массивом товаров
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
            },

            Click: function () {
                page_num = Pagination.page = +this.innerHTML;
                localStorage.setItem('pageNum', page_num);
                count_on_page = Number (localStorage.getItem('selectedCount'));
                if(getSavedFilters !== null){
                    filter_value = getSavedFilters;
                }
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
                    '<a class="next_Item scrollUp">следующая →</a>'
                    // '<div class="moveTo_end scrollUp" onclick="Pagination.Last_Page()"><i class="fa fa-angle-double-right"></i></div>'
                ];

                e.innerHTML = html.join('');
                Pagination.e = e.getElementsByTagName('span')[0];
                Pagination.Buttons(e);
            },

            Init: function (e, data) {
                if(localStorage.getItem('pageNum') !== null) {
                    data.page = Number (localStorage.getItem('pageNum'));
                    Pagination.Extend(data);
                    Pagination.Create(e);
                    Pagination.Start();
                } else {
                    Pagination.Extend(data);
                    Pagination.Create(e);
                    Pagination.Start();
                }
            }
        };
    }
    
    function load() {
        makePagination();
        loadList();
    }

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
        pageList = data;

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

    if(Number (paginationNum) !== 0) {
        init();
    }
}

//Отрисовка элементов TMPL
function drawItems(pageList) {
    var delay = 0;
    document.getElementById("target").innerHTML = "";
    $(productTheme).tmpl(pageList).appendTo('#target').each(function () {
        delay += 0.1;
        $(this).addClass('animated fadeIn').css('animation-delay', delay + 's');
    });
}

//Проверка дублей расстовки/ящика
function checkMinMax(data) {
    var MinMaxCounter = [];
    for (var i = 0; i < data.length; i++) {
        if(data[i].box === data[i].rostovka) {
            var id = data[i].real_id;
            MinMaxCounter.push(id);
        }
    }

    $(document).ready(function(){
        for(var y = 0; y < MinMaxCounter.length; y++){
            $('[data-id="'+MinMaxCounter[y]+'"] [data-set="minimum"]').css('visibility', 'hidden');
        }
    })
}


// Проверка дублей скидок
function checkPrices(data) {
    var MinMaxCounter = [];
    for (var i = 0; i < data.length; i++) {
        if(data[i].price === data[i].old_prise) {
            var id = data[i].real_id;
            MinMaxCounter.push(id);
        }
    }

    $(document).ready(function(){
        for(var y = 0; y < MinMaxCounter.length; y++){
            $('[data-id="'+MinMaxCounter[y]+'"] [data-set="old--Price"]').css('visibility', 'hidden');
            $('[data-id="'+MinMaxCounter[y]+'"] [data-set="prodPrice"]').css('margin-top', '0');
        }
    })
}

//Удаление итема из фильтра
function RemoveItem() {
    $('.removeAppended__Item').on('click', function () {
        var clickedTarget = $(this)[0].parentElement.textContent,
            AppendedList = $('.filterInner input');

        $('.error--message').remove();
        $('.product-filter-content').css('display', 'block');
        $('.pagination-wraper').css('display', 'block');

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
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page,
                filters: values, choosedType: choosedType}
        }).done(function( msg ) {
            if(msg.length > 0){
                makeFilterData(msg)
            }
            $('.preloader').remove();
        });

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
            data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page,
                filters: values, choosedType: choosedType}
        }).done(function(msg) {
            paginationNum = msg;
            paginationCounter(paginationNum);
        });

        localStorage.setItem('filterValues', JSON.stringify(values));
    });
}

//Очистка данных (Фильтры, локалсторейдж, установка данных на дефолтовые значения)
$('.removeallFilters span').on('click', function (e) {
    values = [];
    localStorage.clear();
    saved_count_on_page = 0;
    var AppendedList = $('.choosedFilter li');
    localStorage.setItem('pageNum', 1);
    $('.error--message').remove();
    $('.product-filter-content').css('display', 'block');
    $('.pagination-wraper').css('display', 'block');

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
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: 24,
            filters: values, choosedType: choosedType}
    }).done(function( msg ) {
        if(msg.length > 0){
            data = [];
            pageList = [];
            makeFilterData(msg)
        }
        $('.preloader').remove();

        $('[data-target="goodsCount"] .nice-select-box .current')[0].innerText = 24;
        $('[data-target="goodsCount"] .nice-select-box [data-value="24"]').addClass('selected');
        $('[data-target="goodsCount"] .nice-select-box [data-value="36"]').removeClass('selected');
    });

    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: 1, count_on_page: 24,
            filters: values, choosedType: choosedType}
    }).done(function(msg) {
        paginationNum = msg;
        page_num = 1; count_on_page = 24; filter_value = null;
        makeData(page_num, count_on_page);
        paginationCounter(paginationNum);
        setSavedOptionCount();
    });
});

//Создание данных после выбора фильтров
function makeFilterData(msg) {
    var filtered_data, data = [];
    for(var i= 0; i < msg.length; i++ ) {
        data[i] = {
            dataID: msg[i].id,
            imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
            name: msg[i].name,
            rostovka: msg[i].rostovka_count,
            box: msg[i].box_count,
            type: msg[i].types,
            price: Number (msg[i].prise),
            full__price: msg[i].full__price,
            rostovka__price: msg[i].rostovka__price,
            real_id: msg[i].id,
            product_url: msg[i].product_url + '/' + i,
            size: msg[i].size.name,
            old_prise: Number (Number(msg[i].prise_default)),
            option_type: 'full__price' // Или full__price или rostovka__price
        };
    }

    pageList = data;
    filtered_data = data;

    drawItems(pageList);
    GetData(filtered_data);
    
    //Проверка дублей
    checkMinMax(data);
    checkPrices(data);
}

// Сортировка данных
$('#short-by').on('change', function () {
    choosedType = $('#short-by :selected').val();
    data = [];
    $('.product--block').append('<div class="preloader"><i></i></div>');

    count_on_page = localStorage.getItem('selectedCount');
    page_num = localStorage.getItem('pageNum');

    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/products",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page, filters: filter_value, choosedType: choosedType}
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
                price: Number (msg[i].prise),
                full__price: msg[i].full__price,
                rostovka__price: msg[i].rostovka__price,
                real_id: msg[i].id,
                old_prise: Number (msg[i].prise_default),
                product_url: msg[i].product_url + '/' + i,
                size: msg[i].size.name,
                option_type: 'full__price' // Или full__price или rostovka__price
            };
        }

        $('.preloader').remove();
        pageList = data;
        drawItems(pageList);
        checkPrices(data);
        checkMinMax(data)
    }) .fail(function( msg ) {

    });

    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
        data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page,
            filters: filter_value}
    }).done(function(msg) {
        if(msg.length === 0){

        }
        else{
            paginationNum = msg;
            paginationCounter(paginationNum);
        }
    });
});


//Работа с размерамии, от - до
getSizes();
function getSizes() {
    $.ajax({
        method: 'POST',
        url: $('meta[name="root-site"]').attr('content') + "/api/getSizesMass"
    }).done(function( msg ) {
        slider(msg);
    });

}
// Слайдер от - до
function slider(msg) {
    var min_range = Number (msg[0]);
    var max_range = Number (msg[1]);
    
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
            page_num = Number (localStorage.getItem('pageNum'));
            if(filter_value === null){
                filter_value = []
            }
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
            if(changeFlag === false) {
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
                if(flag === false) {
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
                data: {category_id : $('meta[name="category_id"]').attr('content'),
                    page_num: page_num,
                    count_on_page: count_on_page,
                    choosedType: choosedType,
                    filters: filter_value
                }
            }).done(function( msg ) {

                if(msg.length === 0){
                    $('.preloader').remove();
                    $('.product-list-view li').css('display', 'none');
                    $('.pagination-wraper').css('display', 'none');
                    $('.product-filter-content').css('display', 'none');
                    if($('.alert.alert-warning').length < 1){
                        $('#target').append('<div class="alert alert-warning">\n' +
                            '  <strong>Поиск не дал результатов</strong>\n' +
                            '</div>');
                    }
                }
                else{
                    $('.product-list-view li').css('display', 'block');
                    $('.pagination-wraper').css('display', 'block');
                    $('.product-filter-content').css('display', 'block');
                    makeFilterData(msg);
                    $('.alert.alert-warning').remove();
                    $('.preloader').remove();
                }


            }) .fail(function( msg ) {

            });

            $.ajax({
                method: 'POST',
                url: $('meta[name="root-site"]').attr('content') + "/api/pagination",
                data: {category_id : $('meta[name="category_id"]').attr('content'), page_num: page_num, count_on_page: count_on_page,
                    filters: filter_value}
            }).done(function(msg) {
                if(msg.length === 0){

                }
                else{
                    paginationNum = msg;
                    paginationCounter(paginationNum);
                }
            });
        }
    });
    $( "#minchoose" ).val($( "#slider-range" ).slider( "values", 0 ));
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 1 ));
}

// Работа с иконками для моб. версии
$('.filter--mobileButton').on('click', function () {
    $('.category--Filters').toggleClass('active');
});
$('.category--Filters .close-icon').on('click', function () {
    $('.category--Filters').removeClass('active');
});

// Медленный скролл
function scrolltop() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 500, 'swing');
}

function checkPagination() {
    if($('.paginationItems a').length <= 1){
        $('.next_Item.scrollUp').css('display', 'none')
    } else {
        $('.next_Item.scrollUp').css('display', 'inline-block')
    }
}