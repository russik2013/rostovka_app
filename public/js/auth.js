$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
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
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Введите имя'
                    }
                }
            },
            last_name: {
                validators: {
                    stringLength: {
                        min: 2,
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
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваш номер телефона'
                    },
                    phone: {
                        country: 'UA',
                        message: 'Введите корректный номер телефона'
                    }
                }
            },
            address: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Введите ваш адрес'
                    }
                }
            },
            city: {
                validators: {
                    stringLength: {
                        min: 4,
                    },
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
                    notEmpty: {
                        message: 'Введите ваш почтовый индекс'
                    },
                    zipCode: {
                        country: 'UA',
                        message: 'Введите корректный почтовый индекс'
                    }
                }
            }
        }
    })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow");// Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});