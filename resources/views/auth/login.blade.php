<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/')}}/login.css">
    <title>Login Page</title>
</head>
<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-8">
                     <div class="header">
                        <h1>Welcome to LumosHotel</h1>
                        <p>Start travel the whole world right now with travellin.</p>
                    </div>
                    <form class="login-form" action="{{route('postlogin')}}" method="POST">
                        {{ csrf_field() }}
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" tabindex="1">
                        <label for="password" class="form-label mt-2">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" tabindex="2">
                        <button class="btn btn-primary btn-block" tabindex="3">Login</button>
                        <p class="text-center mt-2">
                            <span>Don't have account?</span>
                            <a href="{{route('register')}}">
                                <span>Sign up</span>
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        

        <div class="login-right w-50 h-100">
            <div class="poto-kanan">
                <img src="{{asset('image/formlogin.png')}}" alt="">
            </div>
        </div>
              
        </div>
        
    </section>

    <script src="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/js/bootstrap.min.js"></script>
</body>
</html>