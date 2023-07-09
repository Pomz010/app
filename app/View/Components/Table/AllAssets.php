<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AllAssets extends Component
{
    /**
     * Create a new component instance.
     */
    public $hardwareAssets;
    public function __construct($hardwareAssets)
    {
        $this->hardwareAssets = $hardwareAssets;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.all-assets');
    }
}
