'use strict';

$('.chooseItem .radio').addClass('disable');
var checked = $('input:checked', '.chooseItem'),
    checker = $('input:checked', '.chooseItem');
if($(checked).val() === 'on'){
    $(checked[0].parentNode.parentNode).removeClass('disable');
}

$(".chooseItem .radio input").change(function(){
    $('.chooseItem .radio').addClass('disable');

    if($(this.parentNode.parentNode).hasClass('disable')){
        $(this.parentNode.parentNode).removeClass('disable');
    }
    else
        $(this.parentNode.parentNode).addClass('disable');
});

console.log(sessionStorage.getItem('id'));
console.log($.find('#productID')[0].dataset.id = 1);
// var GetedlocalData = JSON.parse(localStorage.localData);
//
// for(var i = 0; i < GetedlocalData.length; i++){
//     if()
// }

console.log();