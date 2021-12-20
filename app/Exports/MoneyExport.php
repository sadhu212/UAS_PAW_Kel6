<?php

namespace App\Exports;

use App\Models\MoneyReport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MoneyExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return MoneyReport::all();
    }
}
