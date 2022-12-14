<?php

namespace App\Exports;

use App\Models\TeamImage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeamExport implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return ['id','image','name','designation','fb_link','twitter_link','linkedin_link','pinterest_link'];
    }

    public function collection()
    {
        return TeamImage::get(['id','image','name','designation','fb_link','twitter_link','linkedin_link','pinterest_link']);
    }
}
