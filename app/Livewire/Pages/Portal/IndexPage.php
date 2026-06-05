<?php

namespace App\Livewire\Pages\Portal;

use Livewire\Component;

class IndexPage extends Component
{
    public array $advantages = [
        ['title' => 'Срок службы более 25 лет', 'description' => 'Долговечность и надежность'],
        ['title' => '100% герметичность', 'description' => 'Полная защита от влаги'],
        ['title' => 'Устойчивость к химии', 'description' => 'Химическая стойкость'],
        ['title' => 'Монтаж зимой', 'description' => 'Работы при -20°C'],
        ['title' => 'Защита от грунтовых вод', 'description' => 'Гидростатическое давление'],
        ['title' => 'Защита от радона', 'description' => 'Радоновая защита'],
        ['title' => 'Ремонтопригодность', 'description' => 'Простой ремонт'],
        ['title' => 'Высокая прочность', 'description' => 'Механическая прочность'],
    ];

    public array $applications = [
        ['title' => 'Фундаменты', 'description' => 'Надежная защита фундаментов зданий и сооружений'],
        ['title' => 'Тоннели', 'description' => 'Гидроизоляция транспортных и инженерных тоннелей'],
        ['title' => 'Парковки', 'description' => 'Защита подземных паркингов от грунтовых вод'],
        ['title' => 'Бассейны', 'description' => 'Герметичная изоляция бассейнов и резервуаров'],
        ['title' => 'Резервуары', 'description' => 'Промышленные резервуары и хранилища'],
        ['title' => 'Зеленые кровли', 'description' => 'Инверсионные и эксплуатируемые кровли'],
    ];

    public array $projects = [
        ['title' => 'ЖК "Северный"', 'location' => 'Москва', 'type' => 'Фундамент', 'area' => '12 000 м²'],
        ['title' => 'Метро "Технопарк"', 'location' => 'Москва', 'type' => 'Тоннель', 'area' => '8 500 м²'],
        ['title' => 'ТРЦ "Атриум"', 'location' => 'Санкт-Петербург', 'type' => 'Парковка', 'area' => '15 000 м²'],
    ];

    public function render()
    {
        return view('livewire.pages.portal.index-page')->layout('layouts.portal');
    }
}
