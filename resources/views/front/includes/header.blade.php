<header class="header container">
  <div class="header__wrapper">
    <a class="logo" href="{{ route('frontpage')}}">
      <div class="logo-img"><img src="{{asset('front/img/logo.png')}}" alt="Логотип колледжа"></div>
      <div class="sitename">ГБПОУ РМ "Зубово-Полянский педагогический колледж"<span>Официальный сайт</span></div>
  </a>
  <div class="header_right">
    <div class="social">
      <a class="vk" href="https://vk.com/zppk_official" target="_blank"><img src="{{asset('front/img/vkontakte.svg')}}" alt="Вконтакте"></a>                
    </div>
    <a class="telephone" href="tel:88345821954"><img src="{{asset('front/img/telephone.svg')}}" alt="Телефон"><span>8 (83458) 2-19-54</span></a>
    <a style="text-align: center;" href="mailto:koll.pedag.zp@e-mordovia.ru">koll.pedag.zp@e-mordovia.ru</a>
    <div class="location"><img src="{{asset('front/img/location.svg')}}" alt="Локация"><span>р.п. Зубова Поляна, ул. Новикова-Прибоя, д.16а</span></div>
  </div>
  @include('front.includes.navheader')        
</div>
</header> 
@auth
  

<div class="container" style="background-color: #fff; padding: 20px;">
  Пока пусть здесь кнопка, потом уберем
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-block btn-dark btn-sm mt-3">Выход</button>
</form>
</div>
@endauth