<?php

namespace App\Exports;

use App\Models\bukumodel;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return bukumodel::all();
    }
}
