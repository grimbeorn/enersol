<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\nombre;
use App\correo;
use App\telefono;
use App\mensaje;

class NewData extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public $nombre;
    public $correo;
    public $telefono;
    public $mensaje;  
    public $adjuntar;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $correo, $telefono, $mensaje, $adjuntar, $data=[])
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->mensaje = $mensaje;
        $this->adjuntar = $adjuntar;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newData')->subject('Nueva Solicitud de Información General')
                                                  ->attach($this->data['adjuntar']->getRealPath(),
                                                    [
                                                        'as'=>$this->data['adjuntar']->getClientOriginalName(),
                                                        'mime'=>$this->data['adjuntar']->getClientMimeType(),
                                                    ]);
    }
}
