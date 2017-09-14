<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class MailController extends Controller
{
    public function store(Request $request)
    {
      if ($request->carnada == "") {
          $request->app;
          Mail::send('mail.contact' , $request->all(), function($msj) use($request){
            $msj->subject('Mensaje desde www.'.$request->app.".co");
            if (isset($request->contacto)) {
              $msj->to('educacion@altavision.com.co');
            }else
            {
              $msj->to('promocionyprevencion@hablemosdesalud.com.co');
            }
          });
          return redirect('/');
        }
    }
}
