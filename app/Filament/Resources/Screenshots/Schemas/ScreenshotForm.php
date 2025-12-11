<?php

namespace App\Filament\Resources\Screenshots\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ScreenshotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('project_id')
                    ->relationship('project', 'title')
                    ->required(),
                FileUpload::make('image')
                    ->directory('screenshots')
                    ->image()
                    ->required(),
            ]);
    }
}
