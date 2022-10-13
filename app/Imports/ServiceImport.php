<?php

namespace App\Imports;

use App\Models\Service;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;

class ServiceImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Service([
            'icon'               =>$row['icon'],
            'title'              =>$row['title'],
            'Short_description'  =>$row['short_description'],
            'button_text'        =>$row['button_text'],
            'image'              =>$row['image'],
            'short_description2' =>$row['short_description2'],
            'advise'             =>$row['advise'],
            'advisor_name'       =>$row['advisor_name'],
            'heading'            =>$row['heading'],
            'point'              =>$row['point'],    
            'slug'               =>$row['slug'],    
        ]);
    }
}
