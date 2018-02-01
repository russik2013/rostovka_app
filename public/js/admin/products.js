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
        $('button.upload').css('top', '20px');
        $('button.upload').css('display', 'block');
        $('.header--add--buttons').css('display', 'block');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
    }

    else{
        $('.file--uploader').css('display', 'block');
        $('button.upload').css('top', '20px');
        $('button.upload').css('display', 'block');
        $('button.download').css('display', 'none');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
    }

    if(e.srcElement.value === 'upload') {
        $('.file--uploader').css('display', 'block');
        $('.xsl--uploader').css('display', 'block');
        $('button.upload').css('display', 'block');
        $('select.manufacturer_Options').css('display', 'none');
        $('.seasone_Options').css('display', 'none');
    }

    if(e.srcElement.value === 'edit'){
        getFile();
    }

    if(e.srcElement.value === 'download'){
        $('.file--uploader').css('display', 'none');
        $('.xsl--uploader').css('display', 'none');
        $('button.upload').css('display', 'none');
        $('.header--add--buttons').append("<button class='download col-md-4 col-sm-12 col-xs-12'>Скачать</button>");
        $('select.manufacturer_Options').css('display', 'block');
        $('.seasone_Options').css('display', 'block');
    }
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

$(document).on('click', 'button.upload', function () {
    if(fileChoosedZip === false){
        $(targetError).css('border', '1px solid red');
        $('body').append('' +
            '<div class="alert alert-danger">\n' +
            '  <strong>Внимане!</strong> Для загрузки товаров, выберите .ZIP архив фотографиий с рабочего стола' +
            '</div>');
        setInterval(function() { $('.alert').remove() }, 5000);
    }
    else{
        $(targetError).css('border', '1px solid #ccc4b8');
    }

    if(fileChoosedXLS === false){
        $('.xsl--uploader').css('border', '1px solid red');
        $('body').append('' +
            '<div class="alert alert-danger alert--xsl">\n' +
            '  <strong>Внимане!</strong> Для загрузки товаров, выберите .XLS файл с товарами с рабочего стола' +
            '</div>');
        setInterval(function() { $('.alert--xsl').remove() }, 5000);
    }
    else{
        $('.xsl--uploader').css('border', '1px solid #ccc4b8');
    }
});