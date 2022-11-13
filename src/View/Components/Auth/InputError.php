<?php

namespace JeffersonVantuir\AuthManager\View\Components\Auth;

use Illuminate\View\Component;

class InputError extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $message
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
        return view('jv-auth::components.auth.inputError');
    }
}
