<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use App\Mail\NewContact;
use Mail;

class contactController extends Controller
{
    
    public function send(Request $request)
    {
        $messages=[
            'nombre.required'=>'Es necesario ingresar un nombre',
            'correo.required'=>'Es necesario ingresar un correo',
            'telefono.required'=>'Es necesario ingresar un teléfono',
            'mensaje.required'=>'Es necesario ingresar un mensaje'
        ];
        $rules=[
            'nombre'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'mensaje'=>'required'
        ];

        $this->validate($request, $rules, $messages);

        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $telefono = $request->input('telefono');
        $mensaje = $request->input('mensaje');

        Mail::to('hernandomtz@gmail.com')->send(new NewContact($nombre, $correo, $telefono, $mensaje));

        $notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
        // return back()->with(compact('notification'));
    }

}