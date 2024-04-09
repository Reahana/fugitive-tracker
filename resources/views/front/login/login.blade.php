<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title> login | Fugitive Tracker </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">

    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #080710;
        }
        .background{
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }
        .background .shape{
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        .shape:first-child{
            background: linear-gradient(
                    #1845ad,
                    #23a2f6
            );
            left: -80px;
            top: -80px;
        }
        .shape:last-child{
            background: linear-gradient(
                    to right,
                    #f83d18,
                    #f09819
            );
            right: -30px;
            bottom: -80px;
        }
        form{
            height: 520px;
            width: 400px;
            background-color: rgba(255,255,255,0.13);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h3{
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label{
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder{
            color: #e5e5e5;
        }
        .login-btn{
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn a{
            color: #080710;
            text-decoration: none;
        }

        .social{
            margin-top: 30px;
            display: flex;
        }
        .social button{
            background: red;
            width: 100% ;
            border-radius: 3px;
            padding: 10px 10px 10px 5px;
            background-color: rgba(255,255,255,0.27);
            color: #eaf0fb;
            text-align: center;
            margin-bottom: 10px;
        }
        .social button:hover{
            background-color: rgba(255,255,255,0.47);
        }

        .social i{
            margin-right: 4px;
        }
        .social a{
            text-decoration: none;
        }


    </style>
</head>
<body>

<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form action="{{route('officer-login')}}" method="POST">
    @csrf
    <h3>Officers Login Page</h3>

    <label for="username">Email</label>
    <input type="text" placeholder="Email" name="email" id="username">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" id="password">

    <button class="login-btn " type="submit">Log In</button>

    <div class="social">
        <button class="go"><a href={{route('/')}}><i class="fa-solid fa-arrow-left"></i>Back</a> </button>
        <!-- <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>  -->

    </div>


</form>
<div class="message">
    @if($message = Session::get('message'))
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
            <strong>{{$message}}!</strong>
        </div>
    @endif
</div>

<script src="https://kit.fontawesome.com/dd288c4724.js" crossorigin="anonymous"></script>
</body>
</html>
