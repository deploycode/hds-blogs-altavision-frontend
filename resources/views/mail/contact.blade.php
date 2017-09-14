<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        font-family: "Calibri", "Helvetica";
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div class="form-group">
      @if (isset($name))
        <div class="">
          <label for="">Nombre:</label>
          {!!$name!!}
        </div>
      @endif
      @if (isset($email))
        <div class="">
          <label for="">Email</label>
          {!!$email!!}
        </div>
      @endif
      @if (isset($phone))
        <div class="">
          <label for="">Teléfono</label>
          {!!$phone!!}
        </div>
      @endif
      @if (isset($theme))
        <div class="">
          <label for="">Tema:</label>
          {!!$theme!!}
        </div>
      @endif
      @if (isset($msg))
        <div class="">
          <label for="">Mensaje</label>
          {!!$msg!!}
        </div>
      @endif
    </div>
  </body>
</html>
