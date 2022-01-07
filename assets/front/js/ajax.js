const url = 'http://localhost/nar-taneleri/Ajax/';
(function($) {

	$(document).on("submit", "#contact_form", function(event){
        event.preventDefault();
        var serialized = $(this).serializeArray();
        serialized.push({
            name: 'csrf',
            value: Cookies.get('csrf_token')
        });
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: serialized,
            url: url + 'contact_form',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Mesajınız alındı. En kısa zamanda sizine iletişime geçeceğiz.");
                    setTimeout(
                        function(){
                            window.location.reload();
                        }, 2000);
                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });

})(jQuery);