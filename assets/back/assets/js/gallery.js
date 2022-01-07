(function($) {

	$(document).on("submit", "#infoAddGallery", function(event){
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
            url: url + 'add_gallery',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Başarıyla Güncellendi.");
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


    $(document).on("submit", "#infoAddGalleryGroup", function(event){
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
            url: url + 'add_gallery_group',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Grup Eklendi.");
                    var table = [];
                    table += '<tr id="delete'+result.table_id+'"><td>'+result.table_id+'</td><td>'+result.table_name+'</td>';
                    table += '<td><input type="checkbox" class="switch gallery-group-status" data-id="'+ result.table_id +'" id="switch" checked /></td>';
                    table += '<td><button onclick="'+result.url+'" class="w-100 btn btn-warning buttonAnimation" data-animation="pulse"<i class="la la-refresh"></i>></button></td>';
                    table += '<td><button class="w-100 btn btn-danger buttonAnimation delete-gallery-group" data-id="'+result.table_id+'" data-animation="bounce"><i class=" la la-trash"></i></button></td></tr>';
                    table += $('#test').html();

                    $('#test').html(table);
                } else {
                    toastr.warning(result.error);
                }

            },
            error: function() {
                toastr.error("Bağlantı Hatası Tekrar Deneyin");
            }
        });
    });


    $(document).on("submit", "#infoUpdateGroup", function(event){
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
            url: url + 'update_group',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Başarıyla Güncellendi.");
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

        $(document).on("submit", "#infoUpdateGallery", function(event){
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
            url: url + 'update_gallery',
            success: function(result) {
                if (result.status === true) {
                    toastr.success("Başarıyla Güncellendi.");
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


    $(".gallery-group-status").change(function(){

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
            url: url + 'group_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Grup Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Grup Artık Sitede Görünecek.");
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

    $(".gallery-status").change(function(){

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
            url: url + 'gallery_status',
            success: function(result) {
                if (result.status === true && status == 0) {
                    toastr.success("Resim Sitede Görünmeyecek.");
                } else if (result.status === true && status == 1) {
                    toastr.success("Resim Artık Sitede Görünecek.");
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


    $(".delete-galery-group").jConfirm().on('confirm', function(e){

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
            url: url + 'delete_group',
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


     $(".delete-gallery").jConfirm().on('confirm', function(e){

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
            url: url + 'delete_gallery',
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


})(jQuery);
