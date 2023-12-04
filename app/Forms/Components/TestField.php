<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Field;

class TestField extends Field
{
    protected string $view = 'forms.components.test-field';

    protected function setUp(): void
    {
        parent::setUp();

        $this->registerActions([
            Action::make('foo')
                ->livewireClickHandlerEnabled(false)
                ->form(fn (array $arguments) => dd($arguments)) // arguments are empty here
                ->action(fn (array $arguments) => dd($arguments)), // arguments are in fact available here
        ]);
    }
}
