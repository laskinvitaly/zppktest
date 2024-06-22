<div class="certification__item">
  <div class="card">
    <img src="{{ asset('/storage/' . $photo) }}" class="card-img-top" alt="Изображение преподавателя">
    <div class="card-body">
      <h5 class="card-title">{{ $name }}</h5>
      <p class="card-text">Стаж: {{ $experience }} <br> {{ $specialization }}</p>
      @if (Auth::check())
        @if (Auth::user()->id === $userid)
        <a href="{{ route('front.certification.update', $userid) }}" class="btn update" style="margin-bottom: 10px">Редактировать</a>
        @endif
      @endif
      <a href="{{ route('front.certification.show', $id) }}" class="btn btn-primary" style="margin-bottom: 10px">Подробнее</a>
    </div>
  </div>
</div>