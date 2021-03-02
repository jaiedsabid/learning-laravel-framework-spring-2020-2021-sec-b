<?php

namespace App\Http\Controllers;

use App\Models\PhysicalStore;
use Illuminate\Http\Request;

class Sales extends Controller
{
    public function index()
    {
        $items = PhysicalStore::all();
        return view('sales.index')->with('physical_store', count($items));
    }

    public function physical()
    {
        $items = PhysicalStore::where('date_sold', '>=', date('y-m-d'))->get();
        return view('sales.physical_store')->with('sold_items', $items);
    }
}
