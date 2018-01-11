//////////////////////////// Status ////////////////////////////
var statusData = [
    {
        id: '1',
        text: 'Новый'
    },
    {
        id: '2',
        text: 'Отправлен'
    },
    {
        id: '3',
        text: 'Оплачено'
    }
],
    status_select = $('.status--select');

$(status_select).select2({
    data: statusData
});
$(status_select).val(2).trigger('change');

//////////////////////////// Delivery ////////////////////////////
var deliveryData = [
    {
        id: '1',
        text: 'Новая почта'
    },
    {
        id: '2',
        text: 'inTime'
    },
    {
        id: '3',
        text: 'Автолюкс'
    },
    {
        id: '4',
        text: 'Delivery'
    },
    {
        id: '5',
        text: 'Подвести к автобусу'
    },
    {
        id: '6',
        text: 'Самовызов'
    }
],
    delivery_select = $('.delivery--select');

$(delivery_select).select2({
    data: deliveryData
});
$(delivery_select).val(2).trigger('change');


//////////////////////////// Payment ////////////////////////////
var paymentData = [
    {
        id: '1',
        text: 'На карту "ПриватБанка"'
    },
    {
        id: '2',
        text: 'Наличными'
    }
],
    payment_select = $('.payment--select');

$(payment_select).select2({
    data: paymentData
});

$(payment_select).val(2).trigger('change');

$('.removePrudct').on('click', function () {
    var productName = $(this)[0].parentElement.parentNode.children[1].innerText,
        productID = $(this)[0].parentNode.parentNode.dataset.id,
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
        console.log('Prod. Name ' + productName + ' -- -- ' + 'ProductID ' + productID )
    });
});


$('.addProduct i').on('click', function(){
    $("#productsModal").modal();
});

$('.add--product--in').on('click', function () {
    var checkedProduct = 0;
    if($.find('.check--good')[0].checked === true){
        checkedProduct = Number ($.find('.check--good')[0].parentElement.parentElement.dataset.poductId);
        $('.product--list').append('<div class="preloader"><i></i></div>');
    }

    if(checkedProduct > 0){
        $("#productsModal").modal('hide');
        console.log(checkedProduct)
    }
});
$('.search--good').on('click', function () {
    if($('[data-set="searchProduct"]').val() !== ''){
        $('.modal-body').append('<div class="preloader"><i></i></div>');
        $('[data-set="searchProduct"]').val('');
        console.log($('[data-set="searchProduct"]').val());
    }
});
var searchData = [];
$.get($('meta[name="root-site"]').attr('content') + '/admin_resources/tmpl/search_tmpl.html', {}, function (templateBody) {
    $.tmpl(templateBody, searchData).appendTo('#tmpl');
});

if(searchData.length === 0){
    $('.founded--good').css('display', 'none');
}
