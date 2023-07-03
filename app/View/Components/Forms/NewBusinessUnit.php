<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewBusinessUnit extends Component
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
        return view('components.forms.new-business-unit');
    }
}
