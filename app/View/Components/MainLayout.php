<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public $title;
    public $fonts = null;
    public $styles = null;
    public $scripts = null;

    public function __construct($title = null)
    {
        $this->title = $title ?? "MYData.ID";
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.main');
    }
}
