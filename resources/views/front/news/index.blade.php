@extends('front.layouts.main')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css" media="all">
@section('content')
  <h1>Новости</h1>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right"> 
      <li class="breadcrumb-item">Новости</li>
    </ol>
  </div>
  <div class="row row-cols-1 row-cols-md-4 g-4">

    @foreach ($news as $new)
    <div class="news col">
      <div class="card h-100" style="width: auto;">
        <img src="{{ $url = Storage::url($new->image); }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title fs-4">
            {{ mb_substr( $new->title, 0, 24 ); }}@if (mb_strlen($new->title) > 24)...@endif
          </h5>
          <p class="card-text text-start">{{ mb_substr( $new->readmore, 0, 100 ); }}@if (mb_strlen($new->readmore) > 100)...@endif</p>
        </div>
        <a href="{{ route('front.news.new', $new->id) }}" class="card-link text-end px-2">Читать далее...</a>
        <div class="card-footer">
          <small class="text-muted">{{ $new->date }}</small>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
  <div class="news__pagination mt-5">
    {{ $news->links('vendor.pagination.bootstrap-5') }}
  </div>
@endsection 