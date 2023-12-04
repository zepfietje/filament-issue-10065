<?php

namespace App\Livewire;

use App\Forms\Components\TestField;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class Welcome extends Component implements HasForms
{
    use InteractsWithForms;

    public function form(Form $form): Form
    {
        return $form->schema([
            TestField::make('test'),
        ]);
    }
}
