$(document).ready(function() {


    $("#login-form").submit(function(e){

        var data = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'http://hub.pagohub.com/ajax.php/login',
            data: data,
            beforeSend: function() {
            },
            success: function(response) {
            }
        });
        e.preventDefault();
    });

});
