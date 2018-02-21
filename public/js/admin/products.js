$('.remove__product').on('click', function () {
    var productName = $(this)[0].parentElement.parentNode.children[1].innerText,
        productID = $(this)[0].parentNode.parentNode.dataset.id,
        productRemove = $(this)[0].parentNode.parentNode;

    swal({
        title: 'Удалить товар <u>'+ productName +'</u>',
        type: 'info',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Да',
        cancelButtonText: 'Нет'
    }).then(function() {
        $(productRemove).remove();
        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + '/product/delete',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), id: productID}
        }).done(function(msg) {
        });
    });
});



var $table = $('#table');
$(function () {
    $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('refreshOptions', {
            exportDataType: $(this).val()
        });
    });
});

var trBoldBlue = $("table");

$(trBoldBlue).on("click", "tr", function (){
    $(this).toggleClass("bold-blue");
});

$('input[type=file]').bootstrapFileInput();


var fileChoosedZip = false, fileChoosedXLS = false, targetError = $('.file-input-wrapper');

function getFile() {
    fileChoosedZip = true;
    return fileChoosedZip
}

function getFileXls() {
    fileChoosedXLS = true;
    return fileChoosedXLS
}

function getManufactures(e) {
    console.log(e);
}

function getSeason(e) {
    console.log(e);
}

function getSelect(e) {
    if(e.srcElement.value === 'delete'){
        $('.file--uploader').css('display', 'none');
        $('.xsl--uploader').css('display', 'block');
        $('.header--add--buttons').css('display', 'block');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
        $('.type_Options').css('display', 'none');
        $('button.upload').css('display', 'none');
        $('.sorting__Option.availability').css('display', 'none');
        $('.edit').remove();
        $('.header--add--buttons').append('' +
            '<button class="remove col-md-4 col-sm-12 col-xs-12" style="top: 20px; display: block;">Удалить</button>');
        getFileXls();
    }

    else{
        $('.file--uploader').css('display', 'block');
        $('button.upload').css('top', '20px');
        $('button.upload').css('display', 'block');
        $('button.download').css('display', 'none');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
        $('.type_Options').css('display', 'none');
        $('.edit').remove();
        $('.remove').remove();
    }

    if(e.srcElement.value === 'upload') {
        $('.file--uploader').css('display', 'block');
        $('.xsl--uploader').css('display', 'block');
        $('button.upload').css('display', 'block');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
        $('.type_Options').css('display', 'none');
        $('.sorting__Option.availability').css('display', 'none');
        $('.edit').remove();
        $('.remove').remove();
    }

    if(e.srcElement.value === 'edit'){
        $('.xsl--uploader').css('display', 'block');
        $('.file--uploader').css('display', 'block');
        $('.upload').css('display', 'none');
        $('.sorting__Option.availability').css('display', 'none');
        $('.header--add--buttons').append('' +
            '<button class="edit col-md-4 col-sm-12 col-xs-12" style="top: 20px; display: block;">Загрузить</button>');
        getFile();
        getFileXls();
        $('.remove').remove();
    }

    if(e.srcElement.value === 'download'){
        $('.file--uploader').css('display', 'none');
        $('.xsl--uploader').css('display', 'none');
        $('button.upload').css('display', 'none');
        $('.sorting__Option.availability').css('display', 'block');
        $('.header--add--buttons').append("<button class='download allProducts col-md-4 col-sm-12 col-xs-12' onclick='getUserAllProducts()'>Скачать</button>");
        $('.header--add--buttons').append("<button class='download for_Supliers col-md-4 col-sm-12 col-xs-12' onclick='getManufacturesAllProducts()'>Скачать для поставщиков</button>");
        $('select.manufacturer_Options').css('display', 'block');
        $('.seasone_Options').css('display', 'block');
        $('.type_Options').css('display', 'block');
        $('.edit').remove();
        $('.remove').remove();
    }
}

function getUserAllProducts(event) {
    $('.produtsTablePage').append('<div class="preloader"><i></i></div>');
    $.ajax({
        method: 'GET',
        data: {'_token': $('meta[name="csrf-token"]').attr('content')},
        manufacturer_id: $('.sorting__Option.manufacturer_Options option:selected').val(),
        type_id: $('.sorting__Option.seasone_Options option:selected').val(),
        season_id: $('.sorting__Option.type_Options option:selected').val(),
        success: function(){
            $('.preloader').remove();
            window.location = $('meta[name="root-site"]').attr('content') + '/csvDownload?manufacturer_id='+
                $('.sorting__Option.manufacturer_Options option:selected').val() +'&season_id='+
                $('.sorting__Option.seasone_Options option:selected').val() + '&type_id='+
                $('.sorting__Option.type_Options option:selected').val() + '&accessibility=' +
                $('.sorting__Option.availability option:selected').val()
        }
    });
}

function getManufacturesAllProducts() {
    $('.produtsTablePage').append('<div class="preloader"><i></i></div>');
    $.ajax({
        method: 'GET',
        data: {'_token': $('meta[name="csrf-token"]').attr('content')},
            manufacturer_id: $('.sorting__Option.manufacturer_Options option:selected').val(),
            type_id: $('.sorting__Option.seasone_Options option:selected').val(),
            season_id: $('.sorting__Option.type_Options option:selected').val(),
            accessibility: $('.sorting__Option.availability option:selected').val(),
        success: function(){
            $('.preloader').remove();
            window.location = $('meta[name="root-site"]').attr('content') + '/csvDownloadOrdersToManufacturer?manufacturer_id='+
                $('.sorting__Option.manufacturer_Options option:selected').val() +'&season_id='+
                $('.sorting__Option.seasone_Options option:selected').val() + '&type_id='+
                $('.sorting__Option.type_Options option:selected').val()  + '&accessibility=' +
                $('.sorting__Option.availability option:selected').val()
        }
    });
}

$(document).ready(function () {
    $('.sorting__Option').data("toggle");
    $('.inputs--group a').each(function(i) {
        if ( i === 0 ) {
            $(this).addClass('file--uploader');
        }
        if ( i === 1 ) {
            $(this).addClass('xsl--uploader');
        }
    });
});

$(document).on('click', 'button.edit', function () {
    if (fileChoosedZip === true && fileChoosedXLS === true) {
        var zip_data = new FormData();
        zip_data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        zip_data.append('photo', $('#archive').prop('files')[0]);
        zip_data.append('files', $('#xslsx').prop('files')[0]);

        $('.produtsTablePage').append('<div class="preloader"><i></i></div>');
        $.ajax({
            method: 'POST',
            headers: {'Content-Type': undefined},
            url: $('meta[name="root-site"]').attr('content') + '/csvLoadUpdate',
            processData: false,
            contentType: false,
            data: zip_data,
            success: function(){
                $('.preloader').remove();
                $('.table-responsive').append(
                    '<div class="alert alert-success" role="alert" style="position: absolute;\n' +
                    '    top: -140px;\n' +
                    '    width: 100%;\n' +
                    '    left: 0;">\n' +
                    '<a href="#" class="alert-link">Товары умпешно загруженны</a>\n' +
                    '</div>'
                );

                if($('.alert')){
                    setTimeout(removeAlert, 2000);
                }
            },
            error: function () {
                $('.table-responsive').append(
                    '<div class="alert alert-danger" role="alert" style="position: absolute;\n' +
                    '    top: -140px;\n' +
                    '    width: 100%;\n' +
                    '    left: 0;">\n' +
                    '<a href="#" class="alert-link">ОШБИКА! Выберите файлы</a>\n' +
                    '</div>'
                );

                if($('.alert')){
                    setTimeout(removeAlert, 2000);
                }
            }
        });
    }
});

$(document).on('click', 'button.remove', function () {
    if(fileChoosedXLS === false){
        $(targetError).css('border', '1px solid red');
        $('body').append('' +
            '<div class="alert alert-danger alert--xsl">\n' +
            '  <strong>Внимане!</strong> Для загрузки товаров, выберите .XLS файл с товарами с рабочего стола' +
            '</div>');
        setInterval(function () {
            $('.alert--xsl').remove()
        }, 5000);
    }
    else{
        var zip_data = new FormData();
        zip_data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        zip_data.append('files', $('#xslsx').prop('files')[0]);
        $('.produtsTablePage').append('<div class="preloader"><i></i></div>');

        $.ajax({
            method: 'POST',
            headers: {'Content-Type': undefined},
            url: $('meta[name="root-site"]').attr('content') + '/csvLoadDelete',
            processData: false,
            contentType: false,
            data: zip_data,
            success: function(){
                $('.preloader').remove();
                $('.table-responsive').append(
                    '<div class="alert alert-success" role="alert" style="position: absolute;\n' +
                    '    top: -140px;\n' +
                    '    width: 100%;\n' +
                    '    left: 0;">\n' +
                    '<a href="#" class="alert-link">Товары успешно удалены</a>\n' +
                    '</div>'
                );

                if($('.alert')){
                    setTimeout(removeAlert, 2000);
                }
            },
            error: function () {}
        });
    }
});

$(document).on('click', 'button.upload', function () {
    if(fileChoosedZip === false){
        $(targetError).css('border', '1px solid red');
        $('body').append('' +
            '<div class="alert alert-danger">\n' +
            '  <strong>Внимане!</strong> Для загрузки товаров, выберите .ZIP архив фотографиий с рабочего стола' +
            '</div>');
        setInterval(function() { $('.alert').remove() }, 5000);
    }

    if(fileChoosedXLS === false) {
        $('.xsl--uploader').css('border', '1px solid red');
        $('body').append('' +
            '<div class="alert alert-danger alert--xsl">\n' +
            '  <strong>Внимане!</strong> Для загрузки товаров, выберите .XLS файл с товарами с рабочего стола' +
            '</div>');
        setInterval(function () {
            $('.alert--xsl').remove()
        }, 5000);
    }

    if (fileChoosedZip === true && fileChoosedXLS === true) {
        var zip_data = new FormData();
        zip_data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        zip_data.append('photo', $('#archive').prop('files')[0]);
        zip_data.append('files', $('#xslsx').prop('files')[0]);
        $('.produtsTablePage').append('<div class="preloader"><i></i></div>');

        $.ajax({
            method: 'POST',
            headers: {'Content-Type': undefined},
            url: $('meta[name="root-site"]').attr('content') + '/csvLoad',
            processData: false,
            contentType: false,
            data: zip_data,
            success: function(){
                $('.table-responsive').append(
                    '<div class="alert alert-success" role="alert" style="position: absolute;\n' +
                    '    top: -140px;\n' +
                    '    width: 100%;\n' +
                    '    left: 0;">\n' +
                    '<a href="#" class="alert-link">Товары успешно загруженны</a>\n' +
                    '</div>'
                );

                if($('.alert')){
                    setTimeout(removeAlert, 2000);
                }
                $('.preloader').remove();
            },
            error: function () {
                $('.table-responsive').append(
                    '<div class="alert alert-danger" role="alert" style="position: absolute;\n' +
                    '    top: -140px;\n' +
                    '    width: 100%;\n' +
                    '    left: 0;">\n' +
                    '<a href="#" class="alert-link">ОШБИКА! В товарах найденны дубли</a>\n' +
                    '</div>'
                );

                if($('.alert')){
                    setTimeout(removeAlert, 2000);
                }
            }
        });
    }
});

function removeAlert() {
    $('.alert').remove();
}

$('.form-search button').on('click', function (e) {
    e.preventDefault();
    window.location = $('meta[name="root-site"]').attr('content') + '/products/' + $('.search-query').val();
});