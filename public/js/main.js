$(document).ready(function() {


    $("#login-form").submit(function(e){
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'http://hub.pagohub.com/ajax.php/login',
            data: data,
            beforeSend: function() {
              $("#response").hide();
              $("#response").removeClass("error");
              $("#response").removeClass("success");
            },
            success: function(response) {
              console.log(response);
            }
        });
        e.preventDefault();
    });

});
