@extends('front.layouts.main')
@section('content')
  <h1>Коллектив преподавателей ЗППК</h1>

  @auth
    @if(auth()->user()->role_id == 3 && !$certificationExist)
      <a href="{{ route('front.certification.create') }}" class="btn">Добавить аттестацию</a>
    @endif
  @endauth

  <div class="cards__list">
    @foreach ($certifications as $c)
    <x-card :name="$c['name']" :photo="$c['photo_url']" :specialization="$c['specialization']" :experience="$c['experience']" />
    @endforeach
  </div>
  
  <p>Карточка с преподавателем, стилизуете сами</p>
  <p><strong>Пример:</strong></p>
  <p>Фото</p>
  <p>Ласкин Виталий Олегович</p>
  <p>Преподаватель специальных дисциплин</p>
  <p><em>Карточка это ссылка на портфолио преподавателя</em></p>
  <p><em>Сначала сделайте, чтобы выводились преподаватели, портфолио скажу, как оформлять после того, как эта страница будет работать</em></p>
  <p class="testlk">Карточки преподавателей сделайте в виде компонента, т.к. эти эти карточки будут выводится и в других местах</p>
@endsection