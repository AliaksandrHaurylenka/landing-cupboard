<?php

  namespace App\Mail;

  use Illuminate\Bus\Queueable;
  use Illuminate\Mail\Mailable;
  use Illuminate\Queue\SerializesModels;
  use Illuminate\Contracts\Queue\ShouldQueue;

  class MessageMail extends Mailable
  {
    use Queueable, SerializesModels;


    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->markdown('emails.feedback')
        ->from($this->data['email'], $this->data['name'])
        ->to(env('MAIL_ADMIN'))
        ->bcc(env('MAIL_USER_2'))
        ->subject('Сообщение от пользователя');
    }
  }
