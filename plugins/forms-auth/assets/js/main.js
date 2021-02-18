(function ($){
    //Listen for Submission of LOGIN Form
    $("#login-form").on("submit", function(e){
        e.preventDefault();
        $("#login-status").html(`
            <div class="alert alert-info">Please wait!</div>
        `);
        $(this).hide();
        let form = {
            _wpnonce: $("#_wpnonce").val(),
            username: $("#login-form-username").val(),
            password:  $("#login-form-password").val(),
            action: 'my_login_user'
        }
        $.post(myrecipe_obj.ajax_url,form, function(data){
            if(data.status == 2){
                $("#login-status").html(`
                    <div class="alert alert-success">You are now logged in!</div>
                `);
                location.href = myrecipe_obj.home_url;
            }else{
                $("#login-status").html(`
                    <div class="alert alert-danger">Unable to Login.</div>
                `);
                $("#login-form").show();
            }
        });

    });
    
    //Listen for Submission of REGISTER Form
    $("#register-form").on("submit", function(e){
        e.preventDefault();
        $("#register-status").html(`
            <div class="alert alert-info">Please wait!</div>
        `);
        $(this).hide();
        let form = {
            _wpnonce: $("#_wpnonce").val(),
            name: $("#register-form-name").val(),
            username: $("#register-form-username").val(),
            email:  $("#register-form-email").val(),
            password:  $("#register-form-password").val(),
            repassword:  $("#register-form-repassword").val(),
            action: 'my_register_user'
        }
        $.post( myrecipe_obj.ajax_url,form ,function(data){
            if(data.status == 2){
                $("#register-status").html(`
                    <div class="alert alert-success">Account created!</div>
                `);
                location.href = myrecipe_obj.home_url;
            }else{
                $("#register-status").html(`
                    <div class="alert alert-danger">Unable to create account.</div>
                `);
                $("#register-form").show();
            }
        });
    });
})(jQuery);