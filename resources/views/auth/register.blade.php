@extends('front.layouts.main')

@section('content')

<h1>Заявка на регистрацию</h1>
<div class="">
    <p>Для просмотра некоторых страниц сайта вы должны быть зарегистрированы. Подайте заявку на регистрацию. После рассмотрения заявки с вами свяжется администратор и вы сможете продолжить работу на сайте</p>
</div>
<div class="">
    @if (session('error'))
    <div class="alert alert-danger">Ребята, вы что-то не то вводите.</div>
  @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="">
            <label for="fio" class="">Введите фио</label>

            <div class="">
                <input type="text" class="form-control @error('fio') is-invalid @enderror" name="fio" value="{{ old('fio') }}" required autofocus>

                @error('fio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="">
            <label for="phone" class="">Введите номер телефона:</label>

            <div class="">
                <input id="phone" type="text" class="form-control input-phone @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="+7(___)___-__-__" required autofocus>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>        

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn-phone btn-primary">
                    Подать заявку
                </button>
            </div>
        </div>
    </form>
</div>



@endsection
