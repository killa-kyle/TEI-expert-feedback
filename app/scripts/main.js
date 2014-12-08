// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')
$('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect for readmore:
$('.read-more-show').on('click', function(e) {
    $(this).next('.read-more-content').removeClass('hide');
    $(this).addClass('hide');
    e.preventDefault();
});

$('.read-more-hide').on('click', function(e) {
    $(this).parent('.read-more-content').addClass('hide');
    var moreid = $(this).attr("more-id");
    $('.read-more-show#' + moreid).removeClass('hide');
    e.preventDefault();
});



// form slider
function show_value(x) {
    document.getElementById("plaintiff_value").innerHTML = 100 - x + "%";
    document.getElementById("defense_value").innerHTML = x + "%";
    console.log(" defense value " + document.getElementById("defense_value").innerHTML + "%");
}


// Simple Validation - By Chad Humphrey - hmphry.com
// Released under the MIT license

// Get all forms
var simpleValidation = function() {

    var validateForm = $('form.validate-form');

    // Gets all forms to Validate
    validateForm.each(function() {
        // Defining basic variables, bro
        var validateForm = $(this);
        var validate = {};
        var validateThis = $(this).find('.validate');
        var validatingLength = $(this).find('.validate').length;
        var submitBtn = $(this).find('.submit');

        // For Loop Getting Elements to Validate
        for (var i = 1; i <= validatingLength; i++) {
            // Adding Inputs to object, false for default
            validate['input' + i] = false;
        }

        $('.validate').blur(function() {
            var index = $(this).prevAll().length + 1;
            var validateThisVal = $(this).val();
            var validateThisType = $(this).attr('type');

            // Checks if input type is email
            if (validateThisType === "email") {

                // Email regex
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                // Condition to see if Email exists
                if (!validateThisVal.match(re)) {
                    $(this).addClass('not-valid');
                    $(this).removeClass('is-valid');
                    return validate['input' + index] = false;
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('not-valid');
                    return validate['input' + index] = true;
                }
            } else {

                // Makes sure input is filled out
                if (validateThisVal == "") {
                    $(this).addClass('not-valid');
                    $(this).removeClass('is-valid');
                    return validate['input' + index] = false;
                } else {
                    $(this).addClass('is-valid');
                    $(this).removeClass('not-valid');
                    return validate['input' + index] = true;
                }
            }
        });


        validateForm.submit(function(event) {
            // Prevents Default
            event.preventDefault();

            // Logging form errors
            var falseCtn = 0;
            for (var i = 1; i <= validatingLength; i++) {
                if (validate['input' + i] == false) {
                    falseCtn++;
                }
            }

            // Checking if any falses exist
            if (falseCtn > 0) {
                $(this).unbind('submit').submit();
                $(this).click();
            } else {}
        });

    });

};

simpleValidation()



//visual validation status button 
jQuery('document').ready(function($) {
    $('.validate').keyup(function() {

        var empty = false;
        $('.validate').each(function() {
            if ($(this).val() === '') {
                empty = true;
            }
        });

        if (empty) {
            $('.send').prop('disabled', true);
            $('.send').css('background-color', '#ccc');
            $('.send').css('color', '#fff');
        } else {
            $('.send').prop('disabled', false);
            $('send').addClass('btn-valid');
            $('.send').css({
                'background-color': '#AAD661',
                'color': '#ffffff',
                'border': '2px solid #AAD661'
            });
        }
    });
});