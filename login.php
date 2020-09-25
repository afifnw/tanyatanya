<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- css style -->
    <link href="assets/css/login.css" rel="stylesheet">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>
      
    <div class="kontainer">
        <div class="row">
            <div class="col-xl-8 col-md-7 col-sm-6 background-kiri">
            </div>
            <div class="col-xl-4 col-md-5  kanan">
                <form class="form konten-kanan" id="form-login">
                    <span class="tittle-header">
                        <h2>LOGIN</h2>
                    </span>
                    <!-- username -->
                    <div class="wrap-input">
                        <input class="input-box" type="text" name="username">
                        <span class="input-tag center-vert ">Username</span>
                        <div class="alert">
                            username required
                         </div>
                    </div>
                    
                    <!-- pass -->
                    <div class="wrap-input" data-validate="Password is required">
                        <input class="input-box" type="password" name="pass">
                        <span class="input-tag center-vert">Password</span>
                        <div class="alert ">
                            pass required 6 to 12 characters
                         </div>
                    </div>

                    <div class = "row">
                        <div class="col-6 forgot-pw">
                            <a href="signup.php">Sign Up !</a>  
                        </div>
                        <div class="col-6 forgot-pw text-right">
                            <a href="" data-toggle="modal" data-target="#forgot">forgot password?</a>  
                        </div>
                    </div>

                    <div class="button-login">
                        <button   class="button-box">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="forgot"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        Your new password will be send to your email.
                        <form class="form" action="b" id="reset-pass">
                            <div>
                                <div class="wrap-input" >
                                    <input class="input-box" type="text" name="email">
                                    <span class="input-tag center-vert ">Email</span>
                                    <div class="alert">
                                        email required: ex@abc.xyz
                                    </div>
                                </div>
                            </div>
                            <div class="button-login">
                                <input type="submit" class="button-box">
                                    <!-- Reset Password -->
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/login.js"></script>
  </body>
</html>