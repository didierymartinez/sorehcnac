$(document).ready(function () {

    $(document).on('keyup keypress', 'form input', function(e) {
        if(e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allSiguienteBtn = $('.SiguienteBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
        }
    });

    allSiguienteBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            SiguienteStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password']"),
            isValid = true;

        $(".form-group").removeClass("has-error");

        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid){


            var token = $('meta[name="csrf-token"]').attr('content');
            var userId = $('#userId').val();

            $.ajax({
                type: (!!userId) ? 'PUT' : 'POST',
                url:  (!!userId) ? 'users/'+ userId +'' : 'users',
                dataType: 'json',
                data: {"name":curInputs[0].value, "email":curInputs[1].value, "password":curInputs[2].value },
                success: function (data) {
                    console.log('did');
                }
            });

            SiguienteStepWizard.removeAttr('disabled').trigger('click');

        }
    });

    $('div.setup-panel div a.btn-primary').trigger('click');

    $('#contact-form').bootstrapValidator({
//        live: 'disabled',
        message: 'No es un valor Valido',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Nombre es requerido'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'El correo es requerido'
                    },
                    emailAddress: {
                        message: 'Dirección de Correo invalido'
                    },remote: {
                        url: 'users/validatemail',
                        data: function(validator, $field, value) {
                            return {
                                email: validator.getFieldElements('email').val()
                            };
                        },
                        message: 'Ya se encuentra registrado',
                        type: 'POST',
                        delay: 100
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'La contraseña es requerida'
                    }
                }
            }
        }
    });
});
