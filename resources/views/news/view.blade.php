@extends('layouts.new')
@section('section')
  <div class="form-group text-right">
    <a href="http://www.blogs.altavision.com.co/noticias/pdfs/{{$new->pdf}}" class="btn btn-primary" target="_blank">Descargar <i class="glyphicon glyphicon-download-alt"></i></a>
  </div>
  <h1>{!!$new->title!!}</h1>
  <p>{!!$new->post!!}</p>
@endsection
