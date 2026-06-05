<?php

namespace App\Livewire\Pages\Portal;

use Livewire\Component;

class AboutPage extends Component
{
    public array $stats = [
        [
            'value' => '15+',
            'label' => 'Лет на рынке',
            'icon' => 'bi-building',
        ],
        [
            'value' => '500+',
            'label' => 'Реализованных проектов',
            'icon' => 'bi-arrow-up-right',
        ],
        [
            'value' => '50+',
            'label' => 'Специалистов',
            'icon' => 'bi-people',
        ],
        [
            'value' => '25',
            'label' => 'Международных сертификатов',
            'icon' => 'phosphor-medal',
        ],
    ];

    public array $timeline = [
        ['year' => '2010', 'event' => 'Основание компании Extra Base'],
        ['year' => '2013', 'event' => 'Запуск производства ПВХ-мембран'],
        ['year' => '2016', 'event' => 'Получение ISO 9001:2015'],
        ['year' => '2019', 'event' => 'Расширение дилерской сети'],
        ['year' => '2023', 'event' => 'Более 500 завершенных проектов'],
        ['year' => '2026', 'event' => 'Лидер рынка гидроизоляции'],
    ];

    public function render()
    {
        return view('livewire.pages.portal.about-page');
    }
}
