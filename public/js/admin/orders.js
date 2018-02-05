$(document).ready(function () {
    $('.mainPage--content').remove();
    var tableTr = $('.table-striped tbody tr td');
    for(var i = 0; i < $(tableTr).length; i++){
        if($(tableTr[i]).hasClass('paid--Status')){
            var getedElem = $(tableTr[i])[0].parentNode,
                input = $(tableTr[i])[0].parentNode.children[0].children[0],
                customer__Name = $(tableTr[i])[0].parentNode.children[1].lastChild;

            $(getedElem).css('background', 'rgba(90, 226, 157, 0.74)');
            $(input).css('background', 'transparent');
            $(customer__Name).attr('style', 'color: #fff !important');
        }
        else{

        }
    }
});

$(document).ready(function () {
    var userLang = navigator.language || navigator.userLanguage;

    var options = $.extend({},
        $.datepicker.regional["ja"], {
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            highlightWeek: true
        }
    );

    $("#from").datepicker(options);
    $("#to").datepicker(options);
});

$('.remove__order').on('click', function () {
    var productName = $(this)[0].parentElement.parentNode.children[1].innerText,
        productID = $(this)[0].parentElement.parentNode.children[0].children[0].value,
        productRemove = $(this)[0].parentNode.parentNode;

    swal({
        title: 'Удалить <u>'+ productName +'</u>',
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
            url: $('meta[name="root-site"]').attr('content') + '/deleteOrder',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), id: productID}
        });
    });
});

$('.downloadButton button').on('click', function () {
    var dataFrom = $('#from'),
        dataTo = $('#to'),
        sortOption,
        withPhoto;

    if(dataFrom.length > 0 && dataTo.length > 0){
        dataFrom.css('border', 'none');
        dataTo.css('border', 'none');

        $.ajax({
            method: 'GET',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), dataFrom: dataFrom.val(), dataTo: dataTo.val()},
            success: function(){
                window.location = $('meta[name="root-site"]').attr('content') + '/csvDownloadOrdersToSends?dataFrom='+dataFrom.val()+'&dataTo='+dataTo.val();
            }
        });
    }

    else{
        dataFrom.css('border', '1px solid red');
        dataTo.css('border', '1px solid red');
    }
});