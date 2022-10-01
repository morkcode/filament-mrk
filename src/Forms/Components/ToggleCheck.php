<?php

namespace FilamentMrk\Forms\Components;

use Filament\Forms\Components\Toggle;


class ToggleCheck  extends Toggle
{
    public static function make(string $name ): static
    {
        return parent::make($name)
            ->onColor('success')
            ->offColor('danger')
            ->onIcon('heroicon-o-check')
            ->offIcon('heroicon-o-x');
    }
}
