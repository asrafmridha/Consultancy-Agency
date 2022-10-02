<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection,WithHeadings
   {
    public function headings(): array
    {
        return ['id','title','Short_description','button_text'];
    }
    public function collection()
    {
        return Service::get(['id','title','Short_description','button_text']);
    }
}
