@extends('front.layouts.main')

@section('content')

<h1>Заявка на регистрацию</h1>
<div class="">
    <p>Для просмотра некоторых страниц сайта вы должны быть зарегистрированы. Подайте заявку на регистрацию. После рассмотрения заявки с вами свяжется администратор и вы сможете продолжить работу на сайте</p>
</div>
<div class="">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="">
            <label for="name" class="">Введите фио</label>

            <div class="">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

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

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Подать заявку
                </button>
            </div>
        </div>
    </form>
</div>



@endsection
