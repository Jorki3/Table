<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    public $title;
    public $headers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, array $headers)
    {
        $this->title = $title;
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table');
    }
}
