<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Slider;
use Filament\Forms\Components\Slider\Enums\PipsMode;

class SkillsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('skill'),
            Select::make('category')
                ->options([
                    'language' => 'Language',
                    'framework' => 'Framework',
                    'tool' => 'Tool',
                ]),
            Slider::make('percentage')
                ->range(minValue: 0, maxValue: 100)
                ->tooltips()
                ->fillTrack()
                ->step(5)
                ->pips(PipsMode::Positions)
                ->pipsValues([5,50,100])
        ]);
    }
}
