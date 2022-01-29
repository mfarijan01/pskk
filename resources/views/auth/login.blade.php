<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('masuk/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('masuk/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('masuk/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('masuk/css/style.css')}}">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <img class="bg" style="background-image:" src="{{asset('admin/assets/images/4.png')}}" alt="">
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Login Danou Toba Sumatera<strong></strong></h3>
              </div>
	            	<form class="login-form" action="{{route('login')}}" method="POST">
                @csrf      
                <div class="form-group first">
                  <label for="email">email</label>
                  <input type="text" class="form-control" placeholder="Masukan email@gmail.com" name="email">
                </div>

                @error('email')
                    <div class="invalid-feedback" style="display: block; color: red;">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Masukan Password" name="password">
</div>
                @error('password')
                    <div class="invalid-feedback" style="display: block; color: red;">
                        {{ $message }}
                    </div>
                @enderror

                <div class="form-group last mb-3">
                <select name="level" class="form-control">
                <option selected>--Pilih--</option>
                <option value="Admin">Admin</option>
                 <option value="User">Pengguna</option>
                 </select>
              </div>
                @error('level')
                    <div class="invalid-feedback" style="display: block; color: red;">
                        {{ $message }}
                    </div>
                @enderror

                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="/" class="forgot-pass">Kembali</a></span> 
                </div>

                <input type="submit" value="Masuk" class="btn btn-block py-2 btn-primary">

               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('masuk/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('masuk/js/popper.min.js')}}"></script>
    <script src="{{asset('masuk/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('masuk/js/main.js')}}"></script>
  </body>
</html>