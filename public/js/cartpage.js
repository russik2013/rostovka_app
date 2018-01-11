$('.cartBl').remove();
var Cart_data = [{row: []}];

function getData() {
    var retrievedData = sessionStorage.getItem("Cart_data");
    if(retrievedData !== null){
        Cart_data = JSON.parse(retrievedData);
        $('.cartPage_article').remove();
        Cart_template(Cart_data);
    }
}

$(document).ready(function () {
    for (var i = 0; i < Cart_data[0].row.length; i++){
        if(Cart_data[0].row[i].box__price === Cart_data[0].row[i].rostovka__price){
            $.find('[data-select-id="'+ Number (Cart_data[0].row[i].productID) +'"]')[0].offsetParent.children[0].remove();
            $.find('[product-id="'+ Number (Cart_data[0].row[i].productID) +'"]')[0].children[2].innerHTML =
                "<div class='form-group select-style'><input class='form-control' type=\"number\" placeholder=\"в ящике\" disabled></div>"
        }
    }
});

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
    var intElemOffsetHeight = $( window ).height() - 250;
    setHeight(intElemOffsetHeight);
    $(window).resize(function() {
        intElemOffsetHeight = $( window ).height() - 200;
        setHeight(intElemOffsetHeight);
    });
    function setHeight(intElemOffsetHeight) {
        $('.cart-container').css('height', ''+intElemOffsetHeight+'');
    }
}

function Cart_template(Cart_data) {
    $.get('cartTmpl/cartTable.html', {}, function (templateBody) {
        $.tmpl(templateBody, Cart_data).appendTo('#cartTableInner');

        getSelectedValue();
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
                sessionStorage.setItem("Cart_data", JSON.stringify(Cart_data));

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

var targetID = 0;
function getSelect(event, value) {
    targetID = event.target.parentElement.offsetParent.parentElement.attributes[1].nodeValue;

    if(value === '1'){
        var rostovka_Price = 0, recalculated_price = 0;

        for (var i = 0; i < Cart_data[0].row.length; i++){
            if(Number (targetID) === Cart_data[0].row[i].productID){
                rostovka_Price = Cart_data[0].row[i].rostovka__price * Cart_data[0].row[i].quantity;
                $.find('[product-id="'+ targetID +'"] .item--price')[0].innerText = Cart_data[0].row[i].rostovka__price + ' грн';
                $.find('[product-id="'+ targetID +'"] .price.counting')[0].innerText = rostovka_Price + ' грн';
                Cart_data[0].row[i].quantityPrice = rostovka_Price;
                Cart_data[0].row[i].selected_value = value;
                Cart_data[0].row[i].price = Cart_data[0].row[i].rostovka__price;
            }
            recalculated_price += Cart_data[0].row[i].quantityPrice;
        }

        Cart_data[0].cartProducts_summ = recalculated_price;
        $.find('[data-set="totalCost"]')[0].innerText = recalculated_price + ' грн';
        sessionStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    }

    else{
        var box_Price = 0, recalculatedP = 0;
        for (var z = 0; z < Cart_data[0].row.length; z++){
            if(Number (targetID) === Cart_data[0].row[z].productID){
                Cart_data[0].row[z].price = Cart_data[0].row[z].box__price;
                box_Price = Cart_data[0].row[z].price * Cart_data[0].row[z].quantity;
                $.find('[product-id="'+ targetID +'"] .item--price')[0].innerText = Cart_data[0].row[z].price + ' грн';
                $.find('[product-id="'+ targetID +'"] .price.counting')[0].innerText = box_Price + ' грн';
                Cart_data[0].row[z].quantityPrice = box_Price;
                Cart_data[0].row[z].selected_value = value;
            }
            recalculatedP += Cart_data[0].row[z].quantityPrice;
        }

        Cart_data[0].cartProducts_summ = recalculatedP;
        $.find('[data-set="totalCost"]')[0].innerText = recalculatedP + ' грн';
        sessionStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    }
}

function getSelectedValue() {
    for (var i = 0; i < Cart_data[0].row.length; i++){

        if(Cart_data[0].row[i].selected_value !== null){
            var options = $('[product-id="'+ Cart_data[0].row[i].productID +'"] select');
            $(options).val(Cart_data[0].row[i].selected_value);
        }

        if(Cart_data[0].row[i].selected_value === '1'){
            $.find('[product-id="'+ Cart_data[0].row[i].productID +'"] .item--price')[0].innerText = Cart_data[0].row[i].rostovka__price + ' грн';
        }
        else{
            $.find('[product-id="'+ Cart_data[0].row[i].productID +'"] .item--price')[0].innerText = Cart_data[0].row[i].price + ' грн';
        }
    }
}
