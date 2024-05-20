<div class="certification__item">
      <div class="card">
        <img src="{{ asset('/storage/' . $photo) }}" class="card-img-top" alt="image">
        <div class="card-body">
          <h5 class="card-title">{{ $name }}</h5>
          <p class="card-text">Стаж: {{ $experience }} <br> {{ $specialization }}</p>
          <a href="#" class="btn btn-primary" style="margin-bottom: 10px">Подробнее</a>
        </div>
      </div>
</div>