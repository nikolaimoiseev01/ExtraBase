<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Пользователь')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('address')
                    ->label('Адрес')
                    ->required(),
                TextInput::make('customer')
                    ->label('Заказчик')
                    ->required(),
                TextInput::make('status')
                    ->label('Статус')
                    ->required()
                    ->default('На рассмотрении'),
                Textarea::make('comment')
                    ->label('Комментарий')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->label('Дата')
                    ->required(),
                TextInput::make('area')
                    ->label('Площадь (м²)')
                    ->numeric(),
                TextInput::make('type')
                    ->label('Тип объекта'),
            ]);
    }
}
