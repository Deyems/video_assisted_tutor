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
    $("#signup-form").on("submit", function(e){
        e.preventDefault();
        $("#register-status").html(`
            <div class="alert alert-info">Please wait!</div>
        `);
        $(this).hide();
        let form = {
            _wpnonce: $("#_wpnonce").val(),
            username: $("#username").val(),
            email:  $("#email").val(),
            password:  $("#password").val(),
            action: 'db_register_user'
        }
        console.log(form);
        console.log('did we get here');
        $.post( db_auth_obj.ajax_url,form ,function(data){
            if(data.status == 2){
                $("#register-status").html(`
                    <div class="alert alert-success">Account created!</div>
                `);
                location.href = myrecipe_obj.home_url;
            }else{
                $("#register-status").html(`
                    <div class="alert alert-danger">Unable to create account.</div>
                `);
                $("#signup-form").show();
            }
        });
    });
})(jQuery);