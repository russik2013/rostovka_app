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

$( function() {
    var dateFormat = "mm/dd/yy",
        from = $( "#from" )
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on( "change", function() {
                to.datepicker( "option", "minDate", getDate( this ) );
            }),
        to = $( "#to" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            regional: 'ru'
        })
            .on( "change", function() {
                from.datepicker( "option", "maxDate", getDate( this ) );
            });

    function getDate( element ) {
        var date;
        try {
            date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
            date = null;
        }

        return date;
    }
} );

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