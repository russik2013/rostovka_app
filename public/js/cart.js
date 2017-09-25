var productIn_cart = $('.product-remove');

$(productIn_cart).on('click', function () {
    this.offsetParent.remove()
});