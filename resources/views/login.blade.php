{{-- @dd(session()->get('mode')) --}}
<!DOCTYPE html>
<html lang="en">
{{-- @dd(session()->get('username'))   --}}
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMERDEKA</title>
    <link rel="stylesheet" href="{{ URL::to('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5f1e7184e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::to('css/login.css')}}">
</head>
<body style="background-image: url(img/latar.png)">
        
    <div class="logo">
        <div class="logo-2">
            <h1><img src="img/logo-unj.png" alt="logo" width="80px" height="80px" style="float:left; margin-right:10px">SIMERDEKA</h1>
        </div>
    </div>
   
 <div class="login">   
    <div class="login-2">
        <h2>LOGIN</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="button" href="/loginMHS">Silahkan Masuk</a> </button>
            <p style="margin-top: 30px; text-align:center; font-size:13.3px"><mark>* Silahkan masuk dengan username dan password yang sesuai dengan SIAKAD !</p>
        </form>
    </div>
</div>
            
<a style="color: white; text-align: center; font-family:ubuntu; display:flex; justify-content:center; margin-top: 6rem" href=""> © UPT Teknologi Informasi dan Komunikasi (UPT TIK) UNJ</a>

    
</body>
</html>
