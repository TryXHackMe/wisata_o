<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
  
    public $href;
    public $active;
    public $mobile;
  
    public function __construct($href, $active = false, $mobile = false)
    {
        $this->href = $href;
        $this->active = $active;
        $this->mobile = $mobile;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.link');
    }
}
