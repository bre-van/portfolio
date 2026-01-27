<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $message = '';

    public bool $sent = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        $messageContent = $this->message;
        $fromEmail = $this->email;
        $fromName = $this->name;

        Mail::raw($messageContent, function ($mail) use ($fromEmail, $fromName) {
            $mail->to(config('contact.recipient'))
                ->replyTo($fromEmail, $fromName)
                ->subject('Nieuw contact via portfolio');
        });

        $this->reset(['name', 'email', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
