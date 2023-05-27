<?php

namespace App\Http\Livewire;

use App\Models\book_type;
use Livewire\Component;

class Navbar extends Component
{
    public $type;
    public $search;
    public function render()
    {
        return view('livewire.navbar');
    }

    public function hover($id)
    {
        if ($this->type != null &&  $this->type->id != $id) {
            $this->dispatchBrowserEvent('first');
        } else {
            $this->dispatchBrowserEvent('hover');
        }
        $this->type = book_type::find($id);
    }

    public function clo()
    {
        $this->dispatchBrowserEvent('clo');
    }
}
