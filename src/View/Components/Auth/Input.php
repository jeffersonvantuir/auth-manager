<?php

namespace JeffersonVantuir\AuthManager\View\Components\Auth;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string|null $id = null,
        public string|null $name = null,
        public string $type = "text",
        public string|null $value = null,
        public string|null $placeholder = null,
        public string|null $class = null,
        public bool $required = false,
        public bool $hasError = false,
        public string|null $grid = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jv-auth::components.auth.input');
    }
}
