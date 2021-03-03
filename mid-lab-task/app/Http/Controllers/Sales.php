<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
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
        $seven = PhysicalStore::where('date_sold', '>=', 'DATE(NOW()) - INTERVAL 7 DAY')->get();
        $avg = PhysicalStore::select('total_price')->where('date_sold', '>=', 'DATE(NOW()) - INTERVAL 7 DAY')->average('total_price');
        $max_item = PhysicalStore::all()->max('product_name');
        return view('sales.physical_store')
            ->with('sold_items', $items)
            ->with('today', count($items))
            ->with('last_seven', count($seven))
            ->with('avg_amount', $avg)
            ->with('item_name', $max_item);
    }

    public function store(StoreRequest $req)
    {
        $sold_item = new PhysicalStore();
        $sold_item->name = $req->name;
        $sold_item->address = $req->address;
        $sold_item->phone = $req->phone;
        $sold_item->product_id = $req->product_id;
        $sold_item->product_name = $req->product_name;
        $sold_item->unit_price = $req->unit_price;
        $sold_item->quantity = $req->quantity;
        $sold_item->total_price = $req->total_price;
        $sold_item->date_sold = $req->date_sold;
        $sold_item->payment_type = $req->payment_type;
        $sold_item->status = $req->status;
        $success = $sold_item->save();

        if($success)
        {
            $req->session()->flash('success', 'Information stored successfully');
            return redirect()->route('sales.store');
        }
        else
        {
            $req->session()->flash('error-msg', 'Information stored successfully');
            return redirect()->route('sales.store');
        }
    }
}
