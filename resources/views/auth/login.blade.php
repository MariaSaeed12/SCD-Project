<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Login and Signup Integration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://accounts.google.com/gsi/client?hl=en" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="myform form">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>
                    <form id="loginForm" method="post" action="login.php"> <!-- Update with your login handler -->
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">Login</button>
                        </div>
                        <div class="col-md-12">
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <div id="g_id_onload"
                                data-client_id="325282402699-54isdtr7ck3skmv4gdbd065ntt3bopfk.apps.googleusercontent.com"
                                data-callback="handleCredentialResponse">
                            </div>
                            <div class="g_id_signin"
                                data-type="standard"
                                data-shape="rectangular"
                                data-theme="outline"
                                data-text="continue_with"
                                data-size="large">
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Don't have an account? <a href="#" id="showSignup">Sign up here</a></p>
                        </div>
                    </form>
                </div>

                <!-- Signup Form -->
                <div class="myform form d-none" id="signupForm">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Sign Up</h1>
                        </div>
                    </div>
                    <form method="post" action="signup.php"> <!-- Update with your signup handler -->
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="emailSignup">Email address</label>
                            <input type="email" name="email" class="form-control" id="emailSignup" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwordSignup">Password</label>
                            <input type="password" name="password" class="form-control" id="passwordSignup" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Already have an account? <a href="#" id="showLogin">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle between login and signup forms
        $(document).ready(function () {
            $('#showSignup').click(function (e) {
                e.preventDefault();
                $('#loginForm').addClass('d-none');
                $('#signupForm').removeClass('d-none');
            });

            $('#showLogin').click(function (e) {
                e.preventDefault();
                $('#signupForm').addClass('d-none');
                $('#loginForm').removeClass('d-none');
            });
        });

        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID token: " + response.credential);
            // Send the token to your server for verification or authentication

            // Redirect to index page after successful Google login
            window.location.href = 'http://127.0.0.1:8000/'; // Change this to your actual index page URL
        }
    </script>
</body>
</html>
