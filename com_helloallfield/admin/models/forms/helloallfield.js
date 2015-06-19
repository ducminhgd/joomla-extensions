jQuery(function () {
    document.formvalidator.setHandler('textfield',
            function (value) {
                regex = /^[^a-zA-Z0-9]+$/;
                return regex.test(value);
            });
});