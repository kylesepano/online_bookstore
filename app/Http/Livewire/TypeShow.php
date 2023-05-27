<?php

namespace App\Http\Livewire;

use App\Models\book_type;
use Livewire\Component;

class TypeShow extends Component
{
    public $type;
    public function mount($id)
    {
        $this->type = book_type::find($id);
    }
    public function render()
    {
        return view('livewire.type-show');
    }
}
