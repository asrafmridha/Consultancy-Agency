<?php

namespace App\Exports;

use App\Models\RecentWork;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecentWorkExport implements FromCollection,WithHeadings

{

    public $id = '';
    // public $header = '';
        public function __construct($id)
    {
        $this->id = $id;
        // $this->header = $header;
    }

    public function headings(): array
    {
        return ['id','title','short_description'];
    }
    public function collection()
    {
        // return RecentWork::get(['id','title','short_description']);
        return RecentWork::whereIn('id', $this->id)->get();
    }
}
