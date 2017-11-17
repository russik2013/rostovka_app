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