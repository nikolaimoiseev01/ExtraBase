<?php

namespace App\Livewire\Components;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactForm extends Component
{

    use WithFileUploads;

    #[Validate('required|string|min:2|max:255')]
    public string $name = '';

    #[Validate('required|max:255')]
    public string $companyName = '';

    #[Validate('required|string|min:8|max:30')]
    public string $phone = '';

    public array $files = [];

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        $contact = Contact::create([
            'company_name' => $this->companyName,
            'phone' => $this->phone,
            'name' => $this->name
        ]);

        foreach ($this->files as $file) {
            $contact
                ->addMedia($file->getRealPath())
                ->usingFileName($file->getClientOriginalName())
                ->toMediaCollection('files');
        }

        $this->reset(['name', 'companyName', 'phone']);
        $this->sent = true;

    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
