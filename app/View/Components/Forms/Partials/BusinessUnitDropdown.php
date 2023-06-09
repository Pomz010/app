<?php

namespace App\View\Components\Forms\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BusinessUnitDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $businessUnits;
    public function __construct($businessUnits)
    {
        $this->businessUnits = $businessUnits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.partials.business-unit-dropdown');
    }
}
