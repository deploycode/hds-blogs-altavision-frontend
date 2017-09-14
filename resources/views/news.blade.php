<!ESTILOS>
  <style media="screen">
  .div_links{
    display: flex;
    flex-flow: wrap;
  }
  .miniatura{
    /*height: 150px;*/
    padding-left: 10px;
    padding-right: 10px;
  }
  .div_links>.miniatura{
    margin-bottom: 15px;
  }
  .jumbotronn{
    max-height: inherit;
    overflow: inherit;
  }
  .fuente-blanca{
    color: #3b5998;
    text-decoration: underline;
  }
  .img-mini{
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
  }
  .mi-titulo{
    margin-bottom: 1.5em;
    margin-top: 0px;
    color:#5fb5e6;
    font-weight: bold;
  }
  .margen15{
    margin-top: 1.5em;
  }
  .mi-subtitulo{
    font-size:11px;
    text-align:left;
    margin-top:0.5em;
  }
  .azul-titulo{
    color:#5fb5e6;
  }
  .mi-noticia {
    position: relative;
    overflow: hidden;
    height: 170px;
  }
  .mi-noticia:hover .noticia-imagen {
    margin-top: -100px;
  }
  .mi-noticia a{
    text-decoration: none;
    color: white;
  }
  .enlace{
      margin-top: 0.5em;
  }
  .noticia-imagen, .noticia-descripcion {
    padding: 10px;
    height: 100%;
  }
  .noticia-imagen {
    margin:0;
    padding: 0;

    -webkit-transition-property: margin-top;
    -webkit-transition-duration: 0.1s;

    -moz-transition-property: margin-top;
    -moz-transition-duration: 0.1s;

    -o-transition-property: margin-top;
    -o-transition-duration: 0.1s;

    -ms-transition-property: margin-top;
    -ms-transition-duration: 0.1s;

  }
  .noticia-imagen h1 {
    font-size: 22px;
    font-weight: bold;
    color: #FFFFFF;
    font-weight: normal;
    text-align: center;
  }
  .noticia-descripcion {

    color: black;
    font-family:"Calibri"!important;
    white-space:0px
  }
  .noticia-descripcion p{
      font-size: 11px!important;
      line-height: 11px;
  }
  @media (max-width: 768px)
  {
    .mi-noticia {
      height: 480px;
    }
    .mi-noticia:hover .noticia-imagen {
      margin-top: -480px;
    }
    .noticia-imagen h1 {
      font-size: 1.5em!important;
    }
    .noticia-descripcion p{
      font-size: 2.5em!important;
      line-height: 1em;
    }
  }
  @media (max-width: 600px)
  {
    .mi-noticia {
      height: 400px;
    }
    .mi-noticia:hover .noticia-imagen {
      margin-top: -400px;
    }
    .noticia-imagen h1 {
      font-size: 1.5em!important;
    }
    .noticia-descripcion p{
      font-size: 2em!important;
      line-height: 1em;
    }
  }
  @media (max-width: 500px)
  {
    .mi-noticia {
      height: 330px;
    }
    .mi-noticia:hover .noticia-imagen {
      margin-top: -330px;
    }
  }
  @media (max-width: 400px)
  {
    .mi-noticia {
      height: 260px;
    }
    .mi-noticia:hover .noticia-imagen {
      margin-top: -260px;
    }
    .noticia-imagen h1 {
      font-size: 1.3em!important;
    }
    .noticia-descripcion p{
      font-size: 1.4em!important;
      line-height: 1em;
    }
  }
  </style>
<!FIN-DE-LOS-ESTILOS>

<!BLOQUE NOTICIAS>
  <div class="row" style="margin-top:-64px">
    <div class="col-xs-12" style="margin-top:13px;">
      <h1 class="mi-titulo">Noticias sobre {{$app->disease}}</h1>
    </div>
    @foreach ($news as $new)
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 miniatura">
        <div class="mi-noticia">
          <div class="noticia-imagen">
            <img class="img-mini"src="http://www.blogs.altavision.com.co/noticias/miniaturas/{{$new->miniature}}">
          </div>
          <a href="{{URL::to($new->slug)}}">
            <div class="noticia-descripcion tema">
              <p>{{$new->description}}
                <br><label class="fuente-blanca"> Leer más</label></p>
              </div>
            </a>
          </div>
          <h3 class="caption mi-subtitulo azul-titulo">
            {{$new->title}}
          </h3>
        </div>
    @endforeach
    <!################>
  </div>
  <div class="row">
    <div class="col-xs-12" style="margin-top:13px;">
      <h1 class="mi-titulo">También debe saber sobre</h1>
    </div>
  </div>
  <div class="row div_links">
    @foreach ($links as $link)
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 miniatura">
        <div class="mi-noticia">
          <div class="noticia-imagen">
            <img class="img-mini"src="{{$link->miniature}}">
          </div>
          <a target="_blank" href="{{URL::to($link->post)}}">
            <div class="noticia-descripcion tema">
              <p>{{$link->description}}
                <br><label class="fuente-blanca"> Leer más</label></p>
              </div>
            </a>
          </div>
          <h3 class="caption mi-subtitulo">
            {{$link->title}}
          </h3>
        </div>
    @endforeach
  </div>
