'use strict';

function getSelect(event) {
    var domItem_price = Number (event.target.labels[0].children[1].children[0].innerText);
    console.log(domItem_price);
    checkSelect(event);
}

function checkSelect(event) {
    var targetBox = $.find('[data-set="boxset"]')[0].classList;
    var targetRostovka = $.find('[data-set="rotovkaset"]')[0].classList;

    if(event.target.parentNode.parentNode.dataset.set === "rotovkaset"){
        targetRostovka.remove('disable');
        targetBox.add('disable');
    }
    else{
        targetRostovka.add('disable');
        targetBox.remove('disable');
    }
}

$('.buyProduct_inner').on('click', function() {

});