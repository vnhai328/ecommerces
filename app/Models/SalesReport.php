<?php


namespace App\Models;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SalesReport implements FromCollection, WithHeadings, WithMapping
{
    protected $data;

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
//            'STT',
            'Product Name',
            'Num of Sale',
        ];
    }

    public function map($product): array
    {
        return [
            $product->name,
            $product->num_of_sale,
        ];
    }
}
