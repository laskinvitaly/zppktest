@extends('front.layouts.main')

@section('content')

<h1>Вход в личный кабинет</h1>
<div class="">
    <p>Для просмотра информации вам необходимо войти.</p>
    <p>Если у Вас нет доступа подайте заявку на регистрацию. После рассмотрения заявки с вами свяжется администратор и вы сможете продолжить работу на сайте</p>
</div>

<div class="">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="">
            <label for="phone" class="">Введите номер телефона:</label>

            <div class="">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autofocus>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            <label for="password" class="">Пароль</label>

            <div class="">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            <div class="">
                <div class="">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="" for="remember">
                        Запомнить
                    </label>
                </div>
            </div>
        </div>

        <div class="">
            <div class="">
                <button type="submit" class="">
                    Войти
                </button>               
            </div>
        </div>
        <a href="{{ route('register') }}">Зарегистрироваться</a>
    </form>
</div>

@endsection
