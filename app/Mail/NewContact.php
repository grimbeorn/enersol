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

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $telefono;
    public $mensaje;  

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $correo, $telefono, $mensaje)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NewContact')->subject('Nuevo Contacto');
    }
}
