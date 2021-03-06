<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductManageRequest;
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
        $products = Product::where('status', 'existing')->simplePaginate(20);
        return view('product_manage.existing_products')->with('products', $products);
    }

    public function upcoming_products()
    {
        $items = Product::where('status', '=', 'upcoming')->simplePaginate(20);
        return view('product_manage.upcoming_products')->with('products', $items);
    }

    public function add_product()
    {

    }

    public function store_product()
    {

    }

    public function view($id)
    {
        $item = Product::find($id);
        return view('product_manage.product_details')->with('item', $item);
    }

    public function edit($id)
    {
        $item = Product::find($id);
        return view('product_manage.product_edit')->with('item', $item);
    }

    public function update($id, Request $req)
    {
        $item = Product::find($id);
        $item->product_name = $req->product_name;
        $item->category = $req->category;
        $item->unit_price = $req->unit_price;
        $item->status = $req->status;
        $item->last_updated = $req->last_updated;

        if($item->save())
        {
            $req->session()->flash('success', 'Item details updated successfully');
            return  redirect()->route('products.existing');
        }
        else
        {
            $req->session()->flash('success', 'Item details update failed!');
            return Back();
        }
    }

    public function delete($id)
    {
        $item = Product::find($id);
        return view('product_manage.product_delete')->with('item', $item);
    }

    public function e_destroy($id, ProductManageRequest $req)
    {
        if(Product::destroy($id))
        {
            $req->session()->flash('success', 'Product removed successfully.');
            return redirect()->route('products.existing');
        }
        else
        {
            $req->session()->flash('error-msg', 'Failed to remove the Product!');
            return redirect()->back();
        }
    }
    public function u_destroy($id, ProductManageRequest $req)
    {
        if(Product::destroy($id))
        {
            $req->session()->flash('success', 'Product removed successfully.');
            return redirect()->route('products.upcoming');
        }
        else
        {
            $req->session()->flash('error-msg', 'Failed to remove the Product!');
            return redirect()->back();
        }
    }

}
