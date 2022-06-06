
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLog | Sign Up</title>
    <link rel="stylesheet" href="{{asset('./bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./css/signUp.css')}}">
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
                        <p class="welcomeText mb-4">Just a couple of clicks and we will set up your account</p>
                        <div class="circles">
                            <div class="biggestCircle me-1"></div>
                            <div class="biggerCircle me-1"></div>
                            <div class="bigCircle me-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 leftContainer">
                    <div class="formContainer">
                        <div class="signUpHeader fw-bold mb-4 text-center">Register</div>

                        <div class="iconWrapper">
                            <div class="socialIcon"><i class="fa-brands fa-facebook"></i></div>
                            <div class="socialIcon"><i class="fa-brands fa-twitter"></i></div>
                            <div class="socialIcon"><i class="fa-brands fa-google"></i></div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            <div class="mb-2">
                                <label  class="form-label">Email address</label>
                                <input type="email"  class="form-control inputs @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label  class="form-label">Username</label>
                                <input type="text"  class="form-control inputs @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="password"  class="form-control inputs @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="exampleInputPassword1">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Confirm Password</label>
                                <input type="password"   class="form-control inputs"  name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" >
                                <label class="form-check-label">I accept Terms of Service</label>
                            </div>


                            <div class="mb-2">
                                 <input type="submit" class="signUpBtn text-center"  value="Sign Up">


                            </div>

                            @csrf


                            <a href="{{url('login')}}">
                                <div class="text-center mt-4 signUpText">
                                    Already have an account? Sign In
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