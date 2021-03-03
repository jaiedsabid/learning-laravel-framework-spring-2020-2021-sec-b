<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductManage extends Controller
{
    public function index()
    {
        $existing = Product::where('status', '=', 'existing')->get();
        $upcoming = Product::where('status', '=', 'upcoming')->get();
        return view('product_manage.index')
            ->with('existing', count($existing))
            ->with('upcoming', count($upcoming));
    }

    public function existing_products()
    {

    }

    public function upcoming_products()
    {

    }

    public function add_product()
    {

    }

    public function store_product()
    {

    }
}
