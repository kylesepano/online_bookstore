<?php

namespace App\Http\Livewire;

use App\Models\book_criteria;
use Livewire\Component;

class CriteriaShow extends Component
{
    public $criteria;
    public function mount($id)
    {
        $this->criteria = book_criteria::find($id);
    }
    public function render()
    {
        return view('livewire.criteria-show');
    }
}
