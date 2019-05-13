function hasNumber(myString) {
    return /\d/.test(myString);
}

var validation = {
    firstName: function (value) {
        return value.length > 3 && !hasNumber(value);
    },
    lastName: function (value) {
        return value.length > 5 && !hasNumber(value);
    },
    email: function (value) {
        return value.indexOf('@') >= 0 && value.length >= 5 && value.indexof('.') >= 0;
    },
    message: function (value) {
        return value.length > 5;
    },
};


$(document).ready(
    function () {
        var submitBtn = $('.contact-btn');

        $('.contact-input, .contact-input-message').change(
            function (evt) {
                var value = evt.target.value;
                var validationName = $(this).data('validation');
                var validationFn = validation[validationName];

                var isValid = $.isFunction(validationFn) ? validationFn(value) : true;
                var hasError = !isValid;

                $(this).toggleClass('error', hasError);
                submitBtn.prop('disabled', hasError);
            }
        );
    }
);
