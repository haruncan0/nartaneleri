(function($) {
	$(document).on("submit", "#infoFormClass", function(event){
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
            url: url + 'add_class',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Sınıf Başarıyla Eklendi");
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


    $(".class-status").change(function(){

        var id = $(this).data("id");

        if($(this).prop('checked')) {
            var status = 1;
        } else {
            var status = 0;
        }

        var data = [
            {
                name: 'csrf',
                value: Cookies.get('csrf_token')
            },{
                name : 'status',
                value : status
            },{
                name : 'id',
                value : id
            }]
        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'class_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Sınıf Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Sınıf Artık Sitede Görünecek.");
                } else {
                    iziToast.warning({
                        title: 'Uyarı',
                        message: result.error
                    });
                }
            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".delete-class").jConfirm().on('confirm', function(e){

        var id = $(this).data("id");

        var data = [
            {
                name: 'csrf',
                value: Cookies.get('csrf_token')
            },{
                name : 'id',
                value : id
            }]

        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'delete_class',
            success: function(result) {
                if (result.status === true) {
                    $('#delete'+id).remove();
                    toastr.success(" Silindi.");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(".delete-ticket").jConfirm().on('confirm', function(e){

        var id = $(this).data("id");

        var data = [
            {
                name: 'csrf',
                value: Cookies.get('csrf_token')
            },{
                name : 'id',
                value : id
            }]

        $.ajax({
            method: 'post',
            dataType: 'json',
            data: data,
            url: url + 'delete_ticket',
            success: function(result) {
                if (result.status === true) {
                    $('#delete'+id).remove();
                    toastr.success(" Silindi.");

                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(document).on("submit", "#infoFormUpdateClass", function(event){
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
            url: url + 'update_class',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Sınıf Başarıyla Güncellendi");
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


    $(document).on("submit", "#add_list_ticket", function(event){
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
            url: url + 'add_list_ticket',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Etiket Eklendi");
                    setTimeout(
                        function(){
                            window.location.reload(); 
                        }, 1000);
                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(document).on("submit", "#infoUpdateTicket", function(event){
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
            url: url + 'update_list_ticket',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Etiket Eklendi");
                    setTimeout(
                        function(){
                            window.location.reload(); 
                        }, 1000);
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