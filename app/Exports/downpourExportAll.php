<?php

namespace App\Exports;

use App\Models\DownpourUser;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class downpourExportAll implements ShouldAutoSize, WithStyles, FromView
{
    public function styles(Worksheet $sheet)
    {
        $style = [
            // Style the first row as bold text.
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '00000000'],
                ],
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'wrapText' => TRUE
            ],
        ];
        
        for($i = 3; $i<300; $i++){
            $sheet->getRowDimension($i)->setRowHeight(40);
        }
        return $sheet->getStyle('A2:P300')->applyFromArray($style);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.page.exportDownpourAll',[
            'items'=> DownpourUser::All()
        ]);
    }
}
