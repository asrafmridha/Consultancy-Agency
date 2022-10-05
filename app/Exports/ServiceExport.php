<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection,WithHeadings
   {
    public function headings(): array
    {
        return ['id','icon','title','Short_description','button_text','image','short_description2','advise','advisor_name','heading','point','slug'];
    }
    public function collection()
    {
        return Service::get(['id','icon','title','Short_description','button_text','image','short_description2','advise','advisor_name','heading','point','slug']);
    }
}
