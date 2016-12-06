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

    $('#reset-password-form button').on('click',function (event){
        event.preventDefault();
        loadAgreement('#reset-password-form');
    });




})(jQuery);



$(document).on('click', '#check', function(event){
    if ($(event.currentTarget).is(':checked')) {
        $('.confirm').removeAttr("disabled");
    } else {
        $('.confirm').attr('disabled', 'disabled');
    }
});


function loadAgreement (form) {
    var agreement = null;
    $.ajax({
        url: '/site/agreement',
        method: 'GET',
        success: function (response) {
            agreement = new Stan.Modal({
                id: 'agreementModal',
                confirmHandler: function () {
                    this.hide();
                    $(form).submit();
                },
                html: response
            }).show();
        }
    });

}

$(document).ready(function() {

    validation_fields = { 

        "Summary[siblines][0][fullname]":{
            validator:{
                required :true,
                string:{
                    max :5
                }
            }
        },

        "Summary[jobs][0][position]":{
            validator:{
                required :true,
                string:{
                    max: 300
                },
                regular :{
                    reg: /^[a-zA-Z\-\s\_0-9]{1,30}$/,
                
                }
            }
        },

        "Summary[jobs][0][company_name]":{
            validator:{
                required :true,
                string:{
                    max: 30
                },
                regular :{
                    reg: /^[a-zA-Z\-\s\_.0-9]{1,30}$/,

                }
            }
        },

        "Summary[jobs][0][start_working]":{
            validator:{
                required :true,
                regular :{
                    reg: /^(0[1-9]|1[012])[\/]\d{4}$/,
                    message: "Поле должно быть в формате М/Г!"
                }
            }
        },

        "Summary[jobs][0][finish_working]":{
            validator:{
                required :true,
                regular :{
                    reg: /^(0[1-9]|1[012])[\/]\d{4}$/,
                    message: "Поле должно быть в формате М/Г!"
                }
            }
        },

        "Summary[phones][home]":{
            validator:{
                required :true,
                regular :{
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[phones][other]":{
            validator:{
                required :true,
                regular :{
                    //reg: /^[0-2][1-9]|3[01][\/](0[1-9]|1[012])[\/]\d{4}$/,
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

        "Summary[phones][mobile]":{
            validator:{
                required :true,
                regular :{
                    //reg: /^[0-2][1-9]|3[01][\/](0[1-9]|1[012])[\/]\d{4}$/,
                    reg: /^[\(]\d{3}[\)]\s\d{3}[\-]\d{4}$/,
                    message: "Поле должно быть в формате (ЧЧЧ)ЧЧЧ-ЧЧЧ!"
                }
            }
        },

    };



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
   // agreement = null;



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
                yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
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

   
});

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
            Stan.deleteRecursive(element, 5);
            $(element).parent().remove();
        },
        addField: function () {
            abroadCountryIndex++;
            $('#social-number').prepend('<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Страна</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[abroad_countries]['+abroadCountryIndex+'][country]">'+
                '</div> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Тип визы</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[abroad_countries]['+abroadCountryIndex+'][visa_type]"> ' +
                '</div> ' +
                '<button type="button" class="btn btn-round delete-travel"><i class="fa fa-times"></i></button></div>');

            $('.delete-travel').on('click', function () {
                Stan.Travel.deleteField(this);
            });
        }
    },
    Experience: {
        deleteField: function (element) {

            Stan.deleteRecursive(element, 4);
            $(element).remove();
        },
        addField: function () {
            experienceIndex++;

            $('#experience').append('<hr>' +
                '<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Название компании</label> ' +
                '<div class="col-md-9 col-sm-9 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[jobs]['+experienceIndex+'][company_name]">'+
                '</div> ' +
                '</div> ' +
                '<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Должность</label> ' +
                '<div class="col-md-9 col-sm-9 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[jobs]['+experienceIndex+'][position]"> ' +
                '</div> ' +
                '</div> ' +
                '<div class="form-group"> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Период с (мм/гггг)</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[jobs]['+experienceIndex+'][start_working]"> ' +
                '</div> ' +
                '<label class="control-label col-md-3 col-sm-3 col-xs-12">Период по (мм/гггг)</label> ' +
                '<div class="col-md-3 col-sm-3 col-xs-12"> ' +
                '<input type="text" class="form-control" name="Summary[jobs]['+experienceIndex+'][finish_working]"> ' +
                '</div> ' +
                '</div><button type="button" class="btn btn-round delete-experience"><i class="fa fa-times"></i></button>');
            
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
            div2.className = 'form-group field-summary-siblines-'+relativeIndex+' required';
            div3.className = 'help-block';
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'Summary[siblines]['+relativeIndex+'][fullname]');
            input.setAttribute('id', 'summary-siblines-'+relativeIndex);
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
                'id': 'summary-siblines-'+relativeIndex,
                'name': 'Summary[siblines]['+relativeIndex+'][fullname]',
                'container': '.field-summary-siblines-'+relativeIndex,
                'input': '#summary-siblines-'+relativeIndex,
                'error': '.help-block',
                'validate' :  function (attribute, value, messages, deferred, $form) {
                console.log(attribute);
                   yii.validation.required(value, messages, {message: "Fullname cannot be blank."});
                   yii.validation.string(value, messages, {max: "5", tooLong: "Fullname should contain at most 5 characters."});
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

