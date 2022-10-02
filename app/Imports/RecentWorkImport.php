<?php

namespace App\Imports;

use App\Models\RecentWork;
use Maatwebsite\Excel\Concerns\ToModel;

class RecentWorkImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RecentWork([
          'image'=>$row[0],
          'title'=>$row[1],
          'short_description'=>$row[2],

        ]);
    }
}
