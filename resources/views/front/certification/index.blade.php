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
    <x-card :id="$c['id']" :userid="$c['user_id']" :name="$c['name']" :photo="$c['photo_url']" :specialization="$c['specialization']" :experience="$c['experience']" />
    @endforeach
  </div>
@endsection