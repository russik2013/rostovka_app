$('.cartBl').remove();
var Cart_data = [{row: []}];

function getData() {
    var retrievedData = localStorage.getItem("Cart_data");
    if(retrievedData !== null){
        Cart_data = JSON.parse(retrievedData);
        $('.cartPage_article').remove();
        Cart_template(Cart_data);
    }
}

getData();

if(Cart_data[0].row.length === 0){
    $('.cart-form').remove();
    $('.post-8').append('<div class="cartPage_article">Корзина пуста :(</div>');
}
else{
    TotalCost()
}

function TotalCost() {
    $.find('[data-set="totalCost"]')[0].innerHTML = Cart_data[0].cartProducts_summ + ' грн';
}


if(Cart_data[0].row.length < 5){
    var intElemOffsetHeight = $( window ).height() - 575;
    setHeight(intElemOffsetHeight);
    $(window).resize(function() {
        intElemOffsetHeight = $( window ).height() - 575;
        setHeight(intElemOffsetHeight);
    });
    function setHeight(intElemOffsetHeight) {
        $('.cart-container').css('height', ''+intElemOffsetHeight+'');
    }
}

function Cart_template(Cart_data) {
    $.get('cartTmpl/cartTable.html', {}, function (templateBody) {
        $.tmpl(templateBody, Cart_data).appendTo('#cartTableInner');
    });
}


if(Cart_data[0].row.length === 0){
    $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>')
}

if($.find('#cartTableInner').length !== 0){
    $(document).on('click', '.removeItem', function (){
        var removeTarget = Number ($(this)[0].parentElement.parentElement.attributes[1].nodeValue);
        for (var i = 0; i < Cart_data[0].row.length; i++){
            var arrayID = Cart_data[0].row[i].productID;
            if(removeTarget === Number (arrayID)){
                var domElement = $.find('[product-id="'+ removeTarget +'"]');
                $(domElement).remove();
                Cart_data[0].cartProducts_summ -= Cart_data[0].row[i].quantityPrice;
                TotalCost();

                Cart_data[0].row.splice(i, 1);
                Cart_data[0].cartCount--;
                localStorage.setItem("Cart_data", JSON.stringify(Cart_data));

                if(Cart_data[0].row.length === 0){
                    $('.cart-form').remove();
                    $('.post-8').append('<div class="cartPage_article">Корзина пуста :(</div>');
                }
                if(Cart_data[0].row.length < 5){
                    $('.mb-80').addClass('Zero--height');
                }
            }
        }
    });
}