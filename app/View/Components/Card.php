<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    
    public $name; 
    public $photo;
    public $experience; 
    public $specialization;
    public function __construct($name, $photo, $experience, $specialization)
    {
        $this->name = $name;
        $this->photo = $photo;
        $this->experience = $experience;
        $this->specialization = $specialization;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
