<?php

namespace App\Imports;

use App\Models\TeamImage;
use Maatwebsite\Excel\Concerns\ToModel;

class TeamImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TeamImage([

            'image'              =>$row[1],
            'name'               =>$row[2],
            'designation'        =>$row[3],
            'fb_link'            =>$row[4],
            'twitter_link'       =>$row[5],
            'linkedin_link'      =>$row[6],
            'pinterest_link'     =>$row[7], 
           
        ]);
    }
}
