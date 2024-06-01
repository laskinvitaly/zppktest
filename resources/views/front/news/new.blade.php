@extends('front.layouts.main')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css" media="all">
@section('content')
  <h1>{{ $new->title }}</h1>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right"> 
      <li class="breadcrumb-item"><a href="{{ route('front.news.index')}}">Новости</a></li>
      <li class="breadcrumb-item active">Страница {{ $new->id }}</li>
    </ol>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">{{ $new->date }}</li>
    </ol>
  </div>
  <div class="new_view">
    <img src="{{ $url = Storage::url($new->image); }}" alt="">
    <div class="new__content">
      {{ $new->content }}
    </div>
  </div>
@endsection 