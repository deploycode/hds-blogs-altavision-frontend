<!doctype html>
  @include('cabeceras')
  <body>
    @include('analytics')
    <!HEADER#########################################################>
      <header class="container-fluid">
        <div class="row" >
          <div class="col-xs-4">
            <a href="{{URL::to('/')}}"><img src="{!!asset('img/icons/logo-altavision.png')!!}" class="img-responsive img-logo"></a>
          </div>
          <div class="div-img-header">
            <img class="img-responsive" src="http://www.blogs.altavision.com.co/images/{{$app->header_home}}" alt="{{$app->header_home}}"/>
          </div>
        </div>
      </header>
    <!CAJAS##########################################################>
        <div class="container2 div-container">
          <div class="row text-center fila_cajas">
            @foreach ($f_menus as $f_menu)
                <div class="col-md-4 articulo" >
                  <div class="articulo-imagen">
                    <br><br>
                    <h2>{{$f_menu->name}} </h2>
                  </div>
                  <div class="articulo-detalle"><br>
                    @foreach ($f_posts as $f_post)
                      @if ($f_post->menu_id == $f_menu->id)
                        <div class="enlace"><a href="{{ URL::to($f_post->menu->slug, $f_post->slug) }}">{{$f_post->title}} </a><br></div>
                      @endif
                    @endforeach
                  </div>
                </div>
            @endforeach
          </div>
        </div>
    <!CONTENEDOR-DE-FONDO-BLANCO>
      <div class="container-fluid div-fondo-blanco">
        @include('menu')
        <!CARRUSEL########################################################>
          <div class="carousel slide " data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="alert azul" role="alert">
                  <h1 class="titulo_banner">Alta tecnología y profesionales comprometidos con el bienestar de sus ojos</h1>
                </div>
              </div>
              <div class="item">
                <div class="alert azul" role="alert">
                 <h1 class="titulo_banner">En Alta Visión trabajamos para que tus ojos duren sanos toda la vida</h1>
                </div>
              </div>
            </div>
          </div>
        <!END CARRUSEL###################################################>
        <br>
        @include('principal')
      </div>
    <!SmartMenus jS plugin>
      {!!Html::script('js/jquery.min.js')!!}
      {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
      {!!Html::script('plugins/startmenus/js/jquery.smartmenus.js')!!}
      {!!Html::script('plugins/addons/bootstrap/jquery.smartmenus.bootstrap.js')!!}
      {!!Html::script('js/main.js')!!}
    <!FIN DE CIERRE######################################################>
  </body>
</html>
