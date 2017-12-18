'use strict';

function getData(data) {
    $(productTheme).tmpl(data).appendTo('#target');
}

function Cart_template(Cart_data) {
    if($('.categoryPage').length > 0){
        $.get('../cartTmpl/cart.html', {}, function (templateBody) {
            $.tmpl(templateBody, Cart_data).appendTo('#cartTemplate');
        });
    } else if($('#productID').length > 0) {
        $.get('../../cartTmpl/cart.html', {}, function (templateBody) {
            $.tmpl(templateBody, Cart_data).appendTo('#cartTemplate');
        });
    } else if($('.section-padding-b').length > 0){
        $.get('cartTmpl/cart.html', {}, function (templateBody) {
            $.tmpl(templateBody, Cart_data).appendTo('#cartTemplate');
        });
    }else
        $.get('cartTmpl/cart.html', {}, function (templateBody) {
        $.tmpl(templateBody, Cart_data).appendTo('#cartTemplate');
    });
}

var Cart_data = [{row: [], cartCount: 0, cartProducts_summ: 0}], hidden__price, targetID;


$(document).on("click", '[data-set="buyButton"]', function (event) {
    if($('#product-detail').length > 0){
        targetID  = Number ($('#productID')[0].dataset.prodid);
        var itemQuant = Number ($('.quantity').val()),
            domItem_price = Number ($.find('.choosed')[0].firstElementChild.lastElementChild.firstChild.innerText),
            trueTarget = true;

        for (var l = 0; l < Cart_data[0].row.length; l++){
            if(targetID === Cart_data[0].row[l].buy_real_id){
                targetID = l;
                additocart(targetID, itemQuant, domItem_price);

                return false
            }

            else{
                trueTarget = false;
            }
        }

        if(trueTarget === false){
            var poductinnerID = Number ($.find('[data-prodid]')[0].dataset.prodid);

            $.ajax({
                method: "POST",
                url: "../../api/product",
                data: {id : poductinnerID}
            }).done(function( msg ) {
                var imgurl, gTitle, gQuant, gprice, productIndex, selected_quantity, rostovkaPrice, productData = [];
                productData.push(msg);

                console.log(productData);

                counter++;

                Number ($('.cart-count')[0].innerText = counter);

                productIndex = Number (productData[0].real_id);
                gTitle = productData[0].name;
                selected_quantity = 1;
                gQuant = 0;
                gprice = Number (productData[0].full__price);
                imgurl = productData[0].imgUrl;
                rostovkaPrice = productData[0].rostovka__price;

                Cart_data[0].row.push({
                    productID: productIndex,
                    targetID: 'added_' + qid,
                    imgUrl: imgurl,
                    name: gTitle,
                    quant: gQuant,
                    price: gprice,
                    quantity: selected_quantity,
                    quantityPrice: gprice,
                    rostovka__price: rostovkaPrice,
                    buy_real_id: productData[0].real_id,
                    cart_product_url: productData[0].product_url,
                    selected_value: null,
                    price_per_pair: productData[0].price,
                    box__price: gprice
                });

                qid++;

                $('.dropdownCart ul li').remove();
                Cart_data[0].cartCount = Cart_data[0].row.length;

                // localStorage.Cart_data = JSON.stringify(Cart_data);
            }) .fail(function( msg ) {

            });
        }
    }

    else {
        var checkif_true = false;
        var domtargetID = Number(event.target.offsetParent.offsetParent.dataset.id);

        for (var i = 0; i < data.length; i++) {
            if (domtargetID === data[i].real_id) {
                hidden__price = data[i].full__price;
                targetID = data[i].real_id;
            }
        }

        if (Cart_data[0].row.length === 0) {
            initAdd(event, targetID, Cart_data);
        }

        else {
            checkDublicate(event, targetID, checkif_true);
        }
    }
});


function additocart(targetID, itemQuant, domItem_price) {
    Cart_data[0].row[targetID].quantity += itemQuant;
    Cart_data[0].row[targetID].quantityPrice = Cart_data[0].row[targetID].quantity * domItem_price;
    Cart_data[0].row[targetID].price = domItem_price;

    var allPrice = 0;
    for (var i = 0; i < Cart_data[0].row.length; i++){
        allPrice += domItem_price * Cart_data[0].row[i].quantity;
    }
    Cart_data[0].cartProducts_summ = allPrice;

    cartSumm();
    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    $('.dropdownCart ul li').remove();
    Cart_template(Cart_data);
}


function checkDublicate(event, targetID, checkif_true) {

    if(checkif_true === false){
        for (var i = 0; i < Cart_data[0].row.length; i++){
            if (Number (targetID) === Number (Cart_data[0].row[i].buy_real_id)){
                checkif_true = false;
                dublicate(targetID);
                break;
            }
            else{
                checkif_true = true;
            }
        }
    }

    if(checkif_true !== false){
        initAdd(event, targetID, Cart_data);
    }
}

function initAdd(event, targetID, Cart_data) {
    addtoCart(event, targetID);
    Cart_template(Cart_data);
    getPrice();
    cartSumm();
}

var arrayItemId = 0;
function dublicate(targetID) {
    for (var i = 0; i < Cart_data[0].row.length; i++){
        if(Cart_data[0].row[i].buy_real_id === targetID){
            Cart_data[0].row[i].quantity++;
            arrayItemId = i;
        }
    }

    mainPrice = Cart_data[0].row[arrayItemId].price;
    updPrice = mainPrice * Cart_data[0].row[arrayItemId].quantity;

    var valueofPrice = $.find('[product-id="'+ targetID +'"] .price');
    $(valueofPrice)[0].innerText = updPrice;

    Cart_data[0].row[arrayItemId].quantityPrice = updPrice;

    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));

    var valueofQuantity = $.find('[product-id="'+ targetID +'"] input');
    $(valueofQuantity).val(Cart_data[0].row[arrayItemId].quantity);

    counterFn(mainPrice, targetID, updPrice);
}


var qid = 0, counter = 0;
function addtoCart(event, targetID) {
    var imgurl, gTitle, gQuant, gprice, productIndex, selected_quantity, rostovkaPrice;

    counter++;

    Number ($('.cart-count')[0].innerText = counter);

    if(Cart_data.length > 0) {
        $('.isClear').remove()
    }

    for (var z = 0; z < data.length; z++){
        if(targetID === data[z].real_id){
            targetID = z;
        }
    }

    productIndex = Number (data[targetID].real_id);
    gTitle = data[targetID].name;
    selected_quantity = 1;
    gQuant = 0;
    gprice = Number (data[targetID].full__price);
    imgurl = data[targetID].imgUrl;
    rostovkaPrice = data[targetID].rostovka__price;

    Cart_data[0].row.push({
        productID: productIndex,
        targetID: 'added_' + qid,
        imgUrl: imgurl,
        name: gTitle,
        quant: gQuant,
        price: gprice,
        quantity: selected_quantity,
        quantityPrice: gprice,
        rostovka__price: rostovkaPrice,
        buy_real_id: data[targetID].real_id,
        cart_product_url: data[targetID].product_url,
        selected_value: null,
        price_per_pair: data[targetID].price,
        box__price: gprice
    });

    qid++;

    $('.dropdownCart ul li').remove();
    Cart_data[0].cartCount = Cart_data[0].row.length;

    localStorage.Cart_data = JSON.stringify(Cart_data);
}

$(document).on('click', '.removeItem__cart', function () {
    var clicked_targetID = $(this)[0].parentElement.dataset.id;

    for (var i = 0; i < Cart_data[0].row.length; i++){
        if(Cart_data[0].row[i].targetID === clicked_targetID){
            Cart_data[0].cartProducts_summ = Cart_data[0].cartProducts_summ - Cart_data[0].row[i].quantityPrice;
            Cart_data[0].row.splice(i, 1);
            $(this)[0].parentElement.remove();
        }
    }

    Cart_data[0].cartCount = Cart_data[0].row.length;
    if(Cart_data[0].row.length === 0){
        $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>')
    }

    counter--;
    Number ($('.cart-count')[0].innerText = counter);

    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    cartSumm();
});


var updPrice = 0, mainPrice = 0, quantity = 0, target, target_id = 0;

$(document).on('click', '.Cart_Button_Plus', function () {
    var target_dataset, flag = false, minus = false;

    if($(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id === undefined){
        target_dataset = $(this)[0].parentElement.parentElement.offsetParent.dataset.set;
        flag = false;
        conversion(target_dataset, flag, minus);

        $.find('[data-set="totalCost"]')[0].innerHTML = Cart_data[0].cartProducts_summ + ' грн';
    }

    else{
        target_dataset = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id;
        flag = true;
        conversion(target_dataset, flag, minus);
    }
});

$(document).on('click', '.Cart_Button_Minus', function () {
    var target_dataset, flag = false, minus = true;

    if($(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id === undefined){
        target_dataset = $(this)[0].parentElement.parentElement.offsetParent.dataset.set;
        flag = false;
        conversion(target_dataset, flag, minus);

        $.find('[data-set="totalCost"]')[0].innerHTML = Cart_data[0].cartProducts_summ + ' грн';
    }

    else{
        target_dataset = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id;
        flag = true;
        conversion(target_dataset, flag, minus);
    }
});


function conversion(target_dataset, flag, minus) {
    if(minus !== true){
        for(var i = 0; i < Cart_data[0].row.length; i++){
            if(target_dataset === Cart_data[0].row[i].targetID){
                target_id = i;
                mainPrice = Cart_data[0].row[i].price;
                Cart_data[0].row[i].quantity++;
            }
        }

        updPrice = mainPrice * Cart_data[0].row[target_id].quantity;
        Cart_data[0].row[target_id].quantityPrice = updPrice;
        localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    }
    else{
        for(var y = 0; y < Cart_data[0].row.length; y++){
            if(target_dataset === Cart_data[0].row[y].targetID){
                target_id = y;
                mainPrice = Cart_data[0].row[y].price;
            }
            if(Cart_data[0].row[target_id].quantity > 1) {
                Cart_data[0].row[target_id].quantity--;
            }
        }

        if(Cart_data[0].row[target_id].quantityPrice > mainPrice){
            updPrice = Cart_data[0].row[target_id].quantityPrice;
            updPrice -= mainPrice;
            Cart_data[0].row[target_id].quantityPrice = updPrice;
        }
        Cart_data[0].row[target_id].quantityPrice = updPrice;
        localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    }

    if(flag !== false){
        $.find('[data-cart-summ="cartCount"]')[target_id].innerText = updPrice;
    }
    else{
        $('tr[data-id="'+ target_dataset +'"] .counting')[0].innerText = updPrice + ' грн';
    }

    counterFn(mainPrice, targetID, updPrice);
}


function getPrice() {
    var allPrice = 0;
    for (var i = 0; i < Cart_data[0].row.length; i++){
        allPrice += Cart_data[0].row[i].price * Cart_data[0].row[i].quantity;
    }
    Cart_data[0].cartProducts_summ = allPrice;
    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    return allPrice
}

function counterFn(mainPrice) {
    var price = getPrice();
    if(price >= mainPrice){
        Cart_data[0].cartProducts_summ = price;
        cartSumm();
    }
}

function cartSumm(){
    if($.find('[data-set="cart-summ"]').length !== 0){
        $.find('[data-set="cart-summ"]')[0].innerText = Cart_data[0].cartProducts_summ;
        $.find('[data-set="cartCount"]')[0].innerText = Cart_data[0].cartCount;
        $.find('[data-set="cart-inner-summ"]')[0].innerText = Cart_data[0].cartProducts_summ + ' грн';
    }
}

cartSumm();

function getData() {
    var retrievedData = localStorage.getItem("Cart_data");
    if(retrievedData !== null){
        Cart_data = JSON.parse(retrievedData);
        $('.isClear').remove();
        cartSumm();
        Cart_template(Cart_data);
    }
}

getData();

if(Cart_data[0].row.length === 0){
    $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>')
}
