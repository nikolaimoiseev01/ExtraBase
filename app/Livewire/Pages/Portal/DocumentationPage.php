<?php

namespace App\Livewire\Pages\Portal;

use Livewire\Component;

class DocumentationPage extends Component
{
    public array $documents = [
        [
            'title' => 'ГОСТ 32626-2014',
            'description' => 'Полимерные мембраны для гидроизоляции. Технические условия',
            'size' => '2.3 МБ',
            'icon' => 'file',
        ],
        [
            'title' => 'ISO 9001:2015',
            'description' => 'Сертификат системы менеджмента качества',
            'size' => '1.8 МБ',
            'icon' => 'award',
        ],
        [
            'title' => 'Сертификат соответствия',
            'description' => 'Подтверждение соответствия требованиям ТР ТС',
            'size' => '0.9 МБ',
            'icon' => 'shield',
        ],
        [
            'title' => 'Технический паспорт ООО "СВ ТИМ" 3.2',
            'description' => 'Полное техническое описание ПВХ-мембраны',
            'size' => '3.2 МБ',
            'icon' => 'file',
        ],
        [
            'title' => 'Инструкция по монтажу',
            'description' => 'Подробное руководство по укладке гидроизоляции',
            'size' => '5.1 МБ',
            'icon' => 'file',
        ],
        [
            'title' => 'Протокол испытаний',
            'description' => 'Результаты лабораторных испытаний продукции',
            'size' => '2.7 МБ',
            'icon' => 'file',
        ],
    ];

    public function render()
    {
        return view('livewire.pages.portal.documentation-page');
    }
}
