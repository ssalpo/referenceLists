(function($) {
    $.referenceLists = {
        init: function () {
            $('.listDeleteBtn').click(function () {
               $('.deleteForm').submit();
            });
        }
    };

    $.referenceLists.init();
})(jQuery);