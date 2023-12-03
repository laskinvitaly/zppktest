<footer>
  <div class="footer__wrap container">
    @include('front.includes.navfooter')        		
    @include('front.includes.navspets')
    <div class="social">
      <h4 class="social__title">Мы в соцсетях:</h4>
        <ul class="social__list">
          <li><a href="https://vk.com/zppk_official" target="_blank">
            <img class="img_vk" src="{{asset('front/img/vkontakte.svg')}}" alt="ВК" id="vk">
            </a>
          </li>
        </ul>
        <div class="qr">
            <p style="color: #fff">QR-код на страницу ГБПОУ РМ "Зубово-Полянский педагогический колледж" официального сайта о государственных учреждениях</p>	
            <a href="http://qrcoder.ru" target="_blank"><img src="{{asset('front/img/qr.png')}}" width="200px" title="QR код"></a>
        </div>
      </div>
    </div>
</footer>