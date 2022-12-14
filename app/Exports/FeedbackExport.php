<?php

namespace App\Exports;

use App\Models\ClientFeedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FeedbackExport implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return ['image','short_description','client_name','designation','star'];
    }
    public function collection()
    {
        return ClientFeedback::get(['image','short_description','client_name','designation','star']);
    }
}
