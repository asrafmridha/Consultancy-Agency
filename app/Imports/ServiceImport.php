<?php

namespace App\Imports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\ToModel;

class ServiceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Service([

            
            'title'=>$row[1],
            'Short_description'=>$row[2],
            'button_text'=>$row[3],
            
        ]);
    }
}
