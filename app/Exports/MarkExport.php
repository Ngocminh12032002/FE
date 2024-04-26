<?php

namespace App\Exports;

use App\Models\WareHouse;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class MarkExport implements WithHeadings, ShouldAutoSize, FromCollection
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $data;

    public function __construct(array $data)
    {
        // dd($data);
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data['studentMarkList'])->map(function ($item) {
            return [
                'Student ID' => $item['student']['id'],
                'Code' => $item['student']['code'],
                'Name' => $item['student']['name'],
                'Email' => $item['student']['email'],
                'Attendance' => $item['mark']['attendance'],
                'Test' => $item['mark']['test'],
                'Assignment' => $item['mark']['assignment'],
                'Exam' => $item['mark']['exam'],
            ];
        });
    }

    public function headings(): array
    {
        return [
            'STT',
            'Mã sinh viên',
            'Họ và tên',
            'Email',
            'Điểm chuyên cần',
            'Điểm kiểm tra',
            'Điểm bài tập',
            'Điểm thi',
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 6,
            'B' => 35,
            'C' => 35,
            'D' => 14,
            'E' => 17,
            'F' => 35,
            'G' => 24,
            'H' => 25,
            'I' => 25,
        ];
    }
}
