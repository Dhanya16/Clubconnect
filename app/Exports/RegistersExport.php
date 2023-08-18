<?php
use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Register::all();
    }

    public function headings(): array
    {
        return [
            'Sl no',
            'Name',
            'USN',
            'Semester',
            'Branch',
            'Phone Number',
            'Hobbies',
            'Why Us?',
        ];
    }
}