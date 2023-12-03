@include('front.includes.head')
<body>
  <div id="page">
    <div id="topline">
      <a href="#menu"><b></b><b></b><b></b></a>      
    </div>
    @include('front.includes.header')
   
    <main class="main">
      <div class="main__wrap container">
        @yield('content')
      </div>
    </main>
  </div> 
  @include('front.includes.footer')
  @include('front.includes.scripts')
  </body>
</html>