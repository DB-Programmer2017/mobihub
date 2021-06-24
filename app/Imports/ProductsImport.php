<?php

namespace App\Imports;

use App\Models\ProductAllModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] =='Name'){
        }else{
            return new ProductAllModel([
                'name'              => $row[0],
                'slug'              => $row[1],
                'part_number'       => $row[2],
                'description'       => $row[3],
                'dealer_id'         => $row[4],
                'brand_id'          => $row[5],
                'category_id'       => $row[6],
                'sub_category_id'   => $row[7]
            ]);
        }
    }
}
