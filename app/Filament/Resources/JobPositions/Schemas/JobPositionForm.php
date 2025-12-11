<?php

namespace App\Filament\Resources\JobPositions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobPositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Toggle::make('current')
                    ->required(),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                TextInput::make('location'),
                Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
            ]);
    }
}
