$('.remove__product').on('click', function () {
    var productName = $(this)[0].parentElement.parentNode.children[1].innerText,
        productArtiсul = $(this)[0].parentNode.parentNode.children[0].childNodes[0].value,
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
        // $.ajax({
        //     method: 'POST',
        //     url:
        // })
        console.log('Prod. Name ' + productName + ' -- -- ', 'Articul ' + productArtiсul)
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

function getSelect(e) {
    if(e.srcElement.value === 'delete'){
        $('.file--uploader').css('display', 'none');
        $('button.upload').css('top', '-1px');
    }
    else{
        $('.file--uploader').css('display', 'block');
        $('button.upload').css('top', '20px');
    }

    if(e.srcElement.value === 'edit'){
        getFile();
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