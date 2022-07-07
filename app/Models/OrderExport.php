<?php


namespace App\Models;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
use function GuzzleHttp\Promise\all;

class OrderExport implements FromCollection, WithHeadings, WithMapping
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
            'shipping_type',
            'delivery_status',
            'payment_type',
            'payment_status',
            'grand_total',
            'code'
        ];
    }

    public function map($orders): array
    {
        return [
            $orders->shipping_type,
            $orders->delivery_status,
            $orders->payment_type,
            $orders->payment_status,
            $orders->grand_total,
            $orders->code,
        ];
    }
}
