<?php

namespace App\Livewire\Pages\Account;

use Livewire\Component;
use Livewire\Attributes\Layout;

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

#[Layout('layouts.account')]
class SettingsPage extends Component
{
    public function render()
    {
        return view('livewire.pages.account.settings-page');
    }





}
