<?php

namespace App\Livewire\Pages\Portal;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PartnersPage extends Component
{
    public LoginForm $form;
    public array $accountBenefits = [
        [
            'icon' => 'lucide-chart-column',
            'title' => 'Управление объектами',
            'description' => 'Создавайте и отслеживайте статус ваших объектов в реальном времени',
        ],
        [
            'icon' => 'lucide-file-text',
            'title' => 'Документооборот',
            'description' => 'Быстрый доступ к техническим документам и сертификатам',
        ],
        [
            'icon' => 'lucide-package',
            'title' => 'История заказов',
            'description' => 'Просмотр всех предыдущих заказов и коммерческих предложений',
        ],
        [
            'icon' => 'lucide-users',
            'title' => 'Персональный менеджер',
            'description' => 'Прямая связь с вашим менеджером через личный кабинет',
        ],
        [
            'icon' => 'lucide-award',
            'title' => 'Эксклюзивные условия',
            'description' => 'Специальные цены и условия для партнеров',
        ],
        [
            'icon' => 'lucide-settings',
            'title' => 'Гибкие настройки',
            'description' => 'Настройка профиля компании и предпочтений',
        ],
    ];

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('account.dashboard', absolute: false), navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.portal.partners-page');
    }
}
