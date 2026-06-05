<?php

namespace App\Livewire\Pages\Account;

use App\Models\Application;
use Illuminate\Support\Collection;
use Livewire\Component;

class DashboardPage extends Component
{
    public string $address = '';
    public string $customer = '';
    public string $comment = '';
    public string $date = '';
    public string $area = '';
    public string $type = '';

    public function mount(): void
    {
        $this->date = now()->toDateString();
    }

    public function addOrder(): void
    {
        $this->validate([
            'address' => ['required', 'string', 'max:255'],
            'customer' => ['required', 'string', 'max:255'],
            'comment' => ['nullable', 'string', 'max:1000'],
            'date' => ['required', 'date'],
            'area' => ['nullable', 'numeric', 'min:0'],
            'type' => ['nullable', 'string', 'max:255'],
        ]);

        Application::create([
            'user_id' => auth()->id(),
            'address' => $this->address,
            'customer' => $this->customer,
            'comment' => $this->comment,
            'date' => $this->date,
            'area' => $this->area,
            'type' => $this->type,
            'status' => 'На рассмотрении',
        ]);

        $this->reset(['address', 'customer', 'comment', 'area', 'type']);
        $this->date = now()->toDateString();

        $this->dispatch('order-added');
    }

    public function deleteOrder(int $id): void
    {
        Application::query()
            ->where('user_id', auth()->id())
            ->where('id', $id)
            ->delete();
    }

    public function getApplicationsProperty(): Collection
    {
        return Application::query()
            ->where('user_id', auth()->id())
            ->latest()
            ->get();
    }

    public function getStatusClass(string $status): string
    {
        return match ($status) {
            'Закреплен' => 'bg-green-100 text-green-800',
            'На рассмотрении' => 'bg-yellow-100 text-yellow-800',
            'Отказано' => 'bg-red-100 text-red-800',
            default => 'bg-gray-100 text-gray-800',
        };
    }

    public function render()
    {
        return view('livewire.pages.account.dashboard-page')->layout('layouts.account');
    }
}
