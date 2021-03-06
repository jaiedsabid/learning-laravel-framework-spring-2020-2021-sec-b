<?php

namespace App\Exports;

use App\Models\PhysicalStore;
use Maatwebsite\Excel\Concerns\FromCollection;

class SalesLogExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PhysicalStore::select('*')
            ->where('date_sold', '>=', 'DATE(NOW()) - INTERVAL 30 DAY')->get();
    }
}
