@extends('front.layouts.main')
@section('content')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/razrab2.css')}}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
  <div class="content-wrapper" style="margin-left: 0; background-color: unset;">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="justify-content: center;">
          <h1 class="m-0">Портфолио</h1>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="guideline">

          <div class="row">
            <div class="col-lg guideline__image">
              <img src="{{ $url = Storage::url($certification['photo_url']); }}" alt="">
            </div>
            <div class="col guideline__text">{{ $certification->content }}</div>
          </div>

          <div class="row">
            <div class="col-lg">
              <h5 class="guideline__subtitle">{{ $user->family }} {{ $user->name }} {{ $user->patronymic }}</h5>
              <div class="guideline__der">Специализация: {{ $certification->specialization }}</div>
              <div class="guideline__der">Стаж: {{ $certification->experience }}</div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg">
              <h5 class="guideline__subtitle my-3 text-center">Грамоты, дипломы и сертификаты</h5>
              <div class="col-lg">
                @foreach ($portfolio as $port)
                  <img style="display: flex; flex-direction: column; width: 85%; margin: 0 auto 30px auto;" src="{{ $url = Storage::url($port['path']); }}" alt="">
                @endforeach
              </div>
            </div>
          </div>

        </div>       
      </div>
    </section>

  </div>
  @endsection