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
            'icon'               =>$row[1],
            'title'              =>$row[2],
            'Short_description'  =>$row[3],
            'button_text'        =>$row[4],
            'image'              =>$row[5],
            'short_description2' =>$row[6],
            'advise'             =>$row[7],
            'advisor_name'       =>$row[8],
            'heading'            =>$row[9],
            'point'              =>$row[10],    
            'slug'               =>$row[11],    
        ]);
    }
}
