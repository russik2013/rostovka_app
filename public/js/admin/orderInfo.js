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

        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + '/deleteProductFromOrder',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), id: productID}
        });
    });
});


$('.addProduct i').on('click', function(){
    $("#productsModal").modal();
});

var searchData = [];
$('.search--good').on('click', function () {
    if($('[data-set="searchProduct"]').val() !== ''){
        $('.modal-body').append('<div class="preloader"><i></i></div>');

        var imageUrl = [];
        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + '/finder',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), name: $('[data-set="searchProduct"]').val()}
        }).done(function (msg) {
            $('[data-set="searchProduct"]').val('');
            $('.preloader').remove();
            searchData = msg;
            for(var i = 0; i < msg.length; i++){
                imageUrl.push({url: msg[i].photo.photo_url})
            }
            if(searchData.length === 0){
                $('.founded--good').css('display', 'none');
                $('.modal-body').append('<div class="zero--result">Поиск не дал результатов :(</div>')
            }
            else{
                searchResult(searchData, imageUrl);
                $('.zero--result').remove();
            }
        });
    }
});

function searchResult(searchData, imageUrl) {
    $('tbody tr').remove();
    $.get($('meta[name="root-site"]').attr('content') + '/admin_resources/tmpl/search_tmpl.html', {}, function (templateBody) {
        $.tmpl(templateBody, searchData).appendTo('#tmpl');
        $('.founded--good').css('display', 'block');

        $(document).ready(function () {
            for (var u = 0; u < imageUrl.length; u++){
                $('[data-img="image-url"]')[u].src = $('meta[name="root-site"]').attr('content') + '/images/products/' + imageUrl[u].url
            }
        })
    });
}


if(searchData.length === 0){
    $('.founded--good').css('display', 'none');
}

var choosedProducts = [];
$('.add--product--in').on('click', function () {
    var checkedProduct = 0, itemCount = 0, checkboxes = $('.check--good');

    for(var z = 0; z < $(checkboxes).length; z++) {
        if ($(checkboxes)[z].checked === true) {
            checkedProduct = $(checkboxes)[z].parentNode.parentNode.dataset.poductId;
            itemCount = $(checkboxes)[z].parentNode.parentNode.children[7].children["0"].value;
            $('.product--list').append('<div class="preloader"><i></i></div>');

            choosedProducts.push({
                orderID: $('[data-orderid]')[0].dataset.orderid,
                id: checkedProduct,
                quantity: itemCount,
                type: $('[data-set="select_box_type"] option:selected')[z].dataset.set
            });
        }
    }


    console.log(choosedProducts);

    if(choosedProducts.length > 0) {
        $.ajax({
            method: 'POST',
            url: $('meta[name="root-site"]').attr('content') + '/addOrderDetail',
            data: {'_token': $('meta[name="csrf-token"]').attr('content'), data: choosedProducts}
        });
        $("#productsModal").modal('hide');
    }
});