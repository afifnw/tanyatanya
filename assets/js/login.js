(function($){
    "use strict";
   
//  Isi form
    $('.input-box').each(function(){
        $(this).blur(function(){
            if($(this).val().trim() != "") {
                $(this).addClass('oke');
            }
            else {
                $(this).removeClass('oke');
            }
        })    
    })



// validasi form
    let input = $('.input-box');
    
    
    
    $('.form').submit(function(){
        let check = true;

        for(let i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });
    
    $('.input-box').each(function(){
        console.log(this)
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else if ($(input).attr('name') == 'hp') {
                if($(input).val().trim().match(/^[0-9]+$/) == null) {
                    return false;
                }
        }
        else if ($(input).attr('name') == 'pass'){
            if($(input).val().trim().length < 6 || $(input).val().trim().length > 12 ){
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        // var thisAlert = $(input + ' .alert');
        var thisAlert = $(input).parent().children(".alert")
        $(thisAlert).css('visibility','visible');
    }

    function hideValidate(input) {
        
        // var thisAlert = $(input + ' .alert');
        var thisAlert = $(input).parent().children(".alert")

        $(thisAlert).css('visibility','hidden');
    }


    // ---confirm pw---
    $('#password, #confirm_password').blur(function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            console.log($('#password').val(),$('#confirm_password').val(),"1")
            $('#matching').css('visibility','hidden');
        } else 
            console.log($('#password').val(),$('#confirm_password').val())
            $('#matching').css('visibility','visible');
      });
  


})(jQuery);

