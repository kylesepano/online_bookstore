<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\book_criteria;
use App\Models\book_type;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function type($type)
    {
        $type = book_type::where('name', $type)->first();
        return view('pages.type', ['type' => $type]);
    }
    public function criteria($type, $criteria)
    {
        $criteria = book_criteria::where('name', $criteria)->whereIn('book_type_id', book_type::where('name', $type)->pluck('id')->toArray())->first();
        return view('pages.criteria', ['criteria' => $criteria]);
    }
    public function category($type, $criteria, $category)
    {
        $category = book_category::where('name', $category)->whereIn('book_criteria_id', book_criteria::where('name', $criteria)->whereIn('book_type_id', book_type::where('name', $type)->pluck('id')->toArray())->pluck('id')->toArray())->first();
        return view('pages.category', ['category' => $category]);
    }
}
