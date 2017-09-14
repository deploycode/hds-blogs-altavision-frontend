  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='shortcut icon' type='image/x-icon' href='{!!asset('img/icons/favicon.ico')!!}'/>

  <title>
    @if (isset($post))
      {{$post->title}}
    @else
      Hablemos de {{$app->disease}}
    @endif

  </title>
  <meta name="description" content="{{$app->description}}">

  <!HOJAS-DE-ESTILOS>
    {!!Html::style('plugins/addons/bootstrap/jquery.smartmenus.bootstrap.css')!!}
    {!!Html::style('plugins/font-awesome/font-awesome.min.css')!!}
    {!!Html::style('plugins/bootstrap/css/bootstrap-social.css')!!}
    {!!Html::style('plugins/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('css/main.css')!!}
    <link rel='stylesheet' href='{!! asset('css/desktop-styles.css')!!}' media='(max-width: 1200px)'>
    <link rel='stylesheet' href='{!! asset('css/laptop-styles.css')!!}' media='(max-width: 1024px)'>
    <link rel='stylesheet' href='{!! asset('css/tablet-styles.css')!!}' media='(max-width: 999px)'>
    <link rel='stylesheet' href='{!! asset('css/mobile-styles.css')!!}' media='(max-width: 768px)'>
    <link rel='stylesheet' href='{!! asset('css/lg-styles.css')!!}' media='(min-width: 1400px)'>
    <style media="screen">
      .tema{
        background-color: {{$app->theme}}!important;
      }
      .articulo:nth-child(1){
          background-color: {{$app->theme}}
      }
    </style>
  <!FIN-HOJAS-DE-ESTILOS>
</head>
