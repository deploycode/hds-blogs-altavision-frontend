@extends('layouts.main')
@section('section')
  {!!Form::open(['route'=>'mail.store' , 'method'=>'POST'])!!}
    <div class="form-group">
      <p>En Alta Visión estamos comprometidos con el cuidado de sus ojos para toda la vida, por eso lo invitamos a recibir nuestro boletín, en el que recibirá información de interés sobre salud.</p>
    </div>
    <div class="form-group">
      {!!Form::text('name', null,['placeholder'=>'Nombre', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::email('email', null,['placeholder'=>'Email', 'class'=>'form-control', 'required'])!!}
    </div>
    <div class="form-group">
      {!!Form::text('app',$app->slug ,['placeholder'=>'App', 'hidden'])!!}
      {!!Form::text('carnada', null ,['placeholder'=>'App' , 'class'=>'carnada'])!!}
    </div>
    <div class="form-group">
      {!!Form::textarea('msg', "Deseo recibir un boletín periódico sobre noticias de salud ",['placeholder'=>'Email', 'class'=>'form-control', 'rows'=>'1' , 'required'])!!}
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
