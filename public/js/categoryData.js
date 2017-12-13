'use strict';
var data = [], productTheme = $('#template');


$.ajax({
    method: "POST",
    url: "../api/products",
    data: {category_id : $('meta[name="category_id"]').attr('content')}
}).done(function( msg ) {
    for(var i= 0; i < msg.length; i++ ) {
        data[i] = {
            dataID: i,
            imgUrl: "img/product-img/2imv.jpg",
            name: msg[i].name,
            rostovka: msg[i].rostovka_count,
            box: msg[i].box_count,
            type: msg[i].types,
            price: msg[i].prise,
            full__price: msg[i].full__price,
            rostovka__price: msg[i].rostovka__price,
            real_id: msg[i].id,
            product_url: msg[i].product_url + '/' + i,
            option_type: 'full__price' // Или full__price или rostovka__price
        };

    }

    GetData(data)
}) .fail(function( msg ) {

});

var numberPerPage = 12, pageList = [], currentPage = 1, numberOfPages = 0;

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
            },

            First: function () {
                Pagination.code += '<a>1</a><i>...</i>';
            },

            Click: function () {
                Pagination.page = +this.innerHTML;
                Pagination.Start();
            },

            Prev: function () {
                Pagination.page--;
                if (Pagination.page < 1) {
                    Pagination.page = 1;
                }
                Pagination.Start();
                scrolltop();
            },

            Next: function () {
                Pagination.page++;
                if (Pagination.page > Pagination.size) {
                    Pagination.page = Pagination.size;
                }
                Pagination.Start();
                scrolltop();
            },

            First_Page: function () {
                Pagination.page = 1;
                if (Pagination.page < 1) {
                    Pagination.page = 1;
                }
                Pagination.Start();
                scrolltop();
            },

            Last_Page: function () {
                Pagination.page = Pagination.size;
                if (Pagination.page < 1) {
                    Pagination.page = 1;
                }
                Pagination.Start();
                scrolltop();
            },

            Bind: function () {
                var a = Pagination.e.getElementsByTagName('a');
                for (var i = 0; i < a.length; i++) {
                    if (+a[i].innerHTML === Pagination.page) a[i].className = 'current';
                    a[i].addEventListener('click', Pagination.Click, false);
                    scrolltop();
                }
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
            },

            Buttons: function (e) {
                var nav = e.getElementsByTagName('a');
                nav[0].addEventListener('click', Pagination.Prev, false);
                nav[1].addEventListener('click', Pagination.Next, false);
            },

            Create: function (e) {
                var html = [
                    '<div class="moveTo_start scrollUp" onclick="Pagination.First_Page()"><i class="fa fa-angle-double-left"></i></div>',
                    '<a class="previous_Item scrollUp">← предыдущая</a>',
                    '<span class="paginationItems scrollUp"></span>',
                    '<a class="next_Item scrollUp">следующая →</a>',
                    '<div class="moveTo_end scrollUp" onclick="Pagination.Last_Page()"><i class="fa fa-angle-double-right"></i></div>'
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
            numberPerPage = Number($.find('.nice-select-box .option.selected')[1].dataset.value);
            pageList = [];
            currentPage = 1;
            numberOfPages = 0;
            makePagination();
            loadList();
            init();
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
        loadList();
    }

    function loadList() {
        var begin = ((currentPage - 1) * numberPerPage);
        var end = begin + numberPerPage;

        pageList = data.slice(begin, end);
        drawItems();
    }



//Initialization

    var init = function () {
        Pagination.Init(document.getElementById('pagination'), {
            size: numberOfPages,
            page: 1,
            step: 3
        });
    };

    init();
}

function drawItems() {
    var delay = 0;
    document.getElementById("target").innerHTML = "";

    $(productTheme).tmpl(pageList).appendTo('#target').each(function () {
        delay += 0.1;
        $(this).addClass('animated fadeIn').css('animation-delay', delay + 's');
    });
}

function scrolltop() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 500, 'swing');
}

///work with filters
var values = [], targetID = 0;

$('.sidebar-container input[type=checkbox]').on('change', function () {
    var target = $(this)[0].parentNode.parentNode.parentNode;
    targetID = $(this)[0].parentNode.childNodes[1].id;

    if ($(this).is(':checked')) {
        values.push([targetID, $(this)[0].defaultValue, $(target)[0].childNodes[1].dataset.id]);
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
    }

    if ($(this).is(':not(:checked)')) {
        var unchecked = $(this)[0].parentNode.childNodes[1].defaultValue,
            AppendedLength = $('.choosedFilter li');

        for (var i = 0; i < values.length; i++) {
            if (unchecked === values[i][1]) {
                for (var k = 0; k < AppendedLength.length; k++) {
                    if (AppendedLength[k].innerText === values[i][1]) {
                        AppendedLength[k].remove()
                    }
                }
                values.splice(i, 1);
            }
        }
    }

    if (values.length === 0) {
        $('.CFBlock').css('display', 'none');
    }
});

function RemoveItem() {
    $('.removeAppended__Item').on('click', function () {
        var clickedTarget = $(this)[0].parentElement.textContent,
            AppendedList = $('.filterInner input');

        $(this)[0].parentElement.remove();

        for (var y = 0; y < values.length; y++) {
            if (clickedTarget === values[y][1]) {
                console.log('asda' + values.splice(y, 1))
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

});

$('.submit_onChoose button').on('click', function () {
    values = [];
    $('.submit_onChoose').removeClass('showed');
    $('input[type=checkbox]').prop('checked', false)
});