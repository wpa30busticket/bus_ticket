<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WPA30 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }} " >

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{url('/')}}"><b>WPA</b>30</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('backend.post') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('email') }}</strong>
         </span>
         @endif

          <input id="email" type="email" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif

          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="form-check checkbox icheck">
              <label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
              </label>
            </div>

          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" ></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>
</html>