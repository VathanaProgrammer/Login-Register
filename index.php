<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  <!-- Include jQuery -->
</head>
<style>
/* Remove box shadow from all inputs */
input.form-control:focus {
    box-shadow: none;
}
.container{   
    max-width: 800px !important;
}
.don-t-haveAcc:hover{
    text-decoration: underline; 
    cursor: pointer;
}
</style>
<body class="bg-body-secondary">
    <div class="container big-container d-flex flex-column vh-100 align-items-center justify-content-center">
        <div class="container bg-white shadow-lg rounded-4 p-3" id="registerForm">
            <h2 class="text-center">Register</h2>
            <form action="./register.php" method="post" class="row row-cols-1">
                <div class="col col-sm-6">
                    <label for="fname" class="form-label w-100 ">First Name</label>
                    <input type="text" name="fname" id="" class="form-control">
                </div>
                <div class="col col-sm-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" >
                </div>
                <div class="col col-sm-6" >
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="col col-sm-6">
                    <label for="ppw" class="form-label" >Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col col-sm-12">
                    <button class="btn btn-success w-100 mt-2" type="submit" name="register">Register</button>
                </div>
                <div class="col col-12">
                    <P class="text-center text-success">OR</P>
                </div>
                <div class="col col-12">
                    <p class="text-primary text-center don-t-haveAcc" id="switchToLogin">Don't have an account?</p>
                </div>
            </form>
        </div>
        <div class="container bg-white shadow-lg rounded-4 p-3 d-none" id="loginForm">
            <h2 class="text-center">Login</h2>
            <form action="./register.php" method="post" class="row row-cols-1">
                <div class="col col-sm-6" >
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="col col-sm-6">
                    <label for="w" class="form-label" >Password</label>
                    <input name="ppw" type="password" class="form-control">
                </div>
                <div class="col col-sm-12">
                    <button class="btn btn-success w-100 mt-2" name="login">Login</button>
                </div>
                <div class="col col-12">
                    <P class="text-center text-success">OR</P>
                </div>
                <div class="col col-12">
                    <p class="text-primary text-center don-t-haveAcc" id="switchToRegister">Already have an account?</p>
                </div>
            </form>
        </div>
    </div>
    <script>
        console.log('JavaScript is working!');
$(document).ready(function(){

    $('#switchToLogin').on('click', function(){
        $('#loginForm').removeClass('d-none').addClass('d-block');
        $('#registerForm').addClass('d-none');
    })

    $('#switchToRegister').on('click', function(){
        $('#loginForm').addClass('d-none').removeClass('d-block');
        $('#registerForm').removeClass('d-none');
    })
});
    </script>
</body>
</html>
