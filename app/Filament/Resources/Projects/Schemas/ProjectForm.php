<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('summary'),
                Textarea::make('description')
                    ->columnSpanFull(),
                DatePicker::make('started_at'),
                DatePicker::make('finished_at'),
                TextInput::make('url')
                    ->url(),
                Toggle::make('featured')
                    ->required(),
                CheckboxList::make('skill_id')
                    ->label('Skills')
                    ->required()
                    ->relationship('skills', 'name'),
            ]);
    }
}
