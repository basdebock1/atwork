<?php

namespace App\View\Components;

use App\Models\Leider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Leiding extends Component
{

    public function __construct(
        public string $tak,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.leiding', [
            'leiders' => Leider::all()->where('tak', $this->tak),
        ]);
    }
}
