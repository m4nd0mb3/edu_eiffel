<?php

namespace App\Exports;

use Illuminate\Support\Facades\Auth;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\DMark;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Columns\Column;

class ProvaExport implements FromView, WithEvents
{
    use Exportable;
    /**
   * @return \Illuminate\Support\Collection
   */
   public function view(): View
   {

    $id = Auth::id();

    $notas = DMark::where('estudante_id', '=', $id)->get();


       return view('estudante.boletim_trimestral', ['notas'=>$notas ]);
   }
    public function registerEvents(): array
    {
        return [
          
            AfterSheet::class    => function(AfterSheet $event) {

                $event->sheet->getStyle( 'A1:D1') -> applyFromArray(
                    [
                        'font'=>[
                            'bold'=>true
                        ],
                        'text-decotarion'=>[
                            'center'=>true
                        ]
                        
                    ]
                    
                    );
            
                  /*  $event->sheet
                    ->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
           */
                },
              
            
        ];
    }
}
