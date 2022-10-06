<?php

namespace App\Imports;

use App\Models\ClientFeedback;
use Maatwebsite\Excel\Concerns\ToModel;

class FeedbackImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ClientFeedback([
            'image'     =>$row[0],
            'short_description'=>$row[1],
            'client_name'      =>$row[2],
            'designation'      =>$row[3],
             'star'        =>5,
        ]);
    }
}
