<?php

namespace FilamentMrk\Forms\Components;

use Filament\Forms\Components\TextInput;

class CashInput extends TextInput
{
    public static function make(string $name ): static
    {
        return parent::make($name)
            // ->lazy()
            // ->prefix($currency)
            // ->afterStateHydrated(fn (self $component, $state) => $component->state($state / 100))
            // ->dehydrateStateUsing(fn ($state) => $state * 100);
            ->extraInputAttributes(['class' => 'text-right'])
            ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2, false))
            ;
    }
}
