'use strict';

function getSelect(event) {
    var targetBox = $.find('[data-set="boxset"]')[0].classList;
    var targetRostovka = $.find('[data-set="rotovkaset"]')[0].classList;

    if (event.target.parentNode.parentNode.dataset.set === "rotovkaset") {
        targetRostovka.remove('disable');
        targetRostovka.add('choosed');
        targetBox.add('disable');
        targetBox.remove('choosed');
    }
    else {
        targetRostovka.add('disable');
        targetRostovka.remove('choosed');
        targetBox.remove('disable');
        targetBox.add('choosed');
    }
}