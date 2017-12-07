( function( $ ) {

    postFormJson = function(id) {
        var form  = $('#'+id),
            url   = form.attr('action'),
            btn   = $('#'+id+'-submit'),
            ret   = $('#return-'+id);
        text  = btn.text();
        jQuery.ajax({
            type: 'POST',
            dataType: "json",
            url: url,
            data: form.serialize(),
            beforeSend: function() {
                btn.prop('disabled', true);
                btn.text('Agurade');
            },
            success: function(data){
                btn.html(text);
                btn.prop('disabled', false);
                ret.show();
                ret.html('<ul class="avdesign-info">'+data.success+'</ul>');
                var message_box = $(".message-box");
                message_box.show();
                message_box.html('<span class="notice">'+ data.success +'</span>');

                $('#'+id).each (function(){
                    this.reset();
                })


                if (typeof data.redirect !== 'undefined') {
                    setTimeout(function() {
                        window.location.href = data.redirect
                    }, 3000);
                } else {
                    setTimeout(function(){ ret.hide(); }, 30000);
                }
            },
            error: function(xhr) {
                btn.text(text);
                btn.prop('disabled', false);
                ajaxFormError(xhr, 'return-'+id);
            }
        });
    };



    ajaxFormError = function(xhr, div)
    {
        $("#"+div).empty();
        if (xhr.status == 422) {
            var obj = $.parseJSON(xhr.responseText), message = '', box = '';
            $.each( obj, function( key, value ) {

                if (key == 'errors') {
                    $.each(obj[key], function(i, error) {
                        message += '<li style="color:#ff5659">'+error+'</li>';
                        box = '<span class="error">'+ error +'</span>';
                    });
                }
            });
            $("#"+div).show();
            $("#"+div).html('<ul class="avdesign-error" >'+ message +'</ul>');
            var message_box = $(".message-box");
            message_box.show();
            message_box.html(box);
            setTimeout(function(){ $("#"+div).hide(); }, 6000);

        }
    }

    /** Form Profile (change account e register user)
     *
     * @param url
     */
    formProfile = function (url) {
        var token = $("#_token").val();
        $.ajax({
            type: "POST",
            url: url,
            headers: {
                'X-CSRF-TOKEN': token
            },
            success: function (data) {
                $('#load-profile').html(data);
            }
        });
    }






} )( jQuery );