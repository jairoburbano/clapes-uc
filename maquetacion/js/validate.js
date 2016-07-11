(function($) {
    function inscribete() {
        $('<div class="message"></div>').hide().appendTo('.inscribete');
        $('.inscribete__form').each(function() {
            $(this).validate({
                rules: {
                    name: "required",
                    institucion: "required",
                    mail: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    name: {
                        required: "Ingresa un Nombre"
                    },
                    institucion: {
                        required: "Ingresa una institución"
                    },
                    mail: {
                        required: "Ingresa un Email",
                        email: "Ingresa un Email válido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.inscribete__form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.inscribete').attr('action'), $('.inscribete').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.inscribete__form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.inscribete__form .message').html('<p>Tu mensaje ha sido enviado con éxito.</p>').fadeIn().delay('3000').fadeOut();
                            $('.inscribete').find('.form__valid').removeClass('form__valid');
                            $('.inscribete__form')[0].reset();
                        } else {
                            $('.inscribete .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function contactoForm() {
        $('<div class="message"></div>').hide().appendTo('.contact');
        $('.contact__form').each(function() {
            $(this).validate({
                rules: {
                    name: "required",
                    institucion: "required",
                    mail: {
                        required: true,
                        email: true
                    },
                    mensaje: {
                        required: true,
                        minlength: 8
                    },
                },
                messages: {
                    name: {
                        required: "Ingresa un Nombre"
                    },
                    institucion: {
                        required: "Ingresa una institución"
                    },
                    mail: {
                        required: "Ingresa un Email",
                        email: "Ingresa un Email válido"
                    },
                    mensaje: {
                        required: "ingresa un mensaje válido",
                        minlength: "ingresa al menos 8 caracteres"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.contact__form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.contact').attr('action'), $('.contact').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.contact__form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.contact__form .message').html('<p>Tu mensaje ha sido enviado con éxito.</p>').fadeIn().delay('3000').fadeOut();
                            $('.contact').find('.form__valid').removeClass('form__valid');
                            $('.contact__form')[0].reset();
                        } else {
                            $('.contact .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function newsletterForm() {
        $('<div class="message"></div>').hide().appendTo('.newsletter');
        $('.foo__newsletter').each(function() {
            $(this).validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    email: {
                        required: "Ingresa un Email",
                        email: "Ingresa un Email válido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.foo__newsletter .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.newsletter').attr('action'), $('.newsletter').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.foo__newsletter .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.foo__newsletter .message').html('<p>Tu mensaje ha sido enviado con éxito.</p>').fadeIn().delay('3000').fadeOut();
                            $('.newsletter').find('.form__valid').removeClass('form__valid');
                            $('.foo__newsletter')[0].reset();
                        } else {
                            $('.newsletter .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    inscribete();
    contactoForm();
    newsletterForm();
})(jQuery);