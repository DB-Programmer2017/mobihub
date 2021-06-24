<?php

namespace App\Exports;

use App\Models\ProductAllModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductAllModel::orderBy('id', 'asc')->get();
    }
}
