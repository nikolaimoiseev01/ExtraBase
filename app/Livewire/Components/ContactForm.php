<?php

namespace App\Livewire\Components;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|min:2|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|min:8|max:30')]
    public string $phone = '';

    #[Validate('required|string|min:10|max:2000')]
    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        Contact::create([
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'name' => $this->name
        ]);

        $this->reset(['name', 'email', 'phone', 'message']);
        $this->sent = true;

    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
