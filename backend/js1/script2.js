
// login ajax script
        $('document').ready(function()
        {
            $('#form_3').on('submit', function(event){  
        event.preventDefault();  
        let emailx = $('#user_emaily').val();  
        let passw = $('#passwordy').val();
                
        if(emailx != '' && passw != '')  
        {  
        
            $.ajax({  
                url:"../php/controllers/loginKontrol.php",
                  method:"POST", 
                  data:new FormData(this),  
                  contentType:false,  
                  processData:false,
                  beforeSend: function()
                  { 
                    $("#message").fadeOut();
                    $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
                  },  

                  success:function(data)  
                  {  
                       //alert(data);  
                       $('#form_3')[0].reset();
                     if(data==1){
                        $("#message").fadeIn(1000, function(){
                            $("#message").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Invalid Email/Password!</div>');
                       });
                      }
                        else if(data==3)
                        { 
                           $("#message").fadeIn(1000, function(){
                            $('#message').html('<img src="../img/ajax-loader.gif">');                                  
                        });
                        
                        setInterval(function(){
                             window.location='dashboard.php';
                        }, 5000);

                       }
                        else if(data==2)
                        {
                            $("#message").fadeIn(1000, function(){
                                $("#message").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; password do not match !</div>');
                                $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                          });
                        }
                        else{
                            $("#message").fadeIn(1000, function(){
                                $("#message").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
                                $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                            });
                        }
                  }  
             })  
        }  
        else  
        {  
             alert("All Fields are Required");  
        }  
   });
});
