<?php
namespace App\Imports;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel
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
            return new User([
                'name'     => $row[0],
                'slug'    => $row[1],
                'part_number' => $row[2],
                'description' => $row[3]
            ]);
        }
    }
}
