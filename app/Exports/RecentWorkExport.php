<?php

namespace App\Exports;

use App\Models\RecentWork;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecentWorkExport implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return ['id','title','short_description'];
    }
    public function collection()
    {
        return RecentWork::get(['id','title','short_description']);
    }
}
