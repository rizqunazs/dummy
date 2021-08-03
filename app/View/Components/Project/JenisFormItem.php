<?php

namespace App\View\Components\Project;

use Illuminate\View\Component;

class JenisFormItem extends Component
{
    public $item;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item, $icon)
    {
        $this->item = $item;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project.jenis-form-item');
    }
}
