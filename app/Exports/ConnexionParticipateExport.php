<?php

namespace App\Exports;

use App\ConnexionParticipate;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConnexionParticipateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ConnexionParticipate::all();
    }
}
