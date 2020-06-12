<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class ScreeningCovdiExport implements FromCollection, WithHeadings, WithEvents, WithColumnFormatting
, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data, $rw, $rt;

    public function __construct($data, $rw, $rt)
    {
        $this->data = $data;
        $this->rw = $rw;
        $this->rt = $rt;
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
          'Jenis Kelamin',
          'Tanggal Lahir',
          'Padukuhan',
          'RW',
          'RT',
          'Kependudukan',
          'Asal Rantau',
          'Tanggal Skrining',
          'Hasil Skrining'
        ];
    }
    public function columnFormats(): array
    {
      $fillData = 7 + $this->data->count();
      return [
        'A8:A'.$fillData => "'0"
      ];
    }
    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function(BeforeSheet $event){
              $event->sheet->setCellValue('A1', 'REKAP SKRINING COVID 19');
              $event->sheet->setCellValue('A2', 'BEDOYO, KABUPATEN GUNUNGKIDUL');
              $event->sheet->setCellValue('A4', 'RT:');
              $event->sheet->setCellValue('B4', $this->rt);
              $event->sheet->setCellValue('A5', 'RW:');
              $event->sheet->setCellValue('B5', $this->rw);
              $event->sheet->setCellValue('A6', ' ');
              $event->sheet->mergeCells('A1:I1');
              $event->sheet->mergeCells('A2:I2');

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
                $event->sheet->getStyle('A7:L7')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
                $fillData = 7 + $this->data->count();
                $event->sheet->getStyle('A7:L'.$fillData)->applyFromArray([
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
