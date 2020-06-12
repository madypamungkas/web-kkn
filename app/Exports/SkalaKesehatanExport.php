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
class SkalaKesehatanExport implements FromCollection, WithHeadings, WithEvents, WithColumnFormatting
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
          'Waktu Pengisian',
          'NIK',
          'Nama',
          'No Telepon',
          'Jenis Kelamin',
          'Tanggal Lahir',
          'Padukuhan',
          'RW',
          'RT',
          'Pertanyaan',
          'Jawaban',
        ];
    }

    public function columnFormats(): array
    {
      $fillData = 5 + $this->data->count();
      return [
        'E5:E'.$fillData => '[$-421]dd mmmm yyyy;@',
        'A5:A'.$fillData => "'0"
      ];
    }

    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function(BeforeSheet $event){
              $event->sheet->setCellValue('A1', 'REKAP Pendataan Dampak Covid-19');
              $event->sheet->setCellValue('A2', 'BEDOYO, KABUPATEN GUNUNGKIDUL');
              $event->sheet->setCellValue('A4', ' ');
              $event->sheet->mergeCells('A1:H1');
              $event->sheet->mergeCells('A2:H2');

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
                $event->sheet->getStyle('A5:J5')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
                $fillData = 5 + $this->data->count();
                $count = $this->data->count() / 52;
                $counter = 5;
                for ($i=1; $i <=$count ; $i++) {
                    $batas_atas = $counter + 1;
                    $batas_bawah = $batas_atas + 51;
                    $counter = $batas_bawah;
                    $event->sheet->mergeCells('A'.$batas_atas.':A'.$batas_bawah);
                    $event->sheet->mergeCells('B'.$batas_atas.':B'.$batas_bawah);
                    $event->sheet->mergeCells('C'.$batas_atas.':C'.$batas_bawah);
                    $event->sheet->mergeCells('D'.$batas_atas.':D'.$batas_bawah);
                    $event->sheet->mergeCells('E'.$batas_atas.':E'.$batas_bawah);
                    $event->sheet->mergeCells('F'.$batas_atas.':F'.$batas_bawah);
                    $event->sheet->mergeCells('G'.$batas_atas.':G'.$batas_bawah);
                    $event->sheet->mergeCells('H'.$batas_atas.':H'.$batas_bawah);
                    $event->sheet->mergeCells('I'.$batas_atas.':I'.$batas_bawah);
                }
                $event->sheet->getStyle('A5:J'.$fillData)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                    'alignment' => [
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    ]
                ]);
            },
        ];
    }
}
