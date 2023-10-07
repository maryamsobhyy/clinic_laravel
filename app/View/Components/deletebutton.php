<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class deletebutton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $action,public $model)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.deletebutton',['action'=>$this->action,'model'=>$this->model]);
    }
}
