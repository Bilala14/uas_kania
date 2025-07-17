<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <link rel="stylesheet" href="{{ asset('/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}"/>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>

              <!-- Pesan error jika login gagal -->
              @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control p_input" required autofocus>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input" required>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="remember"> Remember me
                    </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
              </form>

              <div class="d-flex mt-3">
                <button class="btn btn-facebook mr-2 col">
                  <i class="mdi mdi-facebook"></i> Facebook
                </button>
                <button class="btn btn-google col">
                  <i class="mdi mdi-google-plus"></i> Google plus
                </button>
              </div>
              <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/assets/js/misc.js') }}"></script>
  <script src="{{ asset('/assets/js/settings.js') }}"></script>
  <script src="{{ asset('/assets/js/todolist.js') }}"></script>
</body>
</html>
