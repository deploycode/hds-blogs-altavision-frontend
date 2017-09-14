<!doctype html>
  @include('cabeceras')
  <body>
    @include('analytics')
    <!HEADER#########################################################>
    <header class="container-fluid">
      <div class="container container-header">
          <div class="row" >
            <div class="col-xs-12">
              <a href="{!!asset('/')!!}"><img class="img-responsive internal-banner" src="http://www.blogs.altavision.com.co/images/{{$app->header_internal}}" alt="{{$app->header_internal}}" alt="logo"/></a>
            </div>
          </div>
        </div>
    </header>
    <!CONTENEDOR-DE-FONDO-BLANCO>
      <div class="container-fluid div-fondo-blanco">
        @include('menu')
        <div class="container container-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="{{URL::to('/')}}">Incio</a></li>
            <li class="active">Noticias</li>
            <li class="active">{{$new->title}}</li>
          </ol>
        </div>
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
