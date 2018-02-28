'use strict';
Cart_data = localStorage.getItem('Cart_data');
Cart_data = JSON.parse(Cart_data);

function Cart_template(Cart_data) {
    $.get($('meta[name="root-site"]').attr('content') + '/cartTmpl/cart.html', {}, function (templateBody) {
        $.tmpl(templateBody, Cart_data).appendTo('#cartTemplate');
    });
}

var Cart_data = [{row: [], cartCount: 0, cartProducts_summ: 0}], hidden__price, targetID;

$(document).on("click", '[data-set="buyButton"]', function (event) {
    $('.dropdownCart .cartButton').css('display', 'block');
    $('.cartButton').css('margin', '0');

    if($.find('.one--product').length > 0){
        targetID  = Number ($('#productID')[0].dataset.prodid);

        var itemQuant = Number ($('.quantity').val()),
            domItem_price = Number ($.find('.choosed')[0].firstElementChild.lastElementChild.firstChild.innerText),
            trueTarget = false;

        if(Cart_data[0].row.length === 0){
            getProductData(targetID, itemQuant, domItem_price);
        }
        else {
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
                getProductData(targetID, itemQuant, domItem_price);
            }
        }
    }

    else {
        var checkif_true = false, domtargetID = 0;

        if($('.mainpageGoodsBlock').length > 0){
            domtargetID = Number(event.target.offsetParent.offsetParent.offsetParent.dataset.id);
            checkDomPage(domtargetID, checkif_true);
        }
        else{
            domtargetID = Number(event.target.offsetParent.offsetParent.offsetParent.dataset.id);
            checkDomPage(domtargetID, checkif_true);
        }
    }
});

function checkDomPage(domtargetID, checkif_true) {

    for (var i = 0; i < data.length; i++) {
        if (domtargetID === Number (data[i].dataID)) {
            hidden__price = data[i].full__price;
        }
    }
    targetID = domtargetID;
    
    if (Cart_data[0].row.length === 0) {
        initAdd(event, targetID, Cart_data);
    }

    else {
        checkDublicate(event, targetID, checkif_true);
    }
}

function removeItemAdd() {
    $('.chooseItem').remove();
    $('.product-price').remove();
    $('.single-variation-wrap').append('' +
        '<div class="product--is--inCart">' +
        '<span>Товар в корзине</span>' +
        '<div class="move--to--cart"><a class="cart--url">Перейти в корзну</a></div>' +
        '</div>');
    setUrl();
}

function setUrl() {
    var url = $('meta[name="root-site"]').attr('content') + '/cart';
    $('.cart--url').attr("href", url);
}

function getProductData(targetID, itemQuant, domItem_price) {
    var poductinnerID = Number ($.find('[data-prodid]')[0].dataset.prodid),
        productData = [];
    
    console.log(targetID);

    $('button.buyProduct_inner').attr( "disabled", true );

    $.ajax({
        method: "POST",
        url: $('meta[name="root-site"]').attr('content') + "/api/product",
        data: {id : poductinnerID}
    }).done(function(msg) {
        $('button.buyProduct_inner').attr( "disabled", false );
        productData.push(msg);
        
        if(Cart_data[0].row.length !== 0){
            pushtoCart();
        }
        else{
            pushtoCart();
            $('.isClear').remove()
        }
        function pushtoCart() {
            console.log(productData[0]);
            Cart_data[0].row.push({
                productID: productData[0].id,
                targetID: productData[0].id,
                imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/' + msg.photo.photo_url,
                name: productData[0].name,
                quant: 'count',
                price: Number ($('.choosed .iPrice')[0].innerText),
                quantity: Number ($('.quantity.input-lg').val()),
                quantityPrice: Number ($('.choosed .iPrice')[0].innerText) *  Number ($('.quantity.input-lg').val()),
                rostovka__price: Number ($.find('[data-set="rotovkaset"] .iPrice')[0].innerText),
                buy_real_id: productData[0].id,
                cart_product_url: productData[0].product_url,
                selected_value: '0',
                price_per_pair: productData[0].prise,
                box__price: Number ($.find('[data-set="boxset"] .iPrice')[0].innerText)
            });

            $('.dropdownCart ul li').remove();
            Cart_data[0].cartCount = Cart_data[0].row.length;
            removeItemAdd();
            getPrice();
            cartSumm();
            Cart_template(Cart_data);
        }
    }) .fail(function( msg ) {

    });
}

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
            if (targetID === Number (Cart_data[0].row[i].productID)){
                checkif_true = false;
                dublicate(targetID, Cart_data);
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
function dublicate(targetID, Cart_data) {
    //если индификторы совпадают, увеличиваем колличество и записываем ID элемента в объекте
    for (var i = 0; i < Cart_data[0].row.length; i++) {
        if (Cart_data[0].row[i].buy_real_id === targetID) {
            // conversion(Cart_data[0].row[i].buy_real_id);
            Cart_data[0].row[i].quantity++;
            arrayItemId = i;
        }
    }
    //если индификторы совпадают, увеличиваем колличество и записываем ID элемента в объекте

    mainPrice = Cart_data[0].row[arrayItemId].price;
    updPrice = mainPrice * Cart_data[0].row[arrayItemId].quantity;

    var valueofPrice = $.find('[product-id="' + targetID + '"] .price');
    $(valueofPrice)[0].innerText = updPrice;

    Cart_data[0].row[arrayItemId].quantityPrice = updPrice;

    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));

    var valueofQuantity = $.find('[product-id="' + targetID + '"] input');
    $(valueofQuantity).val(Cart_data[0].row[arrayItemId].quantity);

    counterFn(mainPrice, targetID, updPrice);
}

var topSalesActive = false;
function topSalesTab(event){
    return topSalesActive = true
}

function defaultTab(event){
    return topSalesActive = false
}

var qid = 0, counter = 0;
function addtoCart(event, targetID) {
    var imgurl, gTitle, gQuant, gprice, productIndex, selected_quantity, rostovkaPrice;

    counter++;

    Number ($('.cart-count')[0].innerText = counter);

    if(Cart_data.length > 0) {
        $('.isClear').remove()
    }

    if(topSalesActive === true){
        data = TopSallesData;

        for (var a = 0; a < data.length; a++){
            if(targetID === data[a].real_id){
                targetID = a;
            }
        }
    } else {
        for (var z = 0; z < data.length; z++){
            if(targetID === data[z].real_id){
                targetID = z;
                break;
            }
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
        targetID: productIndex,
        imgUrl: imgurl,
        name: gTitle,
        quant: gQuant,
        price: gprice,
        size: data[targetID].size,
        quantity: selected_quantity,
        quantityPrice: gprice,
        rostovka__price: rostovkaPrice,
        buy_real_id: data[targetID].real_id,
        cart_product_url: data[targetID].product_url,
        selected_value: '0',
        price_per_pair: data[targetID].price,
        box__price: gprice
    });

    qid++;

    $('.dropdownCart ul li').remove();
    Cart_data[0].cartCount = Cart_data[0].row.length;

    localStorage.Cart_data = JSON.stringify(Cart_data);
}

$(document).on('click', '.removeItem__cart', function () {
    var clicked_targetID = Number ($(this)[0].parentElement.dataset.id);

    for (var i = 0; i < Cart_data[0].row.length; i++){
        if(Cart_data[0].row[i].targetID === clicked_targetID){
            Cart_data[0].cartProducts_summ = Cart_data[0].cartProducts_summ - Cart_data[0].row[i].quantityPrice;
            Cart_data[0].row.splice(i, 1);
            $(this)[0].parentElement.remove();
        }
    }

    Cart_data[0].cartCount = Cart_data[0].row.length;
    if(Cart_data[0].row.length === 0){
        $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>');
        $('.dropdownCart .cartButton').css('display', 'none');
        $('.cartButton').css('margin', '0');
    }

    counter--;
    Number ($('.cart-count')[0].innerText = counter);

    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    cartSumm();
});

var updPrice = 0, mainPrice = 0, quantity = 0, target, target_id = 0;

$(document).on('click', '.Cart_Button_Plus', function () {
    var target_dataset, flag = false, minus = false;

    if($(this).closest('li').attr('data-id') === undefined){
        var parentFinder = $(this).parents()[5];
        target_dataset = $(parentFinder).attr('data-id');
        flag = false;
        conversion(target_dataset, flag, minus);
        $.find('[data-set="totalCost"]')[0].innerHTML = Cart_data[0].cartProducts_summ + ' грн';
    }

    else{
        target_dataset = Number ($(this).closest('li').attr('data-id'));
        flag = true;
        conversion(target_dataset, flag, minus);
    }
});

$(document).on('click', '.Cart_Button_Minus', function () {
    var target_dataset, flag = false, minus = true;

    if($(this).closest('li').attr('data-id') === undefined) {
        var parentFinder = $(this).parents()[5];
        target_dataset = $(parentFinder).attr('data-id');
        flag = false;
        conversion(target_dataset, flag, minus);


        $.find('[data-set="totalCost"]')[0].innerHTML = Cart_data[0].cartProducts_summ + ' грн';
    }

    else {
        target_dataset = Number ($(this).closest('li').attr('data-id'));
        flag = true;
        conversion(target_dataset, flag, minus);
    }
});

function conversion(target_dataset, flag, minus) {
    if(minus !== true){
        for(var i = 0; i < Cart_data[0].row.length; i++){
            if(Number (target_dataset) === Cart_data[0].row[i].targetID){
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
            if(Number (target_dataset) === Cart_data[0].row[y].targetID){
                target_id = y;
                mainPrice = Cart_data[0].row[y].price;
            }
        }
        if(Cart_data[0].row[target_id].quantity > 1) {
            Cart_data[0].row[target_id].quantity--;
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
        $('[data-id="'+ target_dataset +'"] .counting')[0].innerText = updPrice + ' грн';
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
        $.find('[data-set="cart-summ"]')[0].innerText = Math.round(Cart_data[0].cartProducts_summ);
        $.find('[data-set="cartCount"]')[0].innerText = Cart_data[0].cartCount;
        $.find('[data-set="cart-inner-summ"]')[0].innerText = Math.round(Cart_data[0].cartProducts_summ) + ' грн';
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
    $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>');
    $('.dropdownCart .cartButton').css('display', 'none');
    $('.cartButton').css('margin', '0')
}