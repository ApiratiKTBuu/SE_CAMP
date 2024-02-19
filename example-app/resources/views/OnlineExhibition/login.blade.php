<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Online Exhibition | Login</title>
        <link rel="stylesheet" href="{{ url('assets/dist/css/OnlineExhibition/login.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <img src="assets/dist/img/myimg/Img_OnlineExhibition_logo_large_1.png" class="logo">
        <p class="intro-text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to our platform showcasing the exceptional talents of software engineering students! Explore a myriad of innovative projects and impressive works  created by our talented students in the field of software engineering.<br>

            <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;From cutting-edge applications to robust system solutions, our site is a hub of creativity and technical expertise.</p>
        <div class="login-container">
            <form action="{{ url('/login')}}" method="post">
                @csrf
            <p class="login-text">Login</p>
            <i class="fa-solid fa-user-lock"></i>
            <input type="text" name="email" placeholder="Username or Email" id="username-textbox"/>
            <input type="password" name="password" placeholder="Password" id="password-textbox"/>
            <br>
            <a href="#" class="password-reset-link">Forgot your password?</a>
        <button type="submit" class="login-button">Login</button>
        <button type="button" class="google-login-button"><i class="fa-brands fa-google"></i>      Login with Google</button>
        </form>
        </div>
    </body>
</html>
