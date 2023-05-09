<?php

namespace App\Exports;

use App\Models\Recruitment;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RecruitmentAllExport implements FromView, ShouldAutoSize, WithStyles, WithDrawings, WithColumnWidths
{
    public function drawings()
    {
        $items = Recruitment::All();
        $drawings =[];
        $i = 1;
        foreach($items as $item){
            $drawings[$i] = new Drawing();
            $drawings[$i]->setName('Logo');
            $drawings[$i]->setDescription('This is my logo');
            $drawings[$i]->setPath(public_path('/storage/'.$item->Image));
            $drawings[$i]->setHeight(150);
            $drawings[$i]->setCoordinates('H'.$i+2);
            $i+=1;
        }
        
        return $drawings;
    }

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

        $fillStyle = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => ['argb' => 'FFFFFF00']
            ],
        ];
        
        for($i = 3; $i<1000; $i++){
            $sheet->getRowDimension($i)->setRowHeight(130);
        }
        $sheet->getStyle('V3:V1000')->applyFromArray($fillStyle);
        return $sheet->getStyle('A2:W1000')->applyFromArray($style);
    }

    public function columnWidths(): array
    {
        return [
            'H' => 30,
            'D' => 15,
            'M' => 40,
            'N' => 40,
            'O' => 40,
            'P' => 40,
            'Q' => 40,
            'R' => 40,
            'S' => 40,
            'T' => 40,
            'U' => 40,
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.page.export',[
            'items'=> Recruitment::All(),
            'title'=>'All Team'
        ]);
    }
}

