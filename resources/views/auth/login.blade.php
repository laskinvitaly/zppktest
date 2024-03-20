@include('includes.head')
<body class="login-page" style="min-height: 100vh;">
    <div class="login-box">
        <div class="login-logo">Страница входа</div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Введите данные для входа в административную панель</p>
      
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input id="login" placeholder="Логин" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-12">
                    @error('login')
                    <span style="color: #dc3545;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @error('password')
                    <span style="color: #dc3545;">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror                    
                </div>
              </div>
              <div class="row">                
                <!-- /.col -->
                <div class="col-4 offset-8">
                  <button type="submit" class="btn btn-primary btn-block">Вход</button>
                </div>
                <!-- /.col -->
              </div>
            </form>   
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>

@include('includes.scripts')
