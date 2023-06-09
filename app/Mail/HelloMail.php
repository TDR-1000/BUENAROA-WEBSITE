<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $name, public $subject)
    {
        //
    }

    public function envelope(){
        return new Envelope(
            from: new Address('buenaroa.connect@gmail.com' , 'Buenaroa'),
            subject: $this->subject, 
        );
    }

    public function content(){
        return new Content(
            view: 'mail.hello',
            with: ['name' => $this->name]
        );
    }

}
