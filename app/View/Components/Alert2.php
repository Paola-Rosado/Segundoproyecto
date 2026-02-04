<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public $title;
    public function __construct($type='info',$title=null)
    {
        //Recibimos el parametro y devolvemos la clase correspondiente
        switch($type){
        case'info';
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";
            break;
        case'Danger';
            $class="text-red-800 bg-red-50 dark:text-red-300";
            break;
        case'Warming';
            $class="text-yellow-800 bg-yellow-50 dark:text-yellow-300";
            break;
        case'Success';
            $class="text-green-800 bg-green-50 dark:text-green-300";
            break;
        default:
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";
        
        }
        $this-> class=$class;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
