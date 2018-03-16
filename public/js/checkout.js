Cart_data = localStorage.getItem('Cart_data');
Cart_data = JSON.parse(Cart_data);

if(Cart_data === null){
    $('.has-feedback button').attr("disabled", "disabled");
}

if(Cart_data !== null){
    var orderTotal = Cart_data[0].cartProducts_summ;
}

$('.order-total span')[0].innerText = orderTotal + ' грн';
$('.is--Mobile .order-total .amount')[0].innerText = orderTotal + ' грн';

if($('.checkoutPage')){
    $('.cartBl').css('display', 'none');
}
$('.successful_Buy button').on('click', function () {
    //dataLayer.push({'event': 'zakaz'});
    location.reload();

});
'use strict';
$(document).ready(function() {
    var success = null;
    $('#contact_form').bootstrapValidator({
        live: 'enabled',
        submitButton: '[type="submit"]',
        message: '',
        submitHandler: function(validator, form, submitButton, e) {
            if(Cart_data === null) {
                console.log('asdasdas');
                e.preventDefault();
                return false
            } else {
                var inputArray = $(form).serializeArray();
                for (var i = 0; i < Cart_data[0].row.length; i++){
                    inputArray = inputArray.concat(
                        {'name' : 'tovar['+i+'][product_id]','value': Cart_data[0].row[i].productID},
                        {'name' : 'tovar['+i+'][quantity]','value': Cart_data[0].row[i].quantity},
                        {'name' : 'tovar['+i+'][selected_value]','value': Cart_data[0].row[i].selected_value},
                        {'name' : 'tovar['+i+'][quantityPrice]','value': Cart_data[0].row[i].quantityPrice});
                }


                inputArray = inputArray.concat({'name' : 'summ','value': Cart_data[0].cartProducts_summ});

                $.ajax({
                    type: 'POST',
                    url: $('meta[name="checkout_url"]').attr('content'),
                    data: inputArray,
                    success: function(result) {
                        $('.successful_Buy').modal();
                        $('.form-field-wrapper input').val('');
                        localStorage.clear();
                        $.find('[data-set="cart-summ"]')[0].innerText = 0;
                        $.find('[data-set="cartCount"]')[0].innerText = 0;
                        $.find('[data-set="cart-inner-summ"]')[0].innerText = 0;
                        $('.dropdownCart ul li').remove();
                        $('.dropdownCart ul').append('<span class="isClear">Корзина пуста</span>');
                    }
                });
                return false;
            }
        },
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    stringLength: {
                        min: 2
                    },
                    notEmpty: {
                        message: 'Введите имя'
                    }
                }
            },
            last_name: {
                validators: {
                    stringLength: {
                        min: 2
                    },
                    notEmpty: {
                        message: 'Введите фамилия'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Введите вашу почту'
                    },
                    emailAddress: {
                        message: 'Введите корректный адрес эл. почты'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9-_@\.]+$/,
                        message: 'Введите корректный адрес эл. почты'
                    }
                }
            },

            phone: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваш номер телефона'
                    },
                    stringLength: {
                        min: 8,
                        message: 'Введите корректный номер телефон'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваш адрес'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваш город проживания'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Введите вашу страну проживания'
                    }
                }
            },
            zip: {
                validators: {
                    stringLength: {
                        min: 5,
                        message: 'Введите корректный почтовый индекс'
                    },
                    notEmpty: {
                        message: 'Введите почтовый индекс'
                    },
                    regexp: {
                        regexp: /^[0-9\.]+$/,
                        message: 'Введите корректный почтовый индекс'
                    }
                }
            },
            password: {
                validators: {
                    stringLength: {
                        min: 6,
                        message: 'Минимально 6 символов'
                    },
                    notEmpty: {
                        message: 'Пароль обязательно'
                    },
                    identical: {
                        field: 'confirmPassword'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Подтвердите пароль!'
                    },
                    stringLength: {
                        min: 6
                    },
                    identical: {
                        field: 'password',
                        message: 'Пароли должны совпадать'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        $('#success_message').slideDown({ opacity: "show" }, "slow");// Do something ...
        $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        success = true;

        sendData();
    });
});

function sendData() {
    console.log(success)
}

var adress = document.querySelector(".adress");
var secession =document.querySelector(".secession");
var pickup = document.querySelector(".pickup");
var shipping_method =document.getElementsByClassName("shipping_method");
for(var i =0;i<shipping_method.length;i++){
    shipping_method[i].addEventListener("change",function () {
        debugger
        if(this.checked===true){
            adress.style.display="block";
            secession.style.display="block";
        }
    })
}
pickup.addEventListener("click",function () {
    if(pickup.checked===true){
        adress.style.display="none";
        secession.style.display="none";
    }
});
