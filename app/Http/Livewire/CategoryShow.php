<?php

namespace App\Http\Livewire;

use App\Models\book_category;
use Livewire\Component;

class CategoryShow extends Component
{
    public $category;
    public function mount($id)
    {
        $this->category = book_category::find($id);
    }
    public function render()
    {
        return view('livewire.category-show');
    }
}
