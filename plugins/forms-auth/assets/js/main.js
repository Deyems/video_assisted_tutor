(function ($){
    //Listen for Submission of LOGIN Form
    $("#signin-form").on("submit", function(e){
        console.log('Here we go again');
        e.preventDefault();
        $("#login-status").html(`
            <div class="alert alert-info">Please wait!</div>
        `);
        $(this).hide();
        let form = {
            _wpnonce: $("#_wpnonce").val(),
            email:  $("#email").val(),
            password:  $("#password").val(),
            action: 'db_login_user'
        }
        $.post( db_auth_obj.ajax_url,form ,function(data){
            if(data.status == 2){
                $("#login-status").html(`
                    <div class="alert alert-success">You are now logged in!</div>
                `);
                location.href = db_auth_obj.dashboard_url;
            }else{
                $("#login-status").html(`
                    <div class="alert alert-danger">Unable to Login.</div>
                `);
                $("#signin-form").show();
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
        $.post( db_auth_obj.ajax_url,form ,function(data){
            if(data.status == 2){
                $("#register-status").html(`
                    <div class="alert alert-success">Account created!</div>
                `);
                location.href = db_auth_obj.dashboard_url;
            }else{
                $("#register-status").html(`
                    <div class="alert alert-danger">Unable to create account.</div>
                `);
                $("#signup-form").show();
            }
        });
    });
})(jQuery);