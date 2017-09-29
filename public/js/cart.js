'use strict';
var productIn_cart = $('.product-remove');

$(productIn_cart).on('click', function () {
    this.parentElement.remove();
    var counter = $('.responsive-table table tbody tr').length;
   if(counter === 0){
       $('.responsive-table table').remove();
       $('.row.cart-actions.pull-right').remove();
       $(".post-8").append('<div class="absolutPos"> <p>Товаров нет в корзине</p> </div>');
   }
});