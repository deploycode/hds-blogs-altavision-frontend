@extends('layouts.main')
@section('section')
  {!!Form::open(['route'=>'mail.store' , 'method'=>'POST'])!!}
    <div class="form-group">
      <p>Conocer es el primer paso para prevenir, por eso lo invitamos a participar en nuestras charlas informativas sobre salud diligenciando el siguiente formulario:</p>
    </div>
    <div class="form-group">
      {!!Form::text('name', null,['placeholder'=>'Nombre', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::email('email', null,['placeholder'=>'Email', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('theme', null,['placeholder'=>'Tema de ínteres', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('app',$app->slug ,['placeholder'=>'App', 'hidden'])!!}
      {!!Form::text('carnada', null ,['placeholder'=>'App' , 'class'=>'carnada'])!!}
    </div>
    <div class="form-group">
      {!!Form::textarea('msg', "Deseo participar de charlas informativas de salud",['placeholder'=>'Email', 'class'=>'form-control', 'rows'=>'1' , 'required'])!!}
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
