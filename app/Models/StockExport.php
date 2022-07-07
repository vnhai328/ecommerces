<?php


namespace App\Models;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StockExport implements FromCollection, WithHeadings, WithMapping
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
            'Product Name',
            'Quantity',
        ];
    }

    public function map($product): array
    {
        $qty = 0;
        foreach ($product->stocks as $key => $stock) {
            $qty += $stock->qty;
        }
        return [
            $product->name,
            $qty,
        ];
    }
}
