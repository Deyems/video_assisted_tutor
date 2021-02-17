
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="../font-awesome(4.7.0)/css/mycss.css">
    <link rel="stylesheet" href="../font-awesome(4.7.0)/css/font-awesome.min.css">
</head>
<body>
    <div class="container cover">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 log-in">

        <div class="card">
            <div class="card-body">
               <h4 class="card-title text-center">SigUp Form</h4>
                <form method="post" action="">
                <label for="">Username</label>
                <div class="input-group mb-3">
                <input type="text" name="" class="form-control" placeholder="username">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="#"><li class="fa fa-user text-secondary"></li></a></span>
                </div> 
                </div>

                <label for="">Email</label>
                <div class="input-group mb-3">  
                    <input type="email" name="" class="form-control" placeholder="email">
                    <div class="input-group-append">
                        <span class="input-group-text">@</span>
                    </div>
                </div>

                <label for="">Password</label>
                <div class="input-group mb-3">
                    <input type="password" name="" class="form-control" placeholder="password">
                    <div class="input-group-append">
                        <span class="input-group-text"><a href="#"><li class="fa fa-key text-secondary"></li></a></span>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Login">
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>   
               
                <!--p class="text-center">Registered? &nbsp;<a href="http://mathswithgbenga.test/wp-content/backend/registration/index.php" class="font-weight-bold">SignIn</a></p-->
                <p class="text-center">Registered? &nbsp;<a href="http://mathswithgbenga.com.ng/wp-content/backend/registration/index.php" class="font-weight-bold">SignIn</a></p>
               </form>
            </div>
        </div>
           
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <script src="../js1/jquery-3.3.1.min.js"></script>
    <script src="../js1/popper.min.js"></script>
    <script src="../js1/bootstrap.min.js"></script>
    <script src="../js1/jq.js"></script>
</body>
</html>

<style>
body{
    background: linear-gradient(to left, rgba(230, 230, 245, 0.2), rgba(230, 230, 245, 0.7));
}
    .cover{
        position: relative;
        top: 80px;
    }
</style>

