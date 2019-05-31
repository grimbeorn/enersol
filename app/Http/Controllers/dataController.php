<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewData;
use App\Http\Controllers\Input;
use Mail;

class dataController extends Controller
{
    public function send(Request $request)
    {
        $messages=[
           'nombre.required'=>'Es necesario ingresar un nombre',
           'correo.required'=>'Es necesario ingresar un correo',
           'telefono.required'=>'Es necesario ingresar un telefono',
           'mensaje.required'=>'Es necesario ingresar un mensaje'
        ];
        $rules=[
            'nombre'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'mensaje'=>'required'
        ];
        $this->validate($request, $rules, $messages);

        // datos persona
        $nombre = $request->input('nombre');
    	$correo = $request->input('correo');
    	$telefono = $request->input('telefono');
    	$mensaje = $request->input('mensaje');
        //
        $adjuntar = $request->file('adjuntar');
        //

        // $docAdjunto = $request->file('adjuntar');
        $data = ['adjuntar'=>$adjuntar];

    	Mail::to('hernandomtz@gmail.com')->send(new NewData($nombre, $correo, $telefono, $mensaje, $adjuntar, $data));

    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}