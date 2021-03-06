(function ($) {

    
    $(document).ready(function() {
        $(":input").inputmask();

    });

    $('#add-relatives').on('click', function () {
        Stan.log('Add ne relative');
        
        Stan.Relative.addField();
    });

    $('.delete-br-and-sis').on('click', function () {
        Stan.Relative.deleteField(this);
    });

    var experience = 0;
    $('#add-experience').on('click',  function () {
        Stan.Experience.addField();
    });

    $('#add-travel').on('click', function () {
        Stan.Travel.addField();
    });


})(jQuery);

$('#reset-password-form button').on('click',function (event){
    event.preventDefault();
    loadDefaultAgreement('#reset-password-form');
});

$(document).on('click', '#check', function(event){
    if ($(event.currentTarget).is(':checked')) {
        $('.confirm').removeAttr("disabled");
    } else {
        $('.confirm').attr('disabled', 'disabled');
    }
});

//Открытие/закрытие формы загрузки платежных квитанций
function togglePayment(checkbox) {

    var changeCheckbox = document.querySelector(checkbox);

    if(changeCheckbox !== null) {

        changeCheckbox.onclick = function() {

            var paymentForm = $('#payment_check')[0];
            if (paymentForm.style.display !== 'none') {
                $('#collapse-link')[0].click();
                $('#payment_check').hide();
            } else {
                $('#payment_check').show();
                $('#collapse-link')[0].click();

            }
        }

    }

}

togglePayment('.js-check-change');


//Изменение статуса
$('.change-status').on('click', function(e){
        e.preventDefault();
        var contactId = $(this).attr('data-contact');
        $('#contact').val(contactId);


});

//Расщет платежа при отказе
function rejectPayment(withholding, delivery) {

    function count(deliveryVal, withholdingVal){
        var payment = withholdingVal - deliveryVal;
        return  payment.toFixed(2);
    }
    var paymentInput = $('#payment-payment');

    $('#withholding').on('keyup', function() {

        paymentInput.val(count(delivery.val(),withholding.val()));

        if(paymentInput.val() < 0) {
                    paymentInput[0].style.borderColor = 'red';
                } else {
                    paymentInput[0].style.borderColor ='';
                }

    });


}

rejectPayment($('#withholding'),$('#delivery') );




function loadDefaultAgreement (form) {

    var agreement = null;
    $.ajax({
        url: '/admin/agreement-api/get-default',
        method: 'GET',
        success: function (response) {
            agreement = new Stan.Modal({
                id: 'agreementModal',
                confirmHandler: function () {
                    this.hide();
                    $(form).submit();
                    console.log(response);
                },
                html: response
            }).show();
        }
    });

}



$(document).ready(function() {

    validation_fields = {

       "Summary[addresses][passport_address]":{
            validator:{
                required: true,
                regular: {
                    reg: /^[^\.\,][A-Za-z\d\s\.\,]+$/,
                    message: "В поле должны быть только латинские буквы, цыфры, точки, запятые "

                }
            }
        },

        "Summary[addresses][real_address]":{
            validator:{
                required: true,
                regular: {
                    reg: /^[^\.\,][A-Za-z\d\s\.\,]+$/,
                    message: "В поле должны быть только латинские буквы, цыфры, точки, запятые "

                }
            }
        },

        "Summary[card][name]":{
            validator:{

                string:{
                    max: 30
                },
                regular :{
                    reg: /^[A-Z0-9]{1,30}$|^$/,
                    message: "В поле должны быть только большие латинские буквы и арабские цифры!"
                }
            }
        },

        "Summary[card][issued_date]":{
            validator:{

                regular :{
                    reg: /^([0-2][0-9]|[3][01])[\/](0[1-9]|1[012])[\/]\d{4}$|^$/,
                    message: "Поле должно быть в формате Д/М/Г!"
                }
            }
        },

        "Summary[card][issued_by]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s\0-9]{1,60}$|^$/,
                    message: "Поле должно быть в формате Д/М/Г!"
                }
            }
        },

        "Summary[ipassport][number]":{
            validator:{
                required :true,
                string:{
                    max: 30
                },
                regular :{
                    reg: /^[A-Z0-9]{1,30}$/,
                    message: "В поле должны быть только большие латинские буквы и арабские цифры!"
                }
            }
        },

        "Summary[ipassport][issued_by]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\0-9]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис!"
                }
            }
        },

        "Summary[ipassport][expired_date]":{
            validator:{
                required :true,
                regular :{
                    reg: /^([0-2][0-9]|[3][01])[\/](0[1-9]|1[012])[\/]\d{4}$/,
                    message: "Поле должно быть в формате Д/М/Г!"
                }
            }
        },

        "Summary[ipassport][issued_region]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[ipassport][issued_country]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[ipassport][issued_city]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        
        "Summary[parents][father][fullname]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$|^$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[parents][father][addresses][home]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$|^$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[parents][father][phones][work]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[parents][father][phones][home]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[parents][father][phones][mobile]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[parents][father][birth]":{
            validator:{

            regular :{
                reg: /^([0-2][0-9]|[3][01])[\/](0[1-9]|1[012])[\/]\d{4}$|^$/,
                    message: "Поле должно быть в формате Д/М/Г!"
            }
        }
    },


    "Summary[parents][mother][fullname]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$|^$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[parents][mother][addresses][home]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$|^$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[parents][mother][phones][work]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[parents][mother][phones][home]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },
        "Summary[parents][mother][phones][mobile]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[parents][mother][birth]":{
            validator:{

                regular :{
                    reg: /^([0-2][0-9]|[3][01])[\/](0[1-9]|1[012])[\/]\d{4}$|^$/,
                    message: "Поле должно быть в формате Д/М/Г!"
                }
            }
        },



        "Summary[persons][first][fullname]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[persons][first][addresses][home]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[persons][first][phones][city]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },



        "Summary[persons][first][phones][mobile]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[persons][second][fullname]":{
            validator:{
                required: true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[persons][second][addresses][home]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[persons][second][phones][city]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[persons][second][phones][mobile]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[university][name]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        

        "Summary[university][addresses][official]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[university][phones][work]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[university][phones][fax]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[university][course]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[0-6]$/,
                    message: "Только латинские цыфры 1-6!"
                }
            }
        },

        "Summary[university][department]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[university][group]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\0-9]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис!"
                }
            }
        },

        "Summary[university][dean_fullname]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[school][number]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[0-9]{1,3}$/,
                    message: "Только латинские цыфры 0-9!"
                }
            }
        },

        "Summary[school][addresses][official]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[school][educ_start]":{
            validator:{
                required :true,
                regular :{
                    reg: /^\d{4}$/,
                    message: "Поле должно быть в формате 9999"
                }
            }
        },

        "Summary[school][educ_finish]":{
            validator:{
                required :true,
                regular :{
                    reg: /^\d{4}$/,
                    message: "Поле должно быть в формате 9999"
                }
            }
        },

        "Summary[college][number]":{
            validator:{

                regular :{
                    reg: /^[0-9]{1,3}$|^$/,
                    message: "Только латинские цыфры 0-9!"
                }
            }
        },

        "Summary[college][addresses][official]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s\.\,\d]{1,60}$|^$/,
                    message: "Только латинские буквы, цыфры, пробел и дефис и точка!"
                }
            }
        },

        "Summary[college][educ_start]":{
            validator:{

                regular :{
                    reg: /^\d{4}$|^$/,
                    message: "Поле должно быть в формате 9999"
                }
            }
        },

        "Summary[college][educ_finish]":{
            validator:{

                regular :{
                    reg: /^\d{4}$|^$/,
                    message: "Поле должно быть в формате 9999"
                }
            }
        },
        
        "Summary[abroad_travels][0][country]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$|^$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[abroad_travels][0][visa_type]":{
            validator:{

                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$|^$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[siblings][0][fullname]":{
            validator:{

                string:{
                    max :35
                },
                regular :{
                    reg: /^[a-zA-Z\-\s]{1,60}$|^$/,
                    message: "Только латинские буквы, пробел и дефис!"
                }
            }
        },

        "Summary[jobs][0][position]":{
            validator:{

                string:{
                    max: 30
                },
                regular :{
                    reg: /^[a-zA-Z\-\s\_0-9]{1,30}$|^$/,
                    message: "Только латинские буквы, цифры, пробел, дефис и точка!"
                }
            }
        },

        "Summary[jobs][0][company_name]":{
            validator:{

                string:{
                    max: 30
                },
                regular :{
                    reg: /^[a-zA-Z\-\s\_.0-9]{1,30}$|^$/,
                    message: "Только латинские буквы, цифры, пробел, дефис и точка!"
                }
            }
        },

        "Summary[jobs][0][start_working]":{
            validator:{

                regular :{
                    reg: /^(0[1-9]|1[012])[\/]\d{4}$|^$/,
                    message: "Поле должно быть в формате М/Г!"
                }
            }
        },

        "Summary[jobs][0][finish_working]":{
            validator:{

                regular :{
                    reg: /^(0[1-9]|1[012])[\/]\d{4}$|^$/,
                    message: "Поле должно быть в формате М/Г!"
                }
            }
        },

        "Summary[phones][home]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

       "Summary[phones][other]":{
            validator:{

                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$|^$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[phones][mobile]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        }

    };
    //Валидация подуровней
    $.each(validation_fields, function( index, value ) {
        $('[name = "'+index+'"]').on("click", function () {
          fieldValidation(index, value.validator);

      });
    });


    $('#w0').on("submit", function () {
        $.each(validation_fields, function( index, value ) {
            fieldValidation(index, value.validator);
        });
    });

});
//Валидация суммы возврата при отказе
$('#w2').on('submit', function(e) {

    $(this).yiiActiveForm('find', 'payment-payment').validate = function(attribute, value, messages, deferred, $form) {
        var compare = - ($('#delivery').val() - $('#withholding').val());
        yii.validation.compare(value, messages, {compareValue: compare, type: 'number', operator: '==', message: 'The value does not match with the difference between Amount paid and Withholding' });
    };


});



function fieldValidation(name, validator) {

    id = name.toLowerCase();
    id = id.replace(/\]\[/g, "-");
    id = id.replace("]", "");
    id = id.replace("[", "-");

    $('#w0').yiiActiveForm('add', {
        'id': id,
        'name': name,
        'container': '.field-'+id,
        'input': '#'+id,
        'error': '.help-block',
        'validate' :  function (attribute, value, messages, deferred, $form) {

            if (validator.required == true) {
                yii.validation.required(value, messages, {message: "Cannot be blank."});
            }

            if (typeof(validator.string) === 'object' ) {
                if (validator.string.max) {
                    yii.validation.string(value, messages, {max: validator.string.max, tooLong: "Fullname should contain at most"+validator.string.max+"characters."});
                }
            }

            if (typeof(validator.regular) === 'object' ) {
                if (validator.regular.reg) {
                    var reg = validator.regular.reg;
                    if (validator.regular.message) {
                       var message = validator.regular.message; 
                    } else {
                       var message = "Pattern!";
                    }

                    yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});
                }
                
            }
        }
    }); 
}

var experienceIndex = 0;
var abroadCountryIndex = 0;
var relativeIndex = 0;

var Stan = {
    devMode: true,
    log: function (message) {
        if (this.devMode) console.log(message)
    },
    deleteRecursive: function (element, depth) {
    depth == undefined ? 4 : depth;

    if (depth != 0) {
        $(element).prev().remove();
        Stan.deleteRecursive(element, depth-1);
    }

    return 0;
    },
    Travel: {
        deleteField: function (element) {
            Stan.deleteRecursive(element, 1);
            $(element).remove();

        },
        addField: function () {
            abroadCountryIndex++;

            $('#abroad-travels').append('<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Страна</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<div class="form-group field-summary-abroad_travels-'+abroadCountryIndex+'-country" >'+
                '<input type="text" class="form-control"  id="summary-abroad_travels-'+abroadCountryIndex+'-country"  name="Summary[abroad_travels]['+abroadCountryIndex+'][country]">'+
                '<div class="help-block"></div>'+
                '</div>' +
                '</div> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Тип визы</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<div class="form-group field-summary-abroad_travels-'+abroadCountryIndex+'-visa_type" >'+
                '<input type="text" class="form-control" id="summary-abroad_travels-'+abroadCountryIndex+'-visa_type" name="Summary[abroad_travels]['+abroadCountryIndex+'][visa_type]"> ' +
                '<div class="help-block"></div>'+
                '</div>' +
                '</div>' +
                '</div>' + 
                '<button type="button" class="btn btn-round delete-travel"><i class="fa fa-times"></i></button>');
            
            /*$('#w0').yiiActiveForm('add', {
                'id': 'summary-abroad_countries-'+abroadCountryIndex+'-visa_type',
                'name': 'Summary[abroad_countries]['+abroadCountryIndex+'][visa_type]',
                'container': '.field-summary-abroad_countries-'+abroadCountryIndex+"-visa_type",
                'input': '#summary-abroad_countries-'+abroadCountryIndex+"-visa_type",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   //yii.validation.string(value, messages, {max: "30", tooLong: "Fullname should contain at most 5 characters."});
                   reg = /^[a-zA-Z\-\s]{1,60}$/;
                   message = "Только латинские буквы, пробел и дефис!";
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

               }
            });*/

            /*$('#w0').yiiActiveForm('add', {
                'id': 'summary-abroad_countries-'+abroadCountryIndex+'-country',
                'name': 'Summary[abroad_countries]['+abroadCountryIndex+'][country]',
                'container': '.field-summary-abroad_countries-'+abroadCountryIndex+"-country",
                'input': '#summary-abroad_countries-'+abroadCountryIndex+"-country",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   //yii.validation.string(value, messages, {max: "30", tooLong: "Fullname should contain at most 5 characters."});
                   reg = /^[a-zA-Z\-\s]{1,60}$/;
                   message = "Только латинские буквы, пробел и дефис!";
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

               }
            });*/

            validations = { 

                ["Summary[abroad_travels]["+abroadCountryIndex+"][visa_type]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^[a-zA-Z\-\s]{1,60}$/,
                            message: "Только латинские буквы, пробел и дефис!"
                        }
                    }
                },

                ["Summary[abroad_travels]["+abroadCountryIndex+"][country]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^[a-zA-Z\-\s]{1,60}$/,
                            message: "Только латинские буквы, пробел и дефис!"
                        }
                    }
                }
            };

            $.each(validations, function( index, value ) {
                $('[name = "'+index+'"]').on("click", function () {
                  window.fieldValidation(index, value.validator);
              });
            });

            
            
            $('.delete-travel').on('click', function () {
                Stan.Travel.deleteField(this);
            });
        },
    },
    Experience: {
        deleteField: function (element) {

            Stan.deleteRecursive(element, 4);
            $(element).remove();
        },
        addField: function () {
            experienceIndex++;

            $('#experience').append('<hr>' +
                '<div class="form-group "> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Название компании</label> ' +
                '<div class="col-md-9 col-sm-9 col-xs-12"> ' +
                '<div class="form-group field-summary-jobs-'+experienceIndex+'-company_name" >'+
                '<input type="text" class="form-control" id="summary-jobs-'+experienceIndex+'-company_name" name="Summary[jobs]['+experienceIndex+'][company_name]">'+
                '<div class="help-block"></div>'+
                '</div>' +
                '</div> ' +
                '</div> ' +
                '<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Должность</label> ' +
                '<div class="col-md-9 col-sm-9 col-xs-12"> ' +
                '<div class="form-group field-summary-jobs-'+experienceIndex+'-position" >'+
                '<input type="text" class="form-control" id="summary-jobs-'+experienceIndex+'-position" name="Summary[jobs]['+experienceIndex+'][position]"> ' +
                '<div class="help-block"></div>'+
                '</div>' +
                '</div> ' +
                '</div> ' +
                '<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Период с (мм/гггг)</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<div class="form-group field-summary-jobs-'+experienceIndex+'-start_working" >'+
                '<input type="text" class="form-control" id="summary-jobs-'+experienceIndex+'-start_working" name="Summary[jobs]['+experienceIndex+'][start_working]" data-inputmask="\'mask\' : \'99/9999\'"> ' +
                '<div class="help-block"></div>'+
                '</div> ' +
                '</div> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Период по (мм/гггг)</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<div class="form-group field-summary-jobs-'+experienceIndex+'-finish_working" >'+
                '<input type="text" class="form-control" id="summary-jobs-'+experienceIndex+'-finish_working" name="Summary[jobs]['+experienceIndex+'][finish_working]" data-inputmask="\'mask\' : \'99/9999\'"> ' +
                '<div class="help-block"></div>'+
                '</div> ' +
                '</div> ' +
                '</div><button type="button" class="btn btn-round delete-experience"><i class="fa fa-times"></i></button>');
            
                 
                 $('#summary-jobs-'+experienceIndex+'-start_working').inputmask();
                 $('#summary-jobs-'+experienceIndex+'-finish_working').inputmask();
                 //.inputmask("+7 (999) 999-9999");
            
            /*$('#w0').yiiActiveForm('add', {
                'id': 'summary-jobs-'+experienceIndex+'-company_name',
                'name': 'Summary[jobs]['+experienceIndex+'][company_name]',
                'container': '.field-summary-jobs-'+experienceIndex+"-company_name",
                'input': '#summary-jobs-'+experienceIndex+"-company_name",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   yii.validation.string(value, messages, {max: "30", tooLong: "Fullname should contain at most 5 characters."});
                   reg = /^[a-zA-Z\-\s\_.0-9]{1,30}$/;
                   message = 'pattern!';
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

                }
            });

            $('#w0').yiiActiveForm('add', {
                'id': 'summary-jobs-'+experienceIndex+'-position',
                'name': 'Summary[jobs]['+experienceIndex+'][position]',
                'container': '.field-summary-jobs-'+experienceIndex+"-position",
                'input': '#summary-jobs-'+experienceIndex+"-position",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Position cannot be blank."});
                   yii.validation.string(value, messages, {max: "30", tooLong: "Position should contain at most 5 characters."});
                   reg =  /^[a-zA-Z\-\s\_.0-9]{1,30}$/;
                   message = 'pattern!';
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

                }
            });

            $('#w0').yiiActiveForm('add', {
                'id': 'summary-jobs-'+experienceIndex+'-start_working',
                'name': 'Summary[jobs]['+experienceIndex+'][start_working]',
                'container': '.field-summary-jobs-'+experienceIndex+"-start_working",
                'input': '#summary-jobs-'+experienceIndex+"-start_working",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   yii.validation.string(value, messages, {max: "30", tooLong: "Position should contain at most 5 characters."});
                                     
                   reg = /^(0[1-9]|1[012])[\/]\d{4}$/;
                   message = "Поле должно быть в формате М/Г!";
                   
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

                }
            });

            $('#w0').yiiActiveForm('add', {
                'id': 'summary-jobs-'+experienceIndex+'-finish_working',
                'name': 'Summary[jobs]['+experienceIndex+'][finish_working]',
                'container': '.field-summary-jobs-'+experienceIndex+"-finish_working",
                'input': '#summary-jobs-'+experienceIndex+"-finish_working",
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   yii.validation.string(value, messages, {max: "30", tooLong: "Position should contain at most 5 characters."});
                   
                   reg = /^(0[1-9]|1[012])[\/]\d{4}$/;
                   message = "Поле должно быть в формате М/Г!";
                   
                   yii.validation.regularExpression(value, messages, {pattern: new RegExp(reg), message: message});

                }
            });*/

            validations = { 

                ["Summary[jobs]["+experienceIndex+"][company_name]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^[a-zA-Z\-\s\_.0-9]{1,30}$/,
                            message: "Только латинские буквы, цифры, пробел, дефис и точка!"
                        }
                    }
                },

                ["Summary[jobs]["+experienceIndex+"][position]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^[a-zA-Z\-\s\_.0-9]{1,30}$/,
                            message: "Только латинские буквы, цифры, пробел, дефис и точка!"
                        }
                    }
                },

                ["Summary[jobs]["+experienceIndex+"][start_working]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^(0[1-9]|1[012])[\/]\d{4}$/,
                            message: "Поле должно быть в формате М/Г!"
                        }
                    }
                },

                ["Summary[jobs]["+experienceIndex+"][finish_working]"]:{
                    validator:{
                        required :true,
                        regular :{
                            reg:  /^(0[1-9]|1[012])[\/]\d{4}$/,
                            message: "Поле должно быть в формате М/Г!"
                        }
                    }
                }

            };

            $.each(validations, function( index, value ) {
                $('[name = "'+index+'"]').on("click", function () {
                  window.fieldValidation(index, value.validator);
              });
            });

            $('.delete-experience').on('click', function () {
                Stan.Experience.deleteField(this);
            });
        }
    },
    Relative: {
        deleteField: function (element) {
            Stan.log('Delete');
            $(element).prev().remove();
            $(element).remove();
        },
        
        addField: function () {
            
            relativeIndex++ ;
            var formGroup = document.createElement('div'),
                label = document.createElement('label'),
                div1 = document.createElement('div'),
                div2 = document.createElement('div'),
                div3 = document.createElement('div'),
                
                input = document.createElement('input'),
                deleteBtn = document.createElement('button'),
                i = document.createElement('i');

            deleteBtn.setAttribute('type', 'button');
            deleteBtn.className = 'btn btn-round delete-br-and-sis';
            i.className = 'fa fa-times';
            deleteBtn.appendChild(i);
            deleteBtn.onclick = function () {
                Stan.Relative.deleteField(deleteBtn);
            };
            formGroup.className = 'form-group ';
            label.className = 'control-label col-md-3 col-sm-3 col-xs-12';
            label.innerText = 'Ф.И.О';
            div1.className = 'col-md-9 col-sm-9 col-xs-12';                
            div2.className = 'form-group field-summary-siblings-'+relativeIndex+' required';
            div3.className = 'help-block';
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'Summary[siblings]['+relativeIndex+'][fullname]');
            input.setAttribute('id', 'summary-siblings-'+relativeIndex);
            input.className = 'form-control';
            
            
            formGroup.appendChild(label);
            formGroup.appendChild(div1);
            div1.appendChild(div2);
            div2.appendChild(input);
            div2.appendChild(div3);


            var broAndSis = document.getElementById('brothers-and-sisters');

            broAndSis.appendChild(formGroup);
            formGroup.parentNode.insertBefore(deleteBtn, formGroup.nextSibling);
            
            $('#w0').yiiActiveForm('add', {
                'id': 'summary-siblings-'+relativeIndex,
                'name': 'Summary[siblings]['+relativeIndex+'][fullname]',
                'container': '.field-summary-siblings-'+relativeIndex,
                'input': '#summary-siblings-'+relativeIndex,
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                console.log(attribute);
                   yii.validation.required(value, messages, {message: "Cannot be blank."});
                   yii.validation.string(value, messages, {max: "50", tooLong: "Fullname should contain at most 50 characters."});
                }
            });


        }
    },
    Modal: function (options) {
        var id = options.id;
        $('body').append(options.html);

        this.show = function (delay) {
            if (delay) {
                setTimeout(function () {
                    $('#' + id).modal('show');
                }, delay)
            } else {
                $('#' + id).modal('show');
            }

        };

        this.hide = function (delay) {

            if (delay) {
                setTimeout(function () {
                    $('#' + id).modal('hide');
                }, delay)
            } else {
                $('#' + id).modal('hide');
            }
        };

        this.attachConfirm = function (self) {
            $('#' + id).find('.confirm').on('click', function(){
                return options.confirmHandler.apply(self);
            });
        };

        this.attachConfirm(this);
    }
};

