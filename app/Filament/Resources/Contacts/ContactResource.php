<?php

namespace App\Filament\Resources\Contacts;

use App\Filament\Resources\Contacts\Pages\ManageContacts;
use App\Models\Contact;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Filament\Resources\Contacts\Pages\ViewContact;
use Filament\Actions\ViewAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static ?string $navigationLabel = 'Обратная связь';

    public static ?string $modelLabel = 'Обратная связь';

    public static ?string $pluralModelLabel = 'Обратная связь';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Имя')
                    ->required(),
                TextInput::make('email')->label('Email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')->label('Телефон')
                    ->tel()
                    ->required(),
                Textarea::make('message')->label('Сообщение')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Имя')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Телефон')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Время создания')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
//                EditAction::make(),
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Заявка')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Имя'),

                        TextEntry::make('company_name')
                            ->label('Компания'),

                        TextEntry::make('phone')
                            ->label('Телефон'),

                        TextEntry::make('created_at')
                            ->label('Создано')
                            ->dateTime(),
                    ])
                    ->columns(2),

                Section::make('Файлы')
                    ->schema([
                        TextEntry::make('media_files')
                            ->label('')
                            ->state(function (Contact $record): string {
                                $files = $record->getMedia('files');

                                if ($files->isEmpty()) {
                                    return 'Файлы не прикреплены';
                                }

                                return $files
                                    ->map(fn ($media) => sprintf(
                                        '<a href="%s" target="_blank" class="text-primary-600 underline">%s</a>',
                                        $media->getUrl(),
                                        $media->file_name,
                                    ))
                                    ->implode('<br>');
                            })
                            ->html(),
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageContacts::route('/'),
        ];
    }
}
