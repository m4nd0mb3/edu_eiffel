<?php

namespace App\Exports;

use App\Models\DMark;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
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


class NotaExport implements FromView, WithEvents
 /*ShouldAutoSize,
 WithMapping,
 WithHeadings,

 WithDrawings,
 WithCustomStartCell,
 WithStyles,
 WithColumnWidths*/

{
    use Exportable;
     /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('pedagogia.boletim_trimestral', [
            'invoices' => DMark::all()
        ]);
    }

  /*  public function registerEvents(): array {
        return [
            BeforeSheet::class => function (BeforeSheet $event) {
                $event->sheet
                    ->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            },
        ];
    }

  /*  public function map($notas): array
    {
        return [
            $notas->id,
            $notas->estudante->name,
            $notas->nota,
            $notas->created_at,

            
           // Date::dateTimeToExcel($invoice->created_at),
        ];
    }

    public function headings(): array
    {
        return [
           
            'Id  ',
            'Nome',
            'Nota',
            'Data',
        ];
    }
*/
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
            
                    $event->sheet
                    ->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            },
              
            
        ];
    }
/*
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/ondjiva/logondal.jpg'));
        $drawing->setHeight(60);
        $drawing->setCoordinates('A2');

        return $drawing;
    }

    public function startCell(): string
    {
        return 'A7';
    }

    public function columnWidths(): array
    {
        return [
           
            'B' => 30,            
        ];
    }

  

    public function styles(Worksheet $sheet)
    {
        return [
           
            // Styling a specific cell by coordinate.
            'A1' => [
               
               
            ],

          
        ];
    }
    */
}
