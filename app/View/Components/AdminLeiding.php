<?php

namespace App\View\Components;

use Closure;
use App\Models\Leider;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLeiding extends Component
{
    public function __construct(
        public string $tak,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-leiding', [
            'leiders' => Leider::all()->where('tak', $this->tak),
        ]);
    }
}
