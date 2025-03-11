<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class alert extends Component
{   public $message,$dismissible,$type,$id,$paragraph;
    /**
     * Create a new component instance.
     */
    public function __construct($message,$type="warning",$id=0, $dismissible=false,$paragraph='')
    {
        $this->message = $message;
        $this->type=$type;
        $this->id = $id;
        $this->dismissible = $dismissible;
        $this->paragraph = $paragraph;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
