<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class PerserbaranPemudikExport implements FromCollection, WithHeadings, WithEvents
, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function headings(): array
    {
        return [
          'NIK',
          'Nama',
          'No Telepon',
          'Kelurahan',
          'RT',
          'RW',
          'Tanggal Pulang',
        ];
    }
    public function columnFormats(): array
    {
      $fillData = 4 + $this->data->count();
      return [
        'A5:A'.$fillData => "'0"
      ];
    }
    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function(BeforeSheet $event){
              $event->sheet->setCellValue('A1', 'REKAP PERSEBARAN PEMUDIK');
              $event->sheet->setCellValue('A2', 'REJOWINANGUN, KOTA YOGYAKARTA');
              $event->sheet->mergeCells('A1:D1');
              $event->sheet->mergeCells('A2:D2');
              $event->sheet->setCellValue('A3', ' ');

              $event->sheet->getStyle('A1:A2')->applyFromArray([
                  'font' => [
                      'bold' => true,
                      'size' => 16
                  ],
                  'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ]
              ]);
            },
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A4:D4')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
                $fillData = 4 + $this->data->count();
                $event->sheet->getStyle('A4:D'.$fillData)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);
            },
        ];
    }
}
