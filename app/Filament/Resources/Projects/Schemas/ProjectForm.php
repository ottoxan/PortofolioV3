<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Support\Icons\Heroicon;



class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                Select::make('status')
                    ->options([
                        'Coming soon' => 'Coming soon',
                        'Finished' => 'Finished',
                        'Published' => 'Published',
                    ]),
                TextInput::make('link')
                    ->url()
                    ->suffixIcon(Heroicon::GlobeAlt),

                TagsInput::make('code_lang'),
                MarkdownEditor::make('description')->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->columnSpanFull(),
            ])->columns(2);
    }
}
