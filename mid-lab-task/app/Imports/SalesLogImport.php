<?php

namespace App\Imports;

use App\Models\PhysicalStore;
use Maatwebsite\Excel\Concerns\ToModel;

class SalesLogImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PhysicalStore([
            'name' => $row[0],
            'address' => $row[1],
            'phone' => $row[2],
            'product_id' => $row[3],
            'product_name' => $row[4],
            'unit_price' => $row[5],
            'quantity' => $row[6],
            'total_price' => $row[7],
            'date_sold' => $row[8],
            'payment_type' => $row[9],
            'status' => $row[10],
        ]);
    }
}
