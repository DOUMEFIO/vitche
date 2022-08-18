

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nom de l'etablissement</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>


<div class="wrapper">
    @if(session()->has('info'))
		<div class="alert alert-succes" style="color: red;"> {!! session('info') !!}</div>
	@endif
    @if(session()->has('info1'))
		<div class="alert alert-succes" style="color: red;"> {!! session('info1') !!}</div>
	@endif
    @if(session()->has('info2'))
        <div class="alert alert-succes" style="color: red;"> {!! session('info2') !!}</div>
    @endif
    @if(session()->has('info3'))
        <div class="alert alert-succes" style="color: red;"> {!! session('info3') !!}</div>
    @endif
    @if(session()->has('info4'))
        <div class="alert alert-succes" style="color: red;"> {!! session('info4') !!}</div>
    @endif
    @if(session()->has('info5'))
        <div class="alert alert-succes" style="color: red;"> {!! session('info5') !!}</div>
    @endif
    <div class="logo">
        <img src="{{asset('assets/img/vitche.jpeg')}}" alt="">
    </div>
    <form class="p-3 mt-4" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-field d-flex align-items-center" style="margin-bottom:30px;">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="userName" placeholder="Votre email">
        </div>
        <div class="form-field d-flex align-items-center" style="margin-bottom:30px;">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Votre mot de pass">
        </div>
        <button class="wapper btn" style="border: none;" type="submit">{{ __('Connecter') }}</button>
       
    </form>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="text-center fs-6" style="text-align:center; margin-top:10px;margin-bottom:20px;">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif 
    </div>
    <button class="wapper btn" style="border: none;" data-toggle="modal" data-target="#exampleModal">Inserer l'identifiant</button>
</div>

  
<form method="POST" action="{{route('identifiant')}}">
    @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Votre Indentifiant unique</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-field d-flex align-items-center">
                <input type="text" id="" style="border: none;" name="idunique" placeholder="1234567890" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
      </div>
    </div>
  </div>
</form>
  

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

<style>/* Importing fonts from Google */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    
    /* Reseting */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        background: #ecf0f3;
    }
    
    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }
    
    .logo {
        width: 80px;
        margin: auto;
    }
    
    .logo img {
        width: 100%;
        height: 38px;
        object-fit: cover;
        border-radius: 80%;
        box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
    }
    
    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }
    
    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
        /* border: 1px solid red; */
    }
    
    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom:0px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }
    
    .wrapper .form-field .fas {
        color: #555;
    }
    
    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }
    
    .wrapper .btn:hover {
        background-color: #039BE5;
    }
    
    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4;
    }
    
    .wrapper a:hover {
        color: #039BE5;
    }
    
    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }</style>
