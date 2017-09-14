@extends('layouts.main')
@section('section')
  <style>
  .jumbotronn{
    max-height: inherit!important;
  }
  </style>
  {!!Form::open(['route'=>'mail.store' , 'method'=>'POST'])!!}
    <div class="form-group">
      <p>Trabajamos con amor y profesionalismo por su salud visual, por eso si tiene alguna pregunta sobre la salud de sus ojos, puede comunicarse al 6164585 opción 5, escribirnos al correo educacion@altavision.com.co o enviarnos sus datos para ponernos en contacto:</p>
    </div>
    <div class="form-group">
      {!!Form::text('name', null,['placeholder'=>'Nombre', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::email('email', null,['placeholder'=>'Email', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('phone', null,['placeholder'=>'Celular', 'class'=>'form-control'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('app',$app->slug ,['placeholder'=>'App', 'hidden'])!!}
      {!!Form::text('carnada', null ,['placeholder'=>'App' , 'class'=>'carnada'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('contacto', 'contacto',['placeholder'=>'App', 'hidden'])!!}
    </div>
    <div class="form-group">
      {!!Form::textarea('msg', null,['placeholder'=>'Escriba aquí su mensaje', 'class'=>'form-control','rows'=>'3' ,'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::checkbox('accept', 'Acepto' ,['class'=>'form-control', 'required'])!!}
      <a href="{{URL::to('terminos')}}">Acepto ser contactado con los datos proporcionados</a>
    </div>
    <div class="form-group">
      {!!Form::button('Enviar' ,['type'=>'submit','class'=>'form-control btn btn-success'])!!}
    </div>
  {!!Form::close()!!}
@endsection
