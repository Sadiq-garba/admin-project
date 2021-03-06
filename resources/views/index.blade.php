<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLog</title>
    <link rel="stylesheet" href="{{asset('./bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/index.css')}}">
    <script src="https://kit.fontawesome.com/ca2912634d.js" crossorigin="anonymous"></script>
</head>

<body>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 rightContainer">
                    <div class="topLogoWrapper">
                        <div class="logo">
                            <img src="./assets/smart.png" alt="SmartLog logo">
                        </div>
                        <div class="logoText fw-bold mt-5">SmartLog</div>
                    </div>

                    <div class="welcomeSection mt-5">
                        <h1 class="welcomeHeader text-center">Welcome Back</h1>
                        <p class="welcomeText mb-4">Just a couple of clicks and we will start</p>
                        <div class="circles">
                            <div class="biggestCircle me-1"></div>
                            <div class="biggerCircle me-1"></div>
                            <div class="bigCircle me-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 leftContainer">
                    <div class="formContainer">
                        <div class="signInHeader fw-bold mb-4">Sign In</div>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="mb-3 input">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="inputEmail">
                                <i class="icon fa-solid fa-envelope"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>

                            <div class="mb-3 input">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  id="inputPassword">
                                <i class="icon fa-solid fa-eye-slash"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            
                               <!-- <div class="signInBtn  text-center">Sign In</div>-->
                               <div class="mb-3">
                                <input type="submit" class="signInBtn text-center" style="display:block;" value="Sign In">
                            
                                 </div>
                               @csrf

                            <a href="./signUp.html">
                                <div class="text-center mt-4 signUpText">
                                    Dont have an account? Sign Up
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>