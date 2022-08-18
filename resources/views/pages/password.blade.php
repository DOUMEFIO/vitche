
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ViTCHE </title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">   
    <h3>Inserer vos information</h3>
    @if(session()->has('info2'))
    <form action="update" method="post">
        @csrf
    @endif
    @if(session()->has('info2')=="")
    <form action="connect" >
    @endif
        <div class="inputBox">
             <input id="uname" type="text" name="contact" placeholder="97 78 76 55" >
             <input id="pass" type="password" name="password" placeholder="Exemple : Azer1234" > 
             <input id="id" type="hidden" name="id" value="@if(session()->has('info2'))
                                                             {!! session('info2') !!}
                                                         @endif
                                                         "> 
        </div> 
        <input type="submit" value="Soumettre" style="margin-top: 15px; margin-bottom: 5px;">
    </form> 
    
</div>

 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

 <!-- Page level plugins -->
 <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
 <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>

 <style>body{margin: 0;padding: 0;background: url(https://i.ibb.co/VQmtgjh/6845078.png) no-repeat;height: 100vh;font-family: sans-serif;background-size: cover;background-repeat: no-repeat;background-position: center;overflow: hidden}@media screen and (max-width: 600px;){body{background-size: cover;: fixed}}#particles-js{height: 100%}.loginBox{position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 350px;min-height: 200px;background: #000000;border-radius: 10px;padding: 40px;box-sizing: border-box}.user{margin: 0 auto;display: block;margin-bottom: 20px}h3{margin: 0;padding: 0 0 20px;color: #59238F;text-align: center}.loginBox input{width: 100%;margin-bottom: 20px}.loginBox input[type="text"], .loginBox input[type="password"]{border: none;border-bottom: 2px solid #262626;outline: none;height: 40px;color: #fff;background: transparent;font-size: 16px;padding-left: 20px;box-sizing: border-box}.loginBox input[type="text"]:hover, .loginBox input[type="password"]:hover{color: #42F3FA;border: 1px solid #42F3FA;box-shadow: 0 0 5px rgba(0,255,0,.3), 0 0 10px rgba(0,255,0,.2), 0 0 15px rgba(0,255,0,.1), 0 2px 0 black}.loginBox input[type="text"]:focus, .loginBox input[type="password"]:focus{border-bottom: 2px solid #42F3FA}.inputBox{position: relative}.inputBox span{position: absolute;top: 10px;color: #262626}.loginBox input[type="submit"]{border: none;outline: none;height: 40px;font-size: 16px;background: #59238F;color: #fff;border-radius: 20px;cursor: pointer}.loginBox a{color: #262626;font-size: 14px;font-weight: bold;text-decoration: none;text-align: center;display: block}a:hover{color: #00ffff}p{color: #0000ff}</style>
 


   
