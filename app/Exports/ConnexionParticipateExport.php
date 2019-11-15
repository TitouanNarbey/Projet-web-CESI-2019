<?php

namespace App\Exports;

use App\Participate;
use App\Event;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ConnexionParticipateExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Participate::all()->where('id_events','=','8');
    }
    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id_events',
            'id_user',
          ];
    }
    
}
