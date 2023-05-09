<?php

namespace App\Exports;

use App\Models\DroughtRegistration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class droughtExport implements ShouldAutoSize, WithStyles, FromView, WithColumnWidths
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
        return $sheet->getStyle('A2:S300')->applyFromArray($style);
    }

    public function columnWidths(): array
    {
        return [
            'J' => 50,
            'K' => 50,
            'L' => 50,
            'M' => 50,
            'N' => 50,
            'O' => 50,
            'P' => 50,
            'Q' => 50,
            'R' => 50,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.page.exportDrought',[
            'items'=> DroughtRegistration::All()
        ]);
    }
}
