Cart_data = sessionStorage.getItem('Cart_data');
Cart_data = JSON.parse(Cart_data);

var orderTotal = Cart_data[0].cartProducts_summ;
$('.order-total span')[0].innerText = orderTotal + ' грн';

if($('.checkoutPage')){
    $('.cartBl').css('display', 'none');
}
