<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $prestamo, $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($prestamo, $cliente)
    {
        $this->prestamo=$prestamo;
        $this->cliente=$cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
