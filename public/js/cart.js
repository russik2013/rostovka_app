var Cart_data = [{
    row: [], cartCount: 0, cartProducts_summ: 0
}], hidden__price, targetID;

$('.product-button a').on('click', function (event) {
    targetID = $(this)[0].offsetParent.offsetParent.dataset.id;
    hidden__price = data[targetID].full__price;

    addtoCart(event, targetID);
    Cart_template(Cart_data);
    getPrice();

    cartSumm();
});


var qid = 0, counter = 0;
function addtoCart(event, targetID) {
    var imgurl, gTitle, gQuant, gprice, productIndex, selected_quantity;

    counter++;

    Number ($('.cart-count')[0].innerText = counter);

    if(Cart_data.length > 0) {
        $('.isClear').remove()
    }

    // dublicate(targetID);

    productIndex = Number (data[targetID].dataID);
    gTitle = data[targetID].name;
    selected_quantity = 1;
    gQuant = 0;
    gprice = Number (data[targetID].full__price);
    imgurl = data[targetID].imgUrl;

    Cart_data[0].row.push({
        productID: productIndex,
        targetID: 'added_' + qid,
        imgUrl: imgurl,
        name: gTitle,
        quant: gQuant,
        price: gprice,
        quantity: selected_quantity,
        quantityPrice: gprice
    });

    qid++;

    $('.dropdownCart ul li').remove();
    Cart_data[0].cartCount = Cart_data[0].row.length;

    localStorage.Cart_data = JSON.stringify(Cart_data);
}

// function dublicate(targetID) {
//     for (var i = 0; i < Cart_data[0].row.length; i++){
//         if(Number (targetID) === Cart_data[0].row[i].productID){
//             Cart_data[0].row[i].quantity++;
//             Cart_data[0].row[i].quantityPrice *= Cart_data[0].row[i].quantity;
//         }
//     }
// }

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
    var target_dataset = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id;

    for(var i = 0; i < Cart_data[0].row.length; i++){
        if(target_dataset === Cart_data[0].row[i].targetID){
            target_id = i;
            mainPrice = Cart_data[0].row[i].price;
            Cart_data[0].row[i].quantity++;
        }
    }


    updPrice = mainPrice * Cart_data[0].row[target_id].quantity;
    $.find('[data-cart-summ="cartCount"]')[target_id].innerText = updPrice;
    Cart_data[0].row[target_id].quantityPrice = updPrice;
    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    counterFn(mainPrice, targetID, updPrice);
});

$(document).on('click', '.Cart_Button_Minus', function () {
    var target_dataset = $(this)[0].parentNode.parentNode.parentNode.offsetParent.dataset.id;

    for(var i = 0; i < Cart_data[0].row.length; i++){
        if(target_dataset === Cart_data[0].row[i].targetID){
            target_id = i;
        }
    }

    if(Cart_data[0].row[target_id].quantity > 1) {
        Cart_data[0].row[target_id].quantity--;
    }

    if(updPrice > mainPrice){
        updPrice -= mainPrice;
        $.find('[data-cart-summ="cartCount"]')[target_id].innerText = updPrice;
        Cart_data[0].row[target_id].quantityPrice = updPrice;
    }
    localStorage.setItem("Cart_data", JSON.stringify(Cart_data));
    counterFn(mainPrice, targetID, updPrice);
});

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

cartSumm();
function cartSumm(){
    $.find('[data-set="cart-summ"]')[0].innerText = Cart_data[0].cartProducts_summ;
    $.find('[data-set="cartCount"]')[0].innerText = Cart_data[0].cartCount;
    $.find('[data-set="cart-inner-summ"]')[0].innerText = Cart_data[0].cartProducts_summ + ' грн';
}

if(Cart_data[0].row.length === 0){
    $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>')
}


var retrievedData = localStorage.getItem("Cart_data");
if(retrievedData !== null){
    Cart_data = JSON.parse(retrievedData);
    $('.isClear').remove();
    cartSumm();
    Cart_template(Cart_data);

    console.log(Cart_data);
}

// localStorage.clear();