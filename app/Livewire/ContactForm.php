<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

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

        // Hier kan je later makkelijk uitbreiden
        Mail::raw($this->message, function ($mail) {
            $mail->to('jij@domein.be')
                ->replyTo($this->email, $this->name)
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
